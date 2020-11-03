<?php


namespace Feddorra\Product;


use PDOStatement;
use Feddorra\DataBase;
use Feddorra\Description\DescriptionRepository;

/**
 * Class ProductRepository
 *
 * @package Feddorra\Product
 */
class ProductRepository {

    /**
     * @param ProductInterface $product
     * @return false|PDOStatement
     */
    public function save(ProductInterface $product) {
        if($product->getId()) {
            return DataBase::getInstance()->query("
                UPDATE product
                SET name = '{$product->getName()}'
                  , description_id = {$product->getDescription()->getId()}
                WHERE id = '{$product->getId()}'
            ");
        }
        return DataBase::getInstance()->query("
            INSERT INTO product
            (name, description_id)
            VALUES
            ('{$product->getName()}', '{$product->getDescription()->getId()}')
        ");
    }

    /**
     * @param int|null $id
     * @return array|Product
     */
    public function select(?int $id = null) {
        $sql = "
            SELECT id
                 , name
                 , description_id
            FROM product
        ";

        if($id === null) {
            $productsQuery = DataBase::getInstance()->query($sql);
            $products = [];
            while ($productRecord = $productsQuery->fetch()) {
                $descriptionRepository = new DescriptionRepository();
                $description = $descriptionRepository->select($productRecord["description_id"]);
                $product = new Product();
                $product
                    ->setId($productRecord["id"])
                    ->setName($productRecord["name"])
                    ->setDescription($description);
                $products[] = $product;
            }
            return $products;
        }
        $productQuery = DataBase::getInstance()->query($sql . " WHERE id = " . $id);
        $productRecord = $productQuery->fetch();
        $descriptionRepository = new DescriptionRepository();
        $description = $descriptionRepository->select($productRecord["description_id"]);
        $product = new Product();
        $product
            ->setId($productRecord["id"])
            ->setName($productRecord["name"])
            ->setDescription($description);
        return $product;
    }

    /**
     * @param ProductInterface $product
     * @return false|PDOStatement
     */
    public function delete(ProductInterface $product) {
        return DataBase::getInstance()->query("
            DELETE FROM product
            WHERE id = '{$product->getId()}'
        ");
    }

}