<?php

declare(strict_types=1);

namespace FabioChiquezi\PetitionData\Domain\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200805100108 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE information_general_site (id INT AUTO_INCREMENT NOT NULL, title_seo VARCHAR(150) DEFAULT NULL, description_seo LONGTEXT DEFAULT NULL, image_seo VARCHAR(50) DEFAULT NULL, whatsapp VARCHAR(50) DEFAULT NULL, facebook VARCHAR(50) DEFAULT NULL, twitter VARCHAR(50) DEFAULT NULL, mobile_banner VARCHAR(50) DEFAULT NULL, tablet_banner VARCHAR(50) DEFAULT NULL, desktop_banner VARCHAR(50) DEFAULT NULL, title_site VARCHAR(150) DEFAULT NULL, subtitle_site VARCHAR(50) DEFAULT NULL, content_site LONGTEXT DEFAULT NULL, video_site VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE information_general_site');
    }
}
