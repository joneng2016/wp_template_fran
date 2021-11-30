CREATE TABLE IF NOT EXISTS `videos` (
    `id_video` int(11) unsigned NOT NULL auto_increment,
    `youtube_address` varchar(255) NOT NULL default '',
    `description` varchar(255) NOT NULL default '',
    PRIMARY KEY  (`id_video`)
)