<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220131045248 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bici_antigua CHANGE puntaje puntaje INT DEFAULT 1, CHANGE disponible disponible TINYINT(1) DEFAULT true');
        $this->addSql('ALTER TABLE bici_electrica ADD pack_dias INT DEFAULT 0, CHANGE puntaje puntaje INT DEFAULT 1, CHANGE disponible disponible TINYINT(1) DEFAULT true');
        $this->addSql('ALTER TABLE bici_normal CHANGE puntaje puntaje INT DEFAULT 1, CHANGE disponible disponible TINYINT(1) DEFAULT true');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bici_antigua CHANGE disponible disponible TINYINT(1) DEFAULT 1, CHANGE puntaje puntaje INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bici_electrica DROP pack_dias, CHANGE disponible disponible TINYINT(1) DEFAULT 1, CHANGE puntaje puntaje INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bici_normal CHANGE disponible disponible TINYINT(1) DEFAULT 1, CHANGE puntaje puntaje INT DEFAULT NULL');
    }
}
