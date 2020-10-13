<?php

namespace Emma\DI\Application\Model;

/**
 * Class User
 * @package Emma\DI\Application\Model
 */
class User
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $surName;

    /**
     * @var Address
     */
    protected Address $address;

    public function __construct(Address $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurName(): string
    {
        return $this->surName;
    }

    /**
     * @param string $surName
     */
    public function setSurName(string $surName): void
    {
        $this->surName = $surName;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }
}