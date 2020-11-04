<?php


namespace Feddorra\Store\Product;


use Feddorra\Store\Description\Description;
use Feddorra\Store\Description\DescriptionInterface;


/**
 * Class Product
 *
 * @package Feddorra\Store\Product
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

    /**
     * Product constructor.
     */
    public function __construct() {
        $this->id = null;
        $this->name = '';
        $this->description = new Description();
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
    public function getDescription(): DescriptionInterface {
        return $this->description;
    }

    /**
     * @inheritDoc
     */
    public function setId(int $id): ProductInterface {
        $this->id = $id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name): ProductInterface {
        $this->name = $name;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDescription(DescriptionInterface $description): ProductInterface {
        $this->description = $description;
        return $this;
    }
}