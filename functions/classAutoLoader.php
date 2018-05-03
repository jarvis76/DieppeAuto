<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 03/05/2018
 * Time: 09:47
 */


//sert a appeler les fichiers dans classes sans faire un include
function classAutoLoader($className) {
    require_once "./classes/" . $className . ".php";
}