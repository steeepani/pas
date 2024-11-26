<?php
include 'koneksi.php';
?>
<?php
    require_once "koneksi.php";
    if(isset($_POST['submit'])){

        $nama = $_POST['nama'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];

        if($nama != "" && $email != "" && $phone != ""){
            $sql = "INSERT INTO results (`nama`, `Email`, `phone`) VALUES ('$nama', '$email' $phone)";
            if (mysqli_query(mysql: $conn, query: $sql)) {
                header(header: "location: modulpraktek.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Name, Email, and Phone Number cannot be empty!";
        }
    }
?>