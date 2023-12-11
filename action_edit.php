<center>
<?php
session_start();
include("config.php");
include("firebaseRdb.php");
$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];

$update = $db->update("pirates", $id,[
    "name" => $_POST['name'],
    "bounty" => $_POST['bounty'],
    "power" => $_POST['power'],
    "imageurl" => $_POST['picture']
]);


if($update){
    $_SESSION['status'] ="Record updated successfully";
    header('Location: index.php');
}
else{
    $_SESSION['status'] ="Error updating record...";
    header('Location: index.php');

}


?>
</center>