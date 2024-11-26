<?php
include 'koneksi.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"]; 
    $query = "DELETE FROM results WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("Location: modulpraktek.php");
        exit; 
    } else {
        echo "Error: Could not execute $query. " . mysqli_error($conn);
    }
} else {
    header("Location: modulpraktek.php");
    exit;
}
?>
