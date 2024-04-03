<?php
include("db.php");
session_start();
if (isset($_POST['input'])) {

    if (isset($_SESSION['loggedin'])) {

        $input = $_POST['input'];
        $query = "SELECT title, url FROM articles WHERE title LIKE ?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $inputParam);
        $inputParam = '%' . $input . '%';
        $stmt->execute();
        $result = $stmt->get_result();


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $title = $row["title"];
                $url = $row["url"];

                echo '
                <a class="result" href="' . $url . '" >' . $title . '</a>
                ';
            }
        } else {
            echo "No articles found";
        }
    } else {
        $input = $_POST['input'];
        $query = "SELECT title, url FROM articles WHERE title LIKE ? AND secret = 'N'";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $inputParam);
        $inputParam = '%' . $input . '%';
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $title = $row["title"];
                $url = $row["url"];

                echo '
                <a class="result" href="' . $url . '" >' . $title . '</a>
                ';
            }
        } else {
            echo "No articles found";
        }
    }
}
