<?php


class Autoload
{
    public function loadClass($className) {
        $str = str_replace(['app\\', '\\'], ['../', '/'], $className);
        include $str . '.php';
    }
}

