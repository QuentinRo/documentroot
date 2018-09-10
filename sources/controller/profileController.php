<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 02.09.18
 * Time: 16:42
 */



// reprendre toute les infos du profile avec l'id
require_once ("sources/model/artists.php");

foreach (getArtists() as $artist )
{//arrête la recherche quand on pointe sur l'id du bon artist, donc on à toute ses données dans la ligne.
if ($artist['id'] == $artistId)
    break;
}

require_once ("sources/view/profileView.html");

?>