<?php
include("../../config.php");

if(isset($_POST['albumId']) && isset($_POST['username'])) {

	$album = $_POST['albumId'];
	$username = $_POST['username'];
    $favoriteAlbumQuery = mysqli_query($con, "INSERT INTO favorites_albums VALUES ('', '$album', '$username')");

}
else {
	echo "Error";
}

?>