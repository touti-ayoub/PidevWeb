<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240501131240 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // First add the column without the NOT NULL constraint
        $this->addSql('ALTER TABLE user ADD created_at DATETIME DEFAULT NULL');

        // Update all existing rows to set created_at to the current time
        $this->addSql('UPDATE user SET created_at = NOW() WHERE created_at IS NULL');

        // Finally, change the column to NOT NULL now that all rows have a valid value
        $this->addSql('ALTER TABLE user MODIFY created_at DATETIME NOT NULL');
    }


    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP created_at');
    }
}
