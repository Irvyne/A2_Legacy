<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/autoload.php';

$sessionStorage = new PhpSessionStorage();
$user = new User($sessionStorage, array('id'=>1,'username'=>'John Doe'));
//$user = new User($sessionStorage);

var_dump($user);
