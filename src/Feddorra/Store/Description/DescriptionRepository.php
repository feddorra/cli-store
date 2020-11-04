<?php


namespace Feddorra\Store\Description;


use PDOStatement;
use Feddorra\Store\DataBase;


/**
 * Class DescriptionRepository
 *
 * @package Feddorra\Store\Description
 */
class DescriptionRepository {

    /**
     * @param DescriptionInterface $description
     * @return false|PDOStatement
     */
    public function save(DescriptionInterface $description) {
        if($description->getId()) {
            return DataBase::getInstance()->query("
                UPDATE description
                SET text = '{$description->getText()}'
                WHERE id = '{$description->getId()}'
            ");
        }
        return DataBase::getInstance()->query("
            INSERT INTO description
            (text)
            VALUES 
            ('{$description->getText()}')
        ");
    }

    /**
     * @param int|null $id
     * @return array|Description
     */
    public function select(?int $id = null) {
        $sql = "
             SELECT id
                  , text
             FROM description
        ";

        if($id === null) {
            $descriptions = [];
            $descriptionsQuery = DataBase::getInstance()->query($sql);
            while ($descriptionRecord = $descriptionsQuery->fetch()) {
                $description = new Description();
                $description
                    ->setId((int) $descriptionRecord["id"])
                    ->setText($descriptionRecord["text"]);
                $descriptions[] = $description;
            }
            return $descriptions;
        }
        $descriptionQuery = DataBase::getInstance()->query($sql . " WHERE id = " . $id);
        $descriptionRecord = $descriptionQuery->fetch();
        $description = new Description();
        $description
            ->setId((int) $descriptionRecord["id"])
            ->setText($descriptionRecord["text"]);
        return $description;
    }

    /**
     * @param DescriptionInterface $description
     * @return false|PDOStatement
     */
    public function delete(DescriptionInterface $description) {
        return DataBase::getInstance()->query("
            DELETE FROM description
            WHERE id = '{$description->getId()}'
        ");
    }

}