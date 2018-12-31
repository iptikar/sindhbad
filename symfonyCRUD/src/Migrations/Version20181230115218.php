<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20181230115218 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, discription VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE ibook');
        $this->addSql('DROP TABLE items');
        $this->addSql('DROP TABLE migrations');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE tracker');
        $this->addSql('DROP TABLE users');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ibook (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, age VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE items (id INT UNSIGNED AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, description TEXT NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE migrations (id INT UNSIGNED AUTO_INCREMENT NOT NULL, migration VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, batch INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products (p_id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL COLLATE latin1_swedish_ci, image VARCHAR(150) NOT NULL COLLATE latin1_swedish_ci, qty CHAR(15) NOT NULL COLLATE latin1_swedish_ci, price CHAR(50) NOT NULL COLLATE latin1_swedish_ci, id INT NOT NULL, total TINYINT(1) NOT NULL, discount VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, seller_email VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, test INT NOT NULL, PRIMARY KEY(p_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tracker (id INT UNSIGNED AUTO_INCREMENT NOT NULL, buyeremail VARCHAR(191) DEFAULT NULL COLLATE utf8mb4_unicode_ci, seen DATETIME DEFAULT NULL, product_sku VARCHAR(191) DEFAULT NULL COLLATE utf8mb4_unicode_ci, category_id INT UNSIGNED DEFAULT NULL, INDEX index_foreignkey_tracker_category (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, password VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, remember_token VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE product');
    }
}
