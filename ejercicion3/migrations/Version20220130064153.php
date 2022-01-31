<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220130064153 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alquilar (id INT AUTO_INCREMENT NOT NULL, bicicleta_id INT DEFAULT NULL, cliente_id INT DEFAULT NULL, desde DATE NOT NULL, hasta DATE NOT NULL, es_base TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_137283D2B6C1A2 (bicicleta_id), UNIQUE INDEX UNIQ_137283DDE734E51 (cliente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bici (id INT AUTO_INCREMENT NOT NULL, puntaje INT DEFAULT NULL, alquilada TINYINT(1) DEFAULT NULL, precio_base NUMERIC(19, 4) DEFAULT NULL, precio_premium NUMERIC(19, 4) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bici_antigua (id INT AUTO_INCREMENT NOT NULL, puntaje INT DEFAULT NULL, alquilada TINYINT(1) DEFAULT NULL, precio_base NUMERIC(19, 4) DEFAULT NULL, precio_premium NUMERIC(19, 4) NOT NULL, pack_dias INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bici_electrica (id INT AUTO_INCREMENT NOT NULL, puntaje INT DEFAULT NULL, alquilada TINYINT(1) DEFAULT NULL, precio_base NUMERIC(19, 4) DEFAULT NULL, precio_premium NUMERIC(19, 4) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bici_normal (id INT AUTO_INCREMENT NOT NULL, puntaje INT DEFAULT NULL, alquilada TINYINT(1) DEFAULT NULL, precio_base NUMERIC(19, 4) DEFAULT NULL, precio_premium NUMERIC(19, 4) NOT NULL, pack_dias INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cliente (id INT AUTO_INCREMENT NOT NULL, puntaje INT NOT NULL, nombre VARCHAR(50) NOT NULL, apellido VARCHAR(50) NOT NULL, dni INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE alquilar ADD CONSTRAINT FK_137283D2B6C1A2 FOREIGN KEY (bicicleta_id) REFERENCES bici (id)');
        $this->addSql('ALTER TABLE alquilar ADD CONSTRAINT FK_137283DDE734E51 FOREIGN KEY (cliente_id) REFERENCES cliente (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alquilar DROP FOREIGN KEY FK_137283D2B6C1A2');
        $this->addSql('ALTER TABLE alquilar DROP FOREIGN KEY FK_137283DDE734E51');
        $this->addSql('DROP TABLE alquilar');
        $this->addSql('DROP TABLE bici');
        $this->addSql('DROP TABLE bici_antigua');
        $this->addSql('DROP TABLE bici_electrica');
        $this->addSql('DROP TABLE bici_normal');
        $this->addSql('DROP TABLE cliente');
    }
}
