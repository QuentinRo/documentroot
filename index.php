<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 02.09.18
 * Time: 15:51
 */

$appVersion = "v1.0";

$page = isset($_GET["page"]) ? $_GET["page"] : "home";

// il faut vérifier si on envoie bien l'id
switch ($page)
{
    case 'home':
    case 'list':
        break;
    case 'profile':
    case 'preview':
    if (isset($_GET["id"]))
        $artistId = $_GET["id"];
    else
    {
        $page = 'error';
        $errormessage = "La page demandée n'existe pas";
    }
    break;
    default:
        $page = 'error';
        $errormessage = "La page demandée n'existe pas";
}

ob_start();
include("sources/controller/$page"."Controller.php"); // "call" to the controller
$content = ob_get_contents();
ob_end_clean();

include("sources/view/layout.html");
?>