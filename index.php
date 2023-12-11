<center>
<?php
session_start();
if (isset($_SESSION['status']))
{
    echo "<h5>" .$_SESSION['status']. "</h5>";
    unset($_SESSION['status']);
}




include("config.php");
include("firebaseRdb.php");
$db = new firebaseRDB($databaseURL);
?>

<title>Firebase Data Entry</title>
<a href="add.php"><button>ADD DATA</button></a>

<table border="1" style="background-color: #BFCCB5" width="700">
    <tr>
        <td style="text-align: center;">Picture</td>
        <td style="text-align: center;">Last Name</td>
        <td style="text-align: center;">First Name</td>
        <td style="text-align: center;">Mi</td>
        <td colspan="2" style="text-align: center;">Action</td>
    
    </tr>

    <?php
    $data = $db->retrieve("pirates");
    $data = json_decode($data,1);

    if(is_array($data)){
        foreach($data as $id => $pirates){
            echo "<tr>
                <td><img src='{$pirates['imageurl']}' width='200' height='200'></td>
                <td>{$pirates['name']}</td>
                <td>{$pirates['bounty']}</td>
                <td>{$pirates['power']}</td>
                <td><a href='edit.php?id=$id'>EDIT</a></td>
                <td><a href='delete.php?id=$id'>DELETE</a></td>

            
            </tr>";

        }
    }
    ?>
</table>
</center>