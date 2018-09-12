<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180803154613 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE concept_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE term_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE concept_source_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE concept_properties_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE concept (id INT NOT NULL, deprecated BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE concept_category (concept_id INT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(concept_id, category_id))');
        $this->addSql('CREATE INDEX IDX_610FBC61F909284E ON concept_category (concept_id)');
        $this->addSql('CREATE INDEX IDX_610FBC6112469DE2 ON concept_category (category_id)');
        $this->addSql('CREATE TABLE related_concept (concept_id INT NOT NULL, related_id INT NOT NULL, PRIMARY KEY(concept_id, related_id))');
        $this->addSql('CREATE INDEX IDX_D853AAF5F909284E ON related_concept (concept_id)');
        $this->addSql('CREATE INDEX IDX_D853AAF54162C001 ON related_concept (related_id)');
        $this->addSql('CREATE TABLE broader_concept (narrower_id INT NOT NULL, broader_id INT NOT NULL, PRIMARY KEY(narrower_id, broader_id))');
        $this->addSql('CREATE INDEX IDX_53A830E851D935F ON broader_concept (narrower_id)');
        $this->addSql('CREATE INDEX IDX_53A830E85646636A ON broader_concept (broader_id)');
        $this->addSql('CREATE TABLE concept_concept (concept_source INT NOT NULL, concept_target INT NOT NULL, PRIMARY KEY(concept_source, concept_target))');
        $this->addSql('CREATE INDEX IDX_79A50CCBD4734774 ON concept_concept (concept_source)');
        $this->addSql('CREATE INDEX IDX_79A50CCBCD9617FB ON concept_concept (concept_target)');
        $this->addSql('CREATE TABLE category (id INT NOT NULL, value TEXT NOT NULL, description TEXT DEFAULT NULL, domain TEXT DEFAULT NULL, range TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE term (id INT NOT NULL, concept_id INT NOT NULL, value TEXT NOT NULL, preferred BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A50FE78DF909284E ON term (concept_id)');
        $this->addSql('CREATE TABLE concept_source (id INT NOT NULL, concept_id INT NOT NULL, citation TEXT DEFAULT NULL, url TEXT DEFAULT NULL, found_data TEXT DEFAULT NULL, note TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D4734774F909284E ON concept_source (concept_id)');
        $this->addSql('CREATE TABLE concept_properties (id INT NOT NULL, concept_id INT NOT NULL, type TEXT NOT NULL, value TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8F78BD0AF909284E ON concept_properties (concept_id)');
        $this->addSql('ALTER TABLE concept_category ADD CONSTRAINT FK_610FBC61F909284E FOREIGN KEY (concept_id) REFERENCES concept (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE concept_category ADD CONSTRAINT FK_610FBC6112469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE related_concept ADD CONSTRAINT FK_D853AAF5F909284E FOREIGN KEY (concept_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE related_concept ADD CONSTRAINT FK_D853AAF54162C001 FOREIGN KEY (related_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE broader_concept ADD CONSTRAINT FK_53A830E851D935F FOREIGN KEY (narrower_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE broader_concept ADD CONSTRAINT FK_53A830E85646636A FOREIGN KEY (broader_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE concept_concept ADD CONSTRAINT FK_79A50CCBD4734774 FOREIGN KEY (concept_source) REFERENCES concept (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE concept_concept ADD CONSTRAINT FK_79A50CCBCD9617FB FOREIGN KEY (concept_target) REFERENCES concept (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE term ADD CONSTRAINT FK_A50FE78DF909284E FOREIGN KEY (concept_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE concept_source ADD CONSTRAINT FK_D4734774F909284E FOREIGN KEY (concept_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE concept_properties ADD CONSTRAINT FK_8F78BD0AF909284E FOREIGN KEY (concept_id) REFERENCES concept (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE concept_category DROP CONSTRAINT FK_610FBC61F909284E');
        $this->addSql('ALTER TABLE related_concept DROP CONSTRAINT FK_D853AAF5F909284E');
        $this->addSql('ALTER TABLE related_concept DROP CONSTRAINT FK_D853AAF54162C001');
        $this->addSql('ALTER TABLE broader_concept DROP CONSTRAINT FK_53A830E851D935F');
        $this->addSql('ALTER TABLE broader_concept DROP CONSTRAINT FK_53A830E85646636A');
        $this->addSql('ALTER TABLE concept_concept DROP CONSTRAINT FK_79A50CCBD4734774');
        $this->addSql('ALTER TABLE concept_concept DROP CONSTRAINT FK_79A50CCBCD9617FB');
        $this->addSql('ALTER TABLE term DROP CONSTRAINT FK_A50FE78DF909284E');
        $this->addSql('ALTER TABLE concept_source DROP CONSTRAINT FK_D4734774F909284E');
        $this->addSql('ALTER TABLE concept_properties DROP CONSTRAINT FK_8F78BD0AF909284E');
        $this->addSql('ALTER TABLE concept_category DROP CONSTRAINT FK_610FBC6112469DE2');
        $this->addSql('DROP SEQUENCE concept_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE category_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE term_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE concept_source_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE concept_properties_id_seq CASCADE');
        $this->addSql('DROP TABLE concept');
        $this->addSql('DROP TABLE concept_category');
        $this->addSql('DROP TABLE related_concept');
        $this->addSql('DROP TABLE broader_concept');
        $this->addSql('DROP TABLE concept_concept');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE term');
        $this->addSql('DROP TABLE concept_source');
        $this->addSql('DROP TABLE concept_properties');
    }
}
