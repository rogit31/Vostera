<?php

namespace Core;

class Router
{
    //Defining a new array called routes
    public array $routes = [
        'GET' =>[],
        'POST' =>[]
    ];

    /*Define Router method called get, that's called when defining routes for get requests
 -When called, it references its own instance of addRoute, passes 'GET' as a string as the method,
the pattern (the first argument you give when you call it, aka the requested URL,
and the $handler, or the method referenced to render the actual page
    */

    public function get($pattern, $handler)
    {
        $this->addRoute('GET', $pattern, $handler);
    }
//Post does the same thing but adds 'POST' as a string to the method instead.
    public function post($pattern, $handler)
    {
        $this->addRoute('POST', $pattern, $handler);
    }
//When addRoute is called, it checks for the existence of a key value of $method, and if it doesn't exist will create it, and
//will append a new value to it, as an array of ['pattern' => $pattern, 'handler' => $handler]
    private function addRoute($method, $pattern, $handler)
    {
        $this->routes[$method][] = ['pattern' => $pattern, 'handler' => $handler];
    }
//This function is never actually called. Which makes me suspicious that this is the cause of our bug.
//Where is this supposed to fit? Well surely the actual request needs to be passed through this and then to the rest of our router?
//A user makes a HTTP request to index.php, index.php runs the router-> get function that should call the page in question to be rendered through the PageController method...
//
    public function route()
    {
        //Defines a variable called uri. The parse_url function with the secondary optional argument PHP_URL_PATH makes it so that
        //we only get the path of the request. The trim, with second argument '/' will trim any trailing slashes from the request.
        //$method is self-explanatory.
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $method = $_SERVER['REQUEST_METHOD'];

        //Simple if check for if the route used is not in our router array
        if (!isset($this->routes[$method])) {
            header('HTTP/1.0 405 Method Not Allowed');
            return false;
        }

        //then for each of the routes in our array, that were defined and called in index.php as soon as our user accessed our application,
        //we define a new variable $pattern that uses regex to capture the value of the id and sets it to the $matches variable.
        //How the regex actually works seems pretty complex. I am confused as to how in this code the regex just replaces the
        //value in {id}, and stores it... but not in a variable or anything? And then when it's called with preg_match it exists again?
        //Anyways it works somehow, and when it does it calls any function it can find with a matching string value of
        //whatever the handler name defined in index.php is, and the query if it exists.
        foreach ($this->routes[$method] as $route) {
            $pattern = '@^' . preg_replace('@{[^/]+}@', '([^/]+)', $route['pattern']) . '$@';
            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // Remove the full match
                return call_user_func_array($route['handler'], $matches);
            }
        }

    }
}
