# di-container

Dependency injection container in PHP example

## How to

Initialize container

```php
$container = new \Emma\DI\Container();
```

Register application

```php
$container->set(\Emma\DI\Application\Application::class);
```

and services

```
// Register Services
$container->set(\Emma\DI\Application\Service\UserManagerServiceInterface::class, \Emma\DI\Application\Service\UserManagerService::class);
```

Example service

```php
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
}
```

* Classes that you want resolve from interface need to be registered
* If you want resolve classes `public function __construct(User $user)` thosw will be resolved
automatically and dont need to be registered