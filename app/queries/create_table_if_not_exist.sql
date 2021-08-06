CREATE TABLE IF NOT EXISTS `photos` (
    `id_photos` int(11) unsigned NOT NULL auto_increment,
    `photo_name` varchar(255) NOT NULL default '',
    `description` varchar(255) NOT NULL default '',
    PRIMARY KEY  (`id_photos`)
)