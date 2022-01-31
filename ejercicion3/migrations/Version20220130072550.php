<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220130072550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bici CHANGE alquilada alquilada TINYINT(1) DEFAULT false, CHANGE precio_base precio_base NUMERIC(19, 4) DEFAULT \'10\', CHANGE precio_premium precio_premium NUMERIC(19, 4) DEFAULT \'30\' NOT NULL');
        $this->addSql('ALTER TABLE bici_antigua CHANGE alquilada alquilada TINYINT(1) DEFAULT false, CHANGE precio_base precio_base NUMERIC(19, 4) DEFAULT \'10\', CHANGE precio_premium precio_premium NUMERIC(19, 4) DEFAULT \'30\' NOT NULL, CHANGE pack_dias pack_dias INT DEFAULT 5');
        $this->addSql('ALTER TABLE bici_electrica CHANGE alquilada alquilada TINYINT(1) DEFAULT false, CHANGE precio_base precio_base NUMERIC(19, 4) DEFAULT \'10\', CHANGE precio_premium precio_premium NUMERIC(19, 4) DEFAULT \'30\' NOT NULL');
        $this->addSql('ALTER TABLE bici_normal ADD disponible TINYINT(1) DEFAULT true, CHANGE alquilada alquilada TINYINT(1) DEFAULT false, CHANGE precio_base precio_base NUMERIC(19, 4) DEFAULT \'10\', CHANGE precio_premium precio_premium NUMERIC(19, 4) DEFAULT \'30\' NOT NULL, CHANGE pack_dias pack_dias INT DEFAULT 3');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bici CHANGE alquilada alquilada TINYINT(1) DEFAULT NULL, CHANGE precio_base precio_base NUMERIC(19, 4) DEFAULT NULL, CHANGE precio_premium precio_premium NUMERIC(19, 4) NOT NULL');
        $this->addSql('ALTER TABLE bici_antigua CHANGE alquilada alquilada TINYINT(1) DEFAULT NULL, CHANGE precio_base precio_base NUMERIC(19, 4) DEFAULT NULL, CHANGE precio_premium precio_premium NUMERIC(19, 4) NOT NULL, CHANGE pack_dias pack_dias INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bici_electrica CHANGE alquilada alquilada TINYINT(1) DEFAULT NULL, CHANGE precio_base precio_base NUMERIC(19, 4) DEFAULT NULL, CHANGE precio_premium precio_premium NUMERIC(19, 4) NOT NULL');
        $this->addSql('ALTER TABLE bici_normal DROP disponible, CHANGE alquilada alquilada TINYINT(1) DEFAULT NULL, CHANGE precio_base precio_base NUMERIC(19, 4) DEFAULT NULL, CHANGE precio_premium precio_premium NUMERIC(19, 4) NOT NULL, CHANGE pack_dias pack_dias INT DEFAULT NULL');
    }
}
