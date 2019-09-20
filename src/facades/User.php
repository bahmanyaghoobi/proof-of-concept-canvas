<?php


namespace UofT\Canvas\Facades;

use Illuminate\Support\Facades\Facade;

class User extends Facade {

    protected static function getFacadeAccessor() {
        return 'canvas-message';
    }
}