CREATE TABLE IF NOT EXISTS `services_infs` (
    `id_services_infs` int(11) unsigned NOT NULL auto_increment,
    `name` varchar(255) NOT NULL default '',
    `description` text NOT NULL,
    PRIMARY KEY  (`id_services_infs`)
)