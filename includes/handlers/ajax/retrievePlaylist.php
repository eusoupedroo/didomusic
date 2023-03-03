<?php 
include("../../config.php");

if(isset($_POST['playlistId'])){

    $playlistId = $_POST['playlistId'];

    $retrievePlaylistQuery = mysqli_query($con, "UPDATE playlists SET flag_active = '1' WHERE id= '$playlistId'  ");
    $retrieveSongsPlaylistQuery = mysqli_query($con, "UPDATE playlistsongs SET flag_active = '1' WHERE playlistId= '$playlistId'  ");


} else{
    echo "Desculpe, não conseguimos recuperar essa playlist";
}
?>