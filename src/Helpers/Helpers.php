<?php

namespace App\Helpers;
use App\Config\Database;

$db = new Database();
$conn = $db->connect();
class Helpers{

     public function generateSlugById($title, $article_id): string
     {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title . '-' . $article_id)));
    }

}
