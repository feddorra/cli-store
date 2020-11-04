<?php


namespace Feddorra\Store\Description;


/**
 * Class Description
 *
 * @package Feddorra\Store\Description
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

    /**
     * Description constructor.
     */
    public function __construct() {
        $this->id = null;
        $this->text = '';
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