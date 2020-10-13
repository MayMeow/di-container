<?php

namespace Emma\DI\Application\Service;

use Emma\DI\Application\Model\User;

interface UserManagerServiceInterface
{
    public function setUser(string $name, string $lastName);

    public function getUser(): User;
}