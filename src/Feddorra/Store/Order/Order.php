<?php


namespace Feddorra\Store\Order;


use Feddorra\Store\Product\ProductInterface;
use Feddorra\Store\Customer\CustomerInterface;
use Feddorra\Store\Employee\EmployeeInterface;

/**
 * Class Order
 *
 * @package Feddorra\Store\Order
 */
class Order implements OrderInterface {

    /**
     * @var int|null
     */
    private ?int $id;

    /**
     * @var CustomerInterface
     */
    private CustomerInterface $customer;

    /**
     * @var EmployeeInterface
     */
    private EmployeeInterface $employee;

    /**
     * @var ProductInterface[]
     */
    private array $products;

    /**
     * @inheritDoc
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function getCustomer(): CustomerInterface {
        return $this->customer;
    }

    /**
     * @inheritDoc
     */
    public function getEmployee(): EmployeeInterface {
        return $this->employee;
    }

    /**
     * @inheritDoc
     */
    public function getProducts(): array {
        return $this->products;
    }

    /**
     * @inheritDoc
     */
    public function setId(int $id): OrderInterface {
        $this->id = $id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setCustomer(CustomerInterface $customer): OrderInterface {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setEmployee(EmployeeInterface $employee): OrderInterface {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setProducts(array $products): OrderInterface {
        $this->products = $products;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addProduct(ProductInterface $product): OrderInterface {
        $this->products[$product->getId()] = $product;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function removeProduct(int $id): OrderInterface {
        unset($this->products[$id]);
        return $this;
    }
}