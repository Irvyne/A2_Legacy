<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

class RedisSessionStorage implements SessionStorageInterface
{
    public function getSession($key) {
        // Get the $key session from Redis
        return null;
    }
    public function setSession($key, $value) {
        // Set the $key => $value session in Redis
        return null;
    }
}