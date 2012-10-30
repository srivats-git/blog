<?php

$installer=$this;

$installer->startSetup();


$installer->run("
	CREATE TABLE IF NOT EXISTS `{$installer->getTable('blog/posts')}`
	(
		`id` smallint(6) NOT NULL AUTO_INCREMENT,
		`title` varchar(255) NULL,
		`identifier` varchar(100) NOT NULL,
		`short_description` mediumtext NULL,
		`description` mediumtext NULL,
		`featured_image` varchar(255) NULL,
		`creation_time` timestamp NULL,
		`update_time` timestamp NULL,
		PRIMARY KEY (`id`)
	);
");

$installer->endSetup();