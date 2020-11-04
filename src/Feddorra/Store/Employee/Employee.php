<?php


namespace Feddorra\Store\Employee;


/**
 * Class Employee
 *
 * @package Feddorra\Store\Employee
 */
class Employee implements EmployeeInterface {

    /**
     * @var int|null
     */
    private ?int $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $surname;

    /**
     * @var string
     */
    private string $phoneNumber;

    /**
     * @var string
     */
    private string $password;

    /**
     * Employee constructor.
     */
    public function __construct() {
        $this->id = null;
        $this->name = '';
        $this->surname = '';
        $this->phoneNumber = '';
        $this->password = '';
    }

    /**
     * @inheritDoc
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function getSurname(): string {
        return $this->surname;
    }

    /**
     * @inheritDoc
     */
    public function getPhoneNumber(): string {
        return $this->phoneNumber;
    }

    /**
     * @inheritDoc
     */
    public function getPassword(): string {
        return $this->password;
    }

    /**
     * @inheritDoc
     */
    public function setId(int $id): EmployeeInterface {
        $this->id = $id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name): EmployeeInterface {
        $this->name = $name;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setSurname(string $surname): EmployeeInterface {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setPhoneNumber(string $phoneNumber): EmployeeInterface {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setPassword(string $password): EmployeeInterface {
        $this->password = $password;
        return $this;
    }
}