<?php


namespace Feddorra\Customer;


use Feddorra\DataBase;

class CustomerRepository {

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

    public function select(?int $id = null) {
        if ($id === null) {
        }
    }

    public function delete(CustomerInterface $customer) {

    }

}