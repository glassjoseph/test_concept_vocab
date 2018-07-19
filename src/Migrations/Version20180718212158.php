<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180718212158 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER SEQUENCE concept_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE category_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE term_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE concept_source_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE concept_properties_id_seq INCREMENT BY 1');
        $this->addSql('CREATE TABLE related_concept (concept_id INT NOT NULL, related_id INT NOT NULL, PRIMARY KEY(concept_id, related_id))');
        $this->addSql('CREATE INDEX IDX_D853AAF5F909284E ON related_concept (concept_id)');
        $this->addSql('CREATE INDEX IDX_D853AAF54162C001 ON related_concept (related_id)');
        $this->addSql('ALTER TABLE related_concept ADD CONSTRAINT FK_D853AAF5F909284E FOREIGN KEY (concept_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE related_concept ADD CONSTRAINT FK_D853AAF54162C001 FOREIGN KEY (related_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER SEQUENCE concept_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE category_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE term_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE concept_source_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE concept_properties_id_seq INCREMENT BY 1');
        $this->addSql('DROP TABLE related_concept');
    }
}
