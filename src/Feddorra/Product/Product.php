<?php


namespace Feddorra\Product;


use Feddorra\Description\Description;
use Feddorra\Description\DescriptionInterface;

/**
 * Class Product
 *
 * @package Feddorra\Product
 */
class Product implements ProductInterface {

    /**
     * @var int|null
     */
    private ?int $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var DescriptionInterface
     */
    private DescriptionInterface $description;

    public function __construct() {
        $this->id = null;
        $this->name = '';
        $this->description = new Description();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return DescriptionInterface
     */
    public function getDescription(): DescriptionInterface {
        return $this->description;
    }

    /**
     * @param int $id
     * @return $this|ProductInterface
     */
    public function setId(int $id): ProductInterface {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name
     * @return $this|ProductInterface
     */
    public function setName(string $name): ProductInterface {
        $this->name = $name;
        return $this;
    }

    /**
     * @param DescriptionInterface $description
     * @return $this|ProductInterface
     */
    public function setDescription(DescriptionInterface $description): ProductInterface {
        $this->description = $description;
        return $this;
    }
}