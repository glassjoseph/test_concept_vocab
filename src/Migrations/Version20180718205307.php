<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180718205307 extends AbstractMigration
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
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER SEQUENCE category_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE term_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE concept_source_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE concept_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE concept_properties_id_seq INCREMENT BY 1');
    }
}
