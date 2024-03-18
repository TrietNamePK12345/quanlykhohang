<?php

namespace App\HTTP\Middleware;

abstract class BaseMiddleware
{
    abstract public function execute();
}