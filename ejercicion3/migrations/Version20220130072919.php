<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220130072919 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bici DROP alquilada');
        $this->addSql('ALTER TABLE bici_antigua ADD disponible TINYINT(1) DEFAULT true, DROP alquilada');
        $this->addSql('ALTER TABLE bici_electrica ADD disponible TINYINT(1) DEFAULT true, DROP alquilada');
        $this->addSql('ALTER TABLE bici_normal DROP alquilada, CHANGE disponible disponible TINYINT(1) DEFAULT true');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bici ADD alquilada TINYINT(1) DEFAULT 0');
        $this->addSql('ALTER TABLE bici_antigua ADD alquilada TINYINT(1) DEFAULT 0, DROP disponible');
        $this->addSql('ALTER TABLE bici_electrica ADD alquilada TINYINT(1) DEFAULT 0, DROP disponible');
        $this->addSql('ALTER TABLE bici_normal ADD alquilada TINYINT(1) DEFAULT 0, CHANGE disponible disponible TINYINT(1) DEFAULT 1');
    }
}
