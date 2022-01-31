<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220131020313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alquilar DROP INDEX UNIQ_137283D177116B6, ADD INDEX IDX_137283D177116B6 (bici_normal_id)');
        $this->addSql('ALTER TABLE alquilar DROP INDEX UNIQ_137283D508D312A, ADD INDEX IDX_137283D508D312A (bici_antigua_id)');
        $this->addSql('ALTER TABLE alquilar DROP INDEX UNIQ_137283DD53FE40B, ADD INDEX IDX_137283DD53FE40B (bici_electrica_id)');
        $this->addSql('ALTER TABLE alquilar DROP INDEX UNIQ_137283DDE734E51, ADD INDEX IDX_137283DDE734E51 (cliente_id)');
        $this->addSql('ALTER TABLE bici_antigua CHANGE disponible disponible TINYINT(1) DEFAULT true');
        $this->addSql('ALTER TABLE bici_electrica CHANGE disponible disponible TINYINT(1) DEFAULT true');
        $this->addSql('ALTER TABLE bici_normal CHANGE disponible disponible TINYINT(1) DEFAULT true');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alquilar DROP INDEX IDX_137283DDE734E51, ADD UNIQUE INDEX UNIQ_137283DDE734E51 (cliente_id)');
        $this->addSql('ALTER TABLE alquilar DROP INDEX IDX_137283DD53FE40B, ADD UNIQUE INDEX UNIQ_137283DD53FE40B (bici_electrica_id)');
        $this->addSql('ALTER TABLE alquilar DROP INDEX IDX_137283D177116B6, ADD UNIQUE INDEX UNIQ_137283D177116B6 (bici_normal_id)');
        $this->addSql('ALTER TABLE alquilar DROP INDEX IDX_137283D508D312A, ADD UNIQUE INDEX UNIQ_137283D508D312A (bici_antigua_id)');
        $this->addSql('ALTER TABLE bici_antigua CHANGE disponible disponible TINYINT(1) DEFAULT 1');
        $this->addSql('ALTER TABLE bici_electrica CHANGE disponible disponible TINYINT(1) DEFAULT 1');
        $this->addSql('ALTER TABLE bici_normal CHANGE disponible disponible TINYINT(1) DEFAULT 1');
    }
}
