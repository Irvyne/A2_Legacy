<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

interface UserInterface
{
    public function storeUserInSession();

    public function loadUserFromSession();
}