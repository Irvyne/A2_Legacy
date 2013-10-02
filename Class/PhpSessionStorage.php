<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

class PhpSessionStorage implements SessionStorageInterface
{
    public function __construct() {
        session_start();
    }

    public function getSession($key)
    {
        return !empty($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function setSession($key, $value)
    {
        return $_SESSION[$key] = $value;
    }
}