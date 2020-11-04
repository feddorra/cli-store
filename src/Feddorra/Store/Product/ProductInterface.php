<?php


namespace Feddorra\Store\Product;


use Feddorra\Store\Description\DescriptionInterface;


/**
 * Interface ProductInterface
 *
 * @package Feddorra\Store\Product
 */
interface ProductInterface {

    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return DescriptionInterface
     */
    public function getDescription(): DescriptionInterface;

    /**
     * @param int $id
     * @return ProductInterface
     */
    public function setId(int $id): ProductInterface;

    /**
     * @param string $name
     * @return ProductInterface
     */
    public function setName(string $name): ProductInterface;

    /**
     * @param DescriptionInterface $description
     * @return ProductInterface
     */
    public function setDescription(DescriptionInterface $description): ProductInterface;

}