<?php


namespace Feddorra\Store;


use PDO;

/**
 * Class DataBase
 *
 * @package Feddorra
 */
class DataBase {

    /**
     *
     */
    const PATH_TO_DATABASE = __DIR__ . "/../../temp/store.db";

    /**
     * @var PDO|null
     */
    private static ?PDO $instance = null;

    /**
     * @return PDO|null
     */
    public static function getInstance() {
        if (static::$instance === null) {
            static::$instance = new PDO('sqlite:' . static::PATH_TO_DATABASE, '', '', [
                PDO::ATTR_EMULATE_PREPARES   => false,
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
            static::init();
        }
        return static::$instance;
    }

    /**
     * Initialize database
     * Create tables if its doesn't exist
     */
    private static function init() {
        $queries = [
            "CREATE TABLE IF NOT EXISTS description (id INTEGER PRIMARY KEY, text TEXT NOT NULL);",
            "CREATE TABLE IF NOT EXISTS product (id INTEGER PRIMARY KEY, name TEXT NOT NULL, description_id INTEGER);",
            "CREATE TABLE IF NOT EXISTS employee (id INTEGER PRIMARY KEY, name TEXT NOT NULL, surname TEXT NOT NULL, phone TEXT NOT NULL, password TEXT NOT NULL)",
            "CREATE TABLE IF NOT EXISTS customer (id INTEGER PRIMARY KEY, name TEXT NOT NULL, surname TEXT NOT NULL, phone TEXT NOT NULL, address TEXT NOT NULL, date_of_birth TEXT NOT NULL)",
        ];

        foreach ($queries as $query) {
            static::$instance->query($query);
        }
    }

    /**
     * DataBase constructor.
     */
    private function __construct() {
    }

}