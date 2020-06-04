<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200421151538 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE payement_method (id INT AUTO_INCREMENT NOT NULL, name_payement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE operations ADD payement_method_id INT NOT NULL');
        $this->addSql('ALTER TABLE operations ADD CONSTRAINT FK_28145348396979B3 FOREIGN KEY (payement_method_id) REFERENCES payement_method (id)');
        $this->addSql('CREATE INDEX IDX_28145348396979B3 ON operations (payement_method_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE operations DROP FOREIGN KEY FK_28145348396979B3');
        $this->addSql('DROP TABLE payement_method');
        $this->addSql('DROP INDEX IDX_28145348396979B3 ON operations');
        $this->addSql('ALTER TABLE operations DROP payement_method_id');
    }
}
