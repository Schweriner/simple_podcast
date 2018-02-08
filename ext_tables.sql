#
# Table structure for table 'tx_simplepodcast_domain_model_podcastchannel'
#
CREATE TABLE tx_simplepodcast_domain_model_podcastchannel (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	channel_name varchar(255) DEFAULT '' NOT NULL,
	link varchar(255) DEFAULT '' NOT NULL,
	subtitle varchar(255) DEFAULT '' NOT NULL,
	image int(11) unsigned NOT NULL default '0',
	description text NOT NULL,
	language varchar(255) DEFAULT '' NOT NULL,
	author varchar(255) DEFAULT '' NOT NULL,
	category varchar(255) DEFAULT '' NOT NULL,
	author_mail varchar(255) DEFAULT '' NOT NULL,
	keywords varchar(255) DEFAULT '' NOT NULL,
	explicit tinyint(1) unsigned DEFAULT '0' NOT NULL,
	copyright varchar(255) DEFAULT '' NOT NULL,
	itunes_owner varchar(255) DEFAULT '' NOT NULL,
	itunes_owner_mail varchar(255) DEFAULT '' NOT NULL,
	podcasts int(11) unsigned NOT NULL default '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_simplepodcast_domain_model_podcast'
#
CREATE TABLE tx_simplepodcast_domain_model_podcast (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	link varchar(255) DEFAULT '' NOT NULL,
	description text NOT NULL,
	image int(11) unsigned NOT NULL default '0',
	audio int(11) unsigned NOT NULL default '0',
	duration varchar(255) DEFAULT '' NOT NULL,
	keywords varchar(255) DEFAULT '' NOT NULL,
	explicit tinyint(1) unsigned DEFAULT '0' NOT NULL,
	podcast_channel int(11) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);
