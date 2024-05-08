<?php
require_once('./config.php');
require_once('../utils/str_convert.php');
require_once('../utils/create_categorie_html.php');

$data = $_POST["data"];

$insert = "INSERT INTO categorie_names (name) VALUES('$data')";

$query = mysqli_query($conn, $insert);

if (true) {
    /* echo convert_str('Kris'); */
    $createFile = fopen('/xampp/htdocs/shop/' . convert_str($data) . '.html', 'w', './');
    $writeFile = fwrite($createFile, html($data));
    fclose($createFile);
    $query = mysqli_query($conn, "SELECT * FROM categorie_names WHERE name='$data'");
    $result = mysqli_fetch_array($query);
    print json_encode((int)$result['id']);
} else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
