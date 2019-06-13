<?php
$this->startSetup();
$this->run("
    DROP TABLE IF EXISTS {$this->getTable('guest_stock_alerts/subscription')};
    CREATE TABLE {$this->getTable('guest_stock_alerts/subscription')} (
        `id` int(10) UNSIGNED NOT NULL auto_increment,
        `name` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `product_id` int(10) unsigned NOT NULL,
        `website_id` smallint(5) unsigned NOT NULL,
        PRIMARY KEY (`id`),
        CONSTRAINT `FK_GUEST_STOCK_ALERT_SUBSCRIPTION_PRODUCT`
          FOREIGN KEY (`product_id`)
          REFERENCES `{$this->getTable('catalog_product_entity')}` (`entity_id`)
            ON DELETE CASCADE
            ON UPDATE CASCADE,
        CONSTRAINT `FK_GUEST_STOCK_ALERT_SUBSCRIPTION_WEBSITE`
          FOREIGN KEY (`website_id`)
          REFERENCES `{$this->getTable('core_website')}` (`website_id`)
            ON DELETE CASCADE
            ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$this->endSetup();
