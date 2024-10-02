<?php

class Controller
{
    public static function redirect($path)
    {
        return require("./views/$path.view.php");
    }
};