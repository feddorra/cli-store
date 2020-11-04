<?php


namespace Feddorra\Store\Order;


use Feddorra\Store\Product\ProductInterface;
use Feddorra\Store\Customer\CustomerInterface;
use Feddorra\Store\Employee\EmployeeInterface;

/**
 * Interface OrderInterface
 *
 * @package Feddorra\Store\Order
 */
interface OrderInterface {

    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return CustomerInterface
     */
    public function getCustomer(): CustomerInterface;

    /**
     * @return EmployeeInterface
     */
    public function getEmployee(): EmployeeInterface;

    /**
     * @return ProductInterface[]
     */
    public function getProducts(): array;

    /**
     * @param int $id
     * @return OrderInterface
     */
    public function setId(int $id): OrderInterface;

    /**
     * @param CustomerInterface $customer
     * @return OrderInterface
     */
    public function setCustomer(CustomerInterface $customer): OrderInterface;

    /**
     * @param EmployeeInterface $employee
     * @return OrderInterface
     */
    public function setEmployee(EmployeeInterface $employee): OrderInterface;

    /**
     * @param ProductInterface[] $products
     * @return OrderInterface
     */
    public function setProducts(array $products): OrderInterface;

    /**
     * @param ProductInterface $product
     * @return OrderInterface
     */
    public function addProduct(ProductInterface $product): OrderInterface;

    /**
     * @param int $id
     * @return OrderInterface
     */
    public function removeProduct(int $id): OrderInterface;

}