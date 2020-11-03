<?php


namespace Feddorra\Customer;


/**
 * Interface CustomerInterface
 *
 * @package Feddorra\Customer
 */
interface CustomerInterface {

    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getSurname(): string;

    /**
     * @return string
     */
    public function getPhoneNumber(): string;

    /**
     * @return string
     */
    public function getAddress(): string;

    /**
     * @return string
     */
    public function getDateOfBirth(): string;

    /**
     * @param int $id
     * @return CustomerInterface
     */
    public function setId(int $id): CustomerInterface;

    /**
     * @param string $name
     * @return CustomerInterface
     */
    public function setName(string $name): CustomerInterface;

    /**
     * @param string $surname
     * @return CustomerInterface
     */
    public function setSurname(string $surname): CustomerInterface;

    /**
     * @param string $phoneNumber
     * @return CustomerInterface
     */
    public function setPhoneNumber(string $phoneNumber): CustomerInterface;

    /**
     * @param string $address
     * @return CustomerInterface
     */
    public function setAddress(string $address): CustomerInterface;

    /**
     * @param string $dateOfBirth
     * @return CustomerInterface
     */
    public function setDateOfBirth(string $dateOfBirth): CustomerInterface;

}