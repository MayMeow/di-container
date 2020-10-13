<?php

namespace Emma\DI\Application\Service;

use Emma\DI\Application\Model\Address;
use Emma\DI\Application\Model\User;

/**
 * Class UserManagerService
 * @package Emma\DI\Application\Service
 */
class UserManagerService implements UserManagerServiceInterface
{
    /**
     * @var User
     */
    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        $this->user->setName('Emma');
        $this->user->setSurName('Watson');

        return $this->user;
    }

    /**
     * @param string $name
     * @param string $lastName
     */
    public function setUser(string $name, string $lastName)
    {
        $this->user->setName($name);
        $this->user->setSurName($lastName);
        $this->user->getAddress()->setStreet('Street');
    }
}