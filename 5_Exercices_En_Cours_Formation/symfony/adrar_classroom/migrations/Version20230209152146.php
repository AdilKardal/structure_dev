<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230209152146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT NOT NULL, avis_contenu LONGTEXT NOT NULL, INDEX IDX_8F91ABF0FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chapitres (id INT AUTO_INCREMENT NOT NULL, cours_id INT NOT NULL, chapitre_titre VARCHAR(50) NOT NULL, chapitre_contenu LONGTEXT NOT NULL, chapitre_position INT NOT NULL, INDEX IDX_508679FC7ECF78B0 (cours_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, cours_titre VARCHAR(50) NOT NULL, cours_synopsis VARCHAR(100) NOT NULL, cours_niveau SMALLINT NOT NULL, cours_temps_estime INT NOT NULL, cours_image VARCHAR(100) NOT NULL, cours_date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', cours_cree SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, utilisateur_nom VARCHAR(50) NOT NULL, utilisateur_prenom VARCHAR(50) NOT NULL, utilisateur_image VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur_chapitre (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT NOT NULL, utilisateur_chapitre_date_inscription DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', utilisateur_chapitre_termine SMALLINT NOT NULL, INDEX IDX_921949BAFB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE chapitres ADD CONSTRAINT FK_508679FC7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE utilisateur_chapitre ADD CONSTRAINT FK_921949BAFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0FB88E14F');
        $this->addSql('ALTER TABLE chapitres DROP FOREIGN KEY FK_508679FC7ECF78B0');
        $this->addSql('ALTER TABLE utilisateur_chapitre DROP FOREIGN KEY FK_921949BAFB88E14F');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE chapitres');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE utilisateur_chapitre');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
