<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180712180202 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');



        $this->addSql('CREATE SEQUENCE category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE term_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE concept_source_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE concept_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE concept_properties_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE category (id SERIAL PRIMARY KEY, value TEXT NOT NULL, description TEXT DEFAULT NULL, domain TEXT DEFAULT NULL, range TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE term (id SERIAL PRIMARY KEY, concept_id INT NOT NULL, value TEXT NOT NULL, preferred BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A50FE78D38C4730D ON term (concept_id)');
        $this->addSql('CREATE TABLE concept_source (id SERIAL PRIMARY KEY, concept_id INT NOT NULL, citation TEXT DEFAULT NULL, url TEXT DEFAULT NULL, found_data TEXT DEFAULT NULL, note TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D473477438C4730D ON concept_source (concept_id)');
        $this->addSql('CREATE TABLE concept (id SERIAL PRIMARY KEY, deprecated BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE concept_category (concept_id INT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(concept_id, category_id))');
        $this->addSql('CREATE INDEX IDX_610FBC61F909284E ON concept_category (concept_id)');
        $this->addSql('CREATE INDEX IDX_610FBC6112469DE2 ON concept_category (category_id)');
        $this->addSql('CREATE TABLE concept_properties (id SERIAL PRIMARY KEY, concept_id INT NOT NULL, type TEXT NOT NULL, value TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8F78BD0A38C4730D ON concept_properties (concept_id)');
        $this->addSql('ALTER TABLE term ADD CONSTRAINT FK_A50FE78D38C4730D FOREIGN KEY (concept_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE concept_source ADD CONSTRAINT FK_D473477438C4730D FOREIGN KEY (concept_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE concept_category ADD CONSTRAINT FK_610FBC61F909284E FOREIGN KEY (concept_id) REFERENCES concept (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE concept_category ADD CONSTRAINT FK_610FBC6112469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE concept_properties ADD CONSTRAINT FK_8F78BD0A38C4730D FOREIGN KEY (concept_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE concept_category DROP CONSTRAINT FK_610FBC6112469DE2');
        $this->addSql('ALTER TABLE term DROP CONSTRAINT FK_A50FE78D38C4730D');
        $this->addSql('ALTER TABLE concept_source DROP CONSTRAINT FK_D473477438C4730D');
        $this->addSql('ALTER TABLE concept_category DROP CONSTRAINT FK_610FBC61F909284E');
        $this->addSql('ALTER TABLE concept_properties DROP CONSTRAINT FK_8F78BD0A38C4730D');
        $this->addSql('DROP SEQUENCE category_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE term_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE concept_source_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE concept_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE concept_properties_id_seq CASCADE');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE term');
        $this->addSql('DROP TABLE concept_source');
        $this->addSql('DROP TABLE concept');
        $this->addSql('DROP TABLE concept_category');
        $this->addSql('DROP TABLE concept_properties');
    }
}
