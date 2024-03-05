<?php

function head($page)
{

    //Page
    if ($page == 1) {
        $title = "TyroStudio";
    } else if ($page == 2) {
        $title = "TyroStudio - Nos Jeux";
    } else if ($page == 3) {
        $title = "TyroStudio - A propos";
    } else if ($page == 4) {
        $title = "TyroStudio - Légal";
    } else {
        $title = "TyroStudio - 404";
    }


    include "env.php";

    echo '<!doctype html> <html lang="fr"> <head>';
    require_once "composant/meta.phtml";
    echo '<title>' . $title . '</title>';
    echo '<link href="' . $env_urlLogo . '" rel="shortcut icon">';
    require_once "extension.php";
    echo '</head>';
}
