<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180718201803 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER SEQUENCE category_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE term_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE concept_source_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE concept_id_seq INCREMENT BY 1');
        $this->addSql('ALTER SEQUENCE concept_properties_id_seq INCREMENT BY 1');
        $this->addSql('ALTER INDEX idx_a50fe78d38c4730d RENAME TO IDX_A50FE78DF909284E');
        $this->addSql('ALTER INDEX idx_d473477438c4730d RENAME TO IDX_D4734774F909284E');
        $this->addSql('ALTER INDEX idx_8f78bd0a38c4730d RENAME TO IDX_8F78BD0AF909284E');
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
        $this->addSql('ALTER INDEX idx_a50fe78df909284e RENAME TO idx_a50fe78d38c4730d');
        $this->addSql('ALTER INDEX idx_d4734774f909284e RENAME TO idx_d473477438c4730d');
        $this->addSql('ALTER INDEX idx_8f78bd0af909284e RENAME TO idx_8f78bd0a38c4730d');
    }
}
