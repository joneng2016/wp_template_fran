CREATE TABLE IF NOT EXISTS `way_to_pet` (
    `id_way_to_pet` int(11) unsigned NOT NULL auto_increment,
    `picture_of_place`  varchar(255) NOT NULL default '',    
    `number` varchar(255) NOT NULL default '',
    `zip_code` varchar(255) NOT NULL default '',
    `street` varchar(255) NOT NULL default '',
    `neighborhood` varchar(255) NOT NULL default '',
    `city` varchar(255) NOT NULL default '',
    `state` varchar(255) NOT NULL default '',
    `country` varchar(255) NOT NULL default '',
    PRIMARY KEY  (`id_way_to_pet`)
);