<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240304120923 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE co_pzpc (id INT AUTO_INCREMENT NOT NULL, id_country VARCHAR(50) NOT NULL, product VARCHAR(50) NOT NULL, id_product VARCHAR(50) NOT NULL, product_active TINYINT(1) NOT NULL, zone VARCHAR(50) NOT NULL, id_zone VARCHAR(50) NOT NULL, zone_active TINYINT(1) NOT NULL, country VARCHAR(50) NOT NULL, iso_code VARCHAR(50) NOT NULL, country_active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE co_pzpc');
    }
}
