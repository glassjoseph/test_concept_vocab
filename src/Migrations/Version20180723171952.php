<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180723171952 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE broader_concept (narrower_id INT NOT NULL, broader_id INT NOT NULL, PRIMARY KEY(narrower_id, broader_id))');
        $this->addSql('CREATE INDEX IDX_53A830E851D935F ON broader_concept (narrower_id)');
        $this->addSql('CREATE INDEX IDX_53A830E85646636A ON broader_concept (broader_id)');
        $this->addSql('ALTER TABLE broader_concept ADD CONSTRAINT FK_53A830E851D935F FOREIGN KEY (narrower_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE broader_concept ADD CONSTRAINT FK_53A830E85646636A FOREIGN KEY (broader_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE broader_concept');
    }
}
