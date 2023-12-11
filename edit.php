<center>
<?php

include("config.php");
include("firebaseRdb.php");
$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("pirates/$id");
$data = json_decode($retrieve, 1);
?>

<form method="post" action="action_edit.php">
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="name" value="<?php echo $data['name']?>"></td>
        </tr>

        <tr>
            <td>Bounty</td>
            <td>:</td>
            <td><input type="text" name="bounty" value="<?php echo $data['bounty']?>"></td>
        </tr>

        <tr>
            <td>Power</td>
            <td>:</td>
            <td><input type="text" name="power" value="<?php echo $data['power']?>"></td>
        </tr>

        <tr>
            <td>Picture</td>
            <td>:</td>
            <td><input type="text" name="picture" value="<?php echo $data['imageurl']?>"></td>
        </tr>

        <tr>
            <td>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" value="SAVE">
            </td>
        </tr>
</table>
</form>
</center>