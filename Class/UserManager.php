<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

class UserManager extends BaseManager
{
    public function __construct(PDO $pdo) {
        parent::__construct($pdo);
        // My Own Fucking Code
    }

    public function add(User $user) {
        $sql = "INSERT INTO my_user (id, username) VALUES (null, ".$this->pdo->quote($user->getUsername()).")";
        return $this->pdo->query($sql);
    }
}