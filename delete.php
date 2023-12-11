<center>
<?php
session_start();
include("config.php");
include("firebaseRdb.php");
$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];

if($id != ""){
    $delete = $db ->delete("pirates", $id);
    echo "data deleted...";


}

if($delete){
    $_SESSION['status'] ="Record deleted successfully";
    header('Location: index.php');
}
else{
    $_SESSION['status'] ="Error in deleting record...";
    header('Location: index.php');

}

?>
</center>