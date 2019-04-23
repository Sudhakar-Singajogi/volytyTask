<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190423053327 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO `books` (`id`, `title`, `description`, `code`, `author`, `price`, `in_stock`, `currency`, `created_at`, `updated_at`)
        VALUES
            (1,'War And Peace','Some description goes here','WAP','Leo Tolstoy',8,'in','$','2019-04-23 05:20:56','2019-04-23 05:20:56'),
            (2,'Shadows Of Athens','Some sdfdsffdsfsdjksfsjfk','SOA','J.M. Alvey',8,'in','$.','2019-04-23 05:21:34','2019-04-23 05:21:34'),
            (3,'Deadly Deception','Sofdglfgjkkhegrhjjdfhj','DD','P.J. Mann',8,'in','$','2019-04-23 05:27:38','2019-04-23 05:27:38'),
            (4,'A Tale Of A Rough Diamond','Sofdglfgjkkhegrhjjdfhj','TRD','P.J. Mann',8,'in','$','2019-04-23 05:27:38','2019-04-23 05:27:38'),
            (5,'Song Of Solomon','frtrejkerggfferter goes here fdjf','SOS','Toni Morrison',8,'in','$','2019-04-23 05:28:56','2019-04-23 05:28:56'),
            (6,'The Shadow Of The Wind','eroiugjlg\'hfgjnkn nn jlnjnl;b','STW','Carlos Ruiz Zafon',8,'in','$','2019-04-23 05:29:52','2019-04-23 05:29:52'),
            (7,'The Fellowship of the Ring','dfrewrdfdf','TLR','J.R.R. Tolkien',8,'in','Rs','2019-04-23 05:30:31','2019-04-23 05:30:31'),
            (8,'The Sanatic Verses','gdfgdflgjdfguugtjn bg kdfglfdg dfgfgfdgdfgf','TSV','Salman Rushdie',8,'in','$','2019-04-23 05:31:06','2019-04-23 05:31:06');");

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
