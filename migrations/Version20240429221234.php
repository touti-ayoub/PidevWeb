<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240429221234 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_plan (user_id INT NOT NULL, plan_id INT NOT NULL, INDEX IDX_A7DB17B4A76ED395 (user_id), INDEX IDX_A7DB17B4E899029B (plan_id), PRIMARY KEY(user_id, plan_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_plan ADD CONSTRAINT FK_A7DB17B4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_plan ADD CONSTRAINT FK_A7DB17B4E899029B FOREIGN KEY (plan_id) REFERENCES plan (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_plan DROP FOREIGN KEY FK_A7DB17B4A76ED395');
        $this->addSql('ALTER TABLE user_plan DROP FOREIGN KEY FK_A7DB17B4E899029B');
        $this->addSql('DROP TABLE user_plan');
    }
}
