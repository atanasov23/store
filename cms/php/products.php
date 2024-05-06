<?php
require_once "../php/config.php";

if (empty($_GET['id'])) {

    $query = mysqli_query($conn, "SELECT * FROM products WHERE categorie_id=1 GROUP BY id ORDER BY categorie_id");

    $result = mysqli_fetch_all($query);

    print json_encode($result);
} else {
    $id =  mb_substr($_GET['id'], -1);

    $query = mysqli_query($conn, "SELECT * FROM products WHERE categorie_id=$id GROUP BY id ORDER BY categorie_id");

    $result = mysqli_fetch_all($query);

    print json_encode($result);
}
