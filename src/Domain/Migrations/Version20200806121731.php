<?php

declare(strict_types=1);

namespace FabioChiquezi\PetitionData\Domain\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200806121731 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE information_general_site CHANGE image_seo image_seo VARCHAR(150) DEFAULT NULL, CHANGE whatsapp whatsapp VARCHAR(14) DEFAULT NULL, CHANGE facebook facebook VARCHAR(150) DEFAULT NULL, CHANGE twitter twitter VARCHAR(150) DEFAULT NULL, CHANGE mobile_banner mobile_banner VARCHAR(150) DEFAULT NULL, CHANGE tablet_banner tablet_banner VARCHAR(150) DEFAULT NULL, CHANGE desktop_banner desktop_banner VARCHAR(150) DEFAULT NULL, CHANGE subtitle_site subtitle_site VARCHAR(150) DEFAULT NULL, CHANGE video_site video_site VARCHAR(150) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE information_general_site CHANGE image_seo image_seo VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE whatsapp whatsapp VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE facebook facebook VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE twitter twitter VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE mobile_banner mobile_banner VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE tablet_banner tablet_banner VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE desktop_banner desktop_banner VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE subtitle_site subtitle_site VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE video_site video_site VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`');
    }
}
