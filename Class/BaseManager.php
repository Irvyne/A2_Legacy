<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

abstract class BaseManager
{
    /**
     * @var PDO
     */
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
}