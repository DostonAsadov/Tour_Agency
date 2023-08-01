<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230801184814 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tour (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, duration TIME NOT NULL, price INT NOT NULL, description VARCHAR(255) DEFAULT NULL, groupsize INT NOT NULL, tour_code VARCHAR(255) NOT NULL, tour_type VARCHAR(255) NOT NULL, age_requirement VARCHAR(255) NOT NULL, guiding VARCHAR(255) NOT NULL, review VARCHAR(255) DEFAULT NULL, tags LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', photos VARCHAR(255) DEFAULT NULL, map VARCHAR(255) NOT NULL, transport VARCHAR(255) NOT NULL, itinerary LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', tour_included LONGTEXT NOT NULL, tour_excluded LONGTEXT NOT NULL, availability LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tour');
    }
}
