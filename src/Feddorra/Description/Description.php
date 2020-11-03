<?php


namespace Feddorra\Description;


/**
 * Class Description
 *
 * @package Feddorra\Description
 */
class Description implements DescriptionInterface {

    /**
     * @var int|null
     */
    private ?int $id;

    /**
     * @var string
     */
    private string $text;

    public function __construct() {
        $this->id = null;
        $this->text = '';
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
    public function getText(): string {
        return $this->text;
    }

    /**
     * @inheritDoc
     */
    public function setId(int $id): DescriptionInterface {
        $this->id = $id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setText(string $text): DescriptionInterface {
        $this->text = $text;
        return $this;
    }

}