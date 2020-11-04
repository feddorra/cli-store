<?php


namespace Feddorra\Store\Customer;


use PDOStatement;
use Feddorra\Store\DataBase;


/**
 * Class CustomerRepository
 *
 * @package Feddorra\Store\Customer
 */
class CustomerRepository {

    /**
     * @param CustomerInterface $customer
     * @return false|PDOStatement
     */
    public function save(CustomerInterface $customer) {
        if($customer->getId()) {
            $sql = "
                UPDATE customer
                SET name = '{$customer->getName()}'
                  , surname = '{$customer->getSurname()}'
                  , phone = '{$customer->getPhoneNumber()}'
                  , address = '{$customer->getAddress()}'
                  , date_of_birth = '{$customer->getDateOfBirth()}'
                WHERE id = '{$customer->getId()}'
            ";
        } else {
            $sql = "
                INSERT INTO customer
                (name
                , surname
                , phone
                , address
                , date_of_birth
                )
                VALUES
                ('{$customer->getName()}'
                , '{$customer->getSurname()}'
                , '{$customer->getPhoneNumber()}'
                , '{$customer->getAddress()}'
                , '{$customer->getDateOfBirth()}'
                )
            ";
        }
        return DataBase::getInstance()->query($sql);
    }

    /**
     * @param int|null $id
     * @return array|Customer
     */
    public function select(?int $id = null) {
        $sql = "
            SELECT id
                 , name
                 , surname
                 , phone
                 , address
                 , date_of_birth
            FROM customer
        ";
        if ($id === null) {
            $customersQuery = DataBase::getInstance()->query($sql);
            $customers = [];
            while ($customerRecord = $customersQuery->fetch()) {
                $customer = new Customer();
                $customer
                    ->setId($customerRecord["id"])
                    ->setName($customerRecord["name"])
                    ->setSurname($customerRecord["surname"])
                    ->setPhoneNumber($customer["phone"])
                    ->setAddress($customer["address"])
                    ->setDateOfBirth($customer["date_of_birth"]);
                $customers[] = $customer;
            }
            return $customers;
        }
        $customerQuery = DataBase::getInstance()->query($sql . " WHERE id = " . $id);
        $customerRecord = $customerQuery->fetch();
        $customer = new Customer();
        $customer
            ->setId($customerRecord["id"])
            ->setName($customerRecord["name"])
            ->setSurname($customerRecord["surname"])
            ->setPhoneNumber($customer["phone"])
            ->setAddress($customer["address"])
            ->setDateOfBirth($customer["date_of_birth"]);
        return $customer;
    }

    /**
     * @param CustomerInterface $customer
     */
    public function delete(CustomerInterface $customer) {
        DataBase::getInstance()->query("
            DELETE FROM customer
            WHERE  id = '{$customer->getId()}'
        ");
    }

}