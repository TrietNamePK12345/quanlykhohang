<?php

use App\Core\Application;

class m0002_add_product_table
{
    public function up()
    {
        $db = Application::$app->migration;
        $SQL = "
        CREATE TABLE product (
            id INT AUTO_INCREMENT PRIMARY KEY,
            fullname VARCHAR(255) NOT NULL ,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL ,
            created_at DATETIME DEFAULT  CURRENT_TIMESTAMP
        ) ENGINE=INNODB;
        ";

        $db->pdo->exec($SQL);
    }

    public function  down()
    {
        $db = Application::$app->migration;
        $SQL = "DROP TABLE product";
        $db->pdo->exec($SQL);
    }
}