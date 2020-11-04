<?php


namespace Feddorra\Store\Description;


/**
 * Interface DescriptionInterface
 *
 * @package Feddorra\Description
 */
interface DescriptionInterface {

    /**
     * Method return description id if it exist
     *
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * Method return description text if it exist
     *
     * @return string
     */
    public function getText(): string;

    /**
     * Method set description id
     *
     * @param int $id
     * @return DescriptionInterface
     */
    public function setId(int $id): DescriptionInterface;

    /**
     * Method set description text
     *
     * @param string $text
     * @return DescriptionInterface
     */
    public function setText(string $text): DescriptionInterface;

}