<?php

namespace Emma\DI\Application;

use Emma\DI\Application\Model\User;
use Emma\DI\Application\Service\UserManagerServiceInterface;

/**
 * Class Application
 * @package Emma\DI\Application
 */
class Application
{
    protected UserManagerServiceInterface $userManager;

    public function __construct(UserManagerServiceInterface $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * @return User
     * @throws \Exception
     */
    public function test()
    {
        $this->userManager->setUser('Emma', 'Watson');

        return $this->userManager->getUser();
    }
}