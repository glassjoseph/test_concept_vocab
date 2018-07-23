<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180720203017 extends AbstractMigration
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
        $this->addSql('CREATE TABLE concept_concept (concept_source INT NOT NULL, concept_target INT NOT NULL, PRIMARY KEY(concept_source, concept_target))');
        $this->addSql('CREATE INDEX IDX_79A50CCBD4734774 ON concept_concept (concept_source)');
        $this->addSql('CREATE INDEX IDX_79A50CCBCD9617FB ON concept_concept (concept_target)');
        $this->addSql('ALTER TABLE concept_concept ADD CONSTRAINT FK_79A50CCBD4734774 FOREIGN KEY (concept_source) REFERENCES concept (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE concept_concept ADD CONSTRAINT FK_79A50CCBCD9617FB FOREIGN KEY (concept_target) REFERENCES concept (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
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
        $this->addSql('DROP TABLE concept_concept');
    }
}
