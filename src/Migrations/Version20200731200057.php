<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200731200057 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql("INSERT INTO app_customer VALUES (nextval('app_customer_id_seq'), 'test@email.com', '+49123456789')");
        $this->addSql("INSERT INTO app_product VALUES (nextval('app_product_id_seq'), 'JFND123SQ', 'Test product', 'This is great test product.', 3490)");
        $this->addSql("INSERT INTO app_product VALUES (nextval('app_product_id_seq'), 'GPND392XS', 'Another test product', 'Another descriptions.', 1599)");
        $this->addSql("INSERT INTO app_order VALUES (nextval('app_order_id_seq'), 1, now(), 'This is a test order')");
        $this->addSql("INSERT INTO app_order VALUES (nextval('app_order_id_seq'), 1, now(), 'This is also a test order')");
        $this->addSql('INSERT INTO order_product VALUES (1, 1)');
        $this->addSql('INSERT INTO order_product VALUES (1, 2)');
        $this->addSql('INSERT INTO order_product VALUES (2, 1)');
        $this->addSql('INSERT INTO order_product VALUES (2, 2)');
    }

    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

    }
}
