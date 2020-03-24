<?php

namespace SON\Di;

use App\Conn;

class Container
{
    //Retorna um model
    public static function getModel($model)
    {
        $class = "App\\Models\\" . ucfirst($model);
        return new $class(Conn::getDB());
    }
}