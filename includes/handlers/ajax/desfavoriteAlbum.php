<?php
include("../../config.php");

if(isset($_POST['albumId']) && isset($_POST['username'])) {

	$album = $_POST['albumId'];
	$username = $_POST['username'];
    $removeQuery = mysqli_query($con, "DELETE FROM favorites_albums WHERE albumId='$album' AND username='$username'");

}
else {
	echo "Error";
}

?>