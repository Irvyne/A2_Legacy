<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */
spl_autoload_register(function ($className) {
    if (file_exists(__DIR__.'/Class/'.$className.'.php'))
        require_once __DIR__.'/Class/'.$className.'.php';
});