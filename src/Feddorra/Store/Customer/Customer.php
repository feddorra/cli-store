<?php


namespace Feddorra\Store\Customer;


/**
 * Class Customer
 *
 * @package Feddorra\Store\Customer
 */
class Customer implements CustomerInterface {

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
    private string $address;

    /**
     * @var string
     */
    private string $dateOfBirth;

    /**
     * Customer constructor.
     */
    public function __construct() {
        $this->id = null;
        $this->name = '';
        $this->surname = '';
        $this->phoneNumber = '';
        $this->address = '';
        $this->dateOfBirth = '';
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
    public function getAddress(): string {
        return $this->address;
    }

    /**
     * @inheritDoc
     */
    public function getDateOfBirth(): string {
        return $this->dateOfBirth;
    }

    /**
     * @inheritDoc
     */
    public function setId(int $id): CustomerInterface {
        $this->id = $id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name): CustomerInterface {
        $this->name = $name;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setSurname(string $surname): CustomerInterface {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setPhoneNumber(string $phoneNumber): CustomerInterface {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setAddress(string $address): CustomerInterface {
        $this->address = $address;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDateOfBirth(string $dateOfBirth): CustomerInterface {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
}