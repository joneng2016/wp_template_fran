CREATE TABLE IF NOT EXISTS `way_to_pet_web` (
    `id_way_to_pet_web` int(11) unsigned NOT NULL auto_increment,
    `email`  varchar(255) NOT NULL default '',
    `facebook`  varchar(255) NOT NULL default '',
    `instagran`  varchar(255) NOT NULL default '',
    `url_email`  varchar(255) NOT NULL default '',
    `url_facebook`  varchar(255) NOT NULL default '',
    `url_instagran`  varchar(255) NOT NULL default '',
    PRIMARY KEY  (`id_way_to_pet_web`)
);