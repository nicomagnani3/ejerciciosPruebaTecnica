<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220131011929 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alquilar DROP FOREIGN KEY FK_137283D2B6C1A2');
        $this->addSql('DROP TABLE bici');
        $this->addSql('DROP INDEX UNIQ_137283D2B6C1A2 ON alquilar');
        $this->addSql('ALTER TABLE alquilar ADD bici_normal_id INT DEFAULT NULL, ADD bici_antigua_id INT DEFAULT NULL, CHANGE bicicleta_id bici_electrica_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE alquilar ADD CONSTRAINT FK_137283DD53FE40B FOREIGN KEY (bici_electrica_id) REFERENCES bici_electrica (id)');
        $this->addSql('ALTER TABLE alquilar ADD CONSTRAINT FK_137283D177116B6 FOREIGN KEY (bici_normal_id) REFERENCES bici_normal (id)');
        $this->addSql('ALTER TABLE alquilar ADD CONSTRAINT FK_137283D508D312A FOREIGN KEY (bici_antigua_id) REFERENCES bici_antigua (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_137283DD53FE40B ON alquilar (bici_electrica_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_137283D177116B6 ON alquilar (bici_normal_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_137283D508D312A ON alquilar (bici_antigua_id)');
        $this->addSql('ALTER TABLE bici_antigua CHANGE disponible disponible TINYINT(1) DEFAULT true');
        $this->addSql('ALTER TABLE bici_electrica CHANGE disponible disponible TINYINT(1) DEFAULT true');
        $this->addSql('ALTER TABLE bici_normal CHANGE disponible disponible TINYINT(1) DEFAULT true');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bici (id INT AUTO_INCREMENT NOT NULL, puntaje INT DEFAULT NULL, precio_base NUMERIC(19, 4) DEFAULT \'10.0000\', precio_premium NUMERIC(19, 4) DEFAULT \'30.0000\' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE alquilar DROP FOREIGN KEY FK_137283DD53FE40B');
        $this->addSql('ALTER TABLE alquilar DROP FOREIGN KEY FK_137283D177116B6');
        $this->addSql('ALTER TABLE alquilar DROP FOREIGN KEY FK_137283D508D312A');
        $this->addSql('DROP INDEX UNIQ_137283DD53FE40B ON alquilar');
        $this->addSql('DROP INDEX UNIQ_137283D177116B6 ON alquilar');
        $this->addSql('DROP INDEX UNIQ_137283D508D312A ON alquilar');
        $this->addSql('ALTER TABLE alquilar ADD bicicleta_id INT DEFAULT NULL, DROP bici_electrica_id, DROP bici_normal_id, DROP bici_antigua_id');
        $this->addSql('ALTER TABLE alquilar ADD CONSTRAINT FK_137283D2B6C1A2 FOREIGN KEY (bicicleta_id) REFERENCES bici (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_137283D2B6C1A2 ON alquilar (bicicleta_id)');
        $this->addSql('ALTER TABLE bici_antigua CHANGE disponible disponible TINYINT(1) DEFAULT 1');
        $this->addSql('ALTER TABLE bici_electrica CHANGE disponible disponible TINYINT(1) DEFAULT 1');
        $this->addSql('ALTER TABLE bici_normal CHANGE disponible disponible TINYINT(1) DEFAULT 1');
    }
}
