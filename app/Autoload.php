<?php

class Autoload {
    public static function register() : void{
        spl_autoload_register(array(__CLASS__, 'load'));
    }

    public static function load(string $className) : void{
        $baseDir  = __DIR__ . '/';
        $directories = [
            'core/',
            'controllers/',
            'models/',
            'utils/',
            '',
        ];

        foreach ($directories as $directory) {
            $file = $baseDir . $directory . $className . '.php';
            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
    }
}

Autoload::register();