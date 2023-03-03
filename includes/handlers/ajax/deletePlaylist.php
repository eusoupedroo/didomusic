<?php 
include("../../config.php");

if(isset($_POST['playlistId'])){

    $playlistId = $_POST['playlistId'];

    $deactivatePlaylistQuery = mysqli_query($con, "UPDATE playlists SET flag_active = '0' WHERE id= '$playlistId'  ");
    $deactivateSongsPlaylistQuery = mysqli_query($con, "UPDATE playlistsongs SET flag_active = '0' WHERE playlistId= '$playlistId'  ");


} else{
    echo "Desculpe, não foi excluir criar sua playlist";
}
?>