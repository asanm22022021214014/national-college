<?php include("connection.php");?>
<?php 
$id = $_GET['id'];

$query = "DELETE  FROM kanna  WHERE id = '$id' ";
$data = mysqli_query($conn, $query);

if($data)
{
    echo "Record Deleted";

    ?>
      <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/connection.php"/>

    <?php
}
else
{
    echo "Failed To Delete";
}
?>
