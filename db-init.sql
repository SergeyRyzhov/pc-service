SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE(name, email)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT= 1;

INSERT INTO users VALUES (NULL, 'admin', 'admin@remontnik.ru', MD5('admin'))
        ON DUPLICATE KEY UPDATE `name` = `name`;
INSERT INTO users VALUES (NULL, 'master', 'master@remontnik.ru', MD5('master'))
        ON DUPLICATE KEY UPDATE `name` = `name`;
INSERT INTO users VALUES (NULL, 'user', 'admin@remontnik.ru', MD5('user'))
        ON DUPLICATE KEY UPDATE `name` = `name`;

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` text,
  `description` text,
  `date` datetime DEFAULT NULL,
  `userid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE(role)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

insert into roles values(NULL, 'admin')
        ON DUPLICATE KEY UPDATE `role` = `role`;
insert into roles values(NULL, 'master')
        ON DUPLICATE KEY UPDATE `role` = `role`;
insert into roles values(NULL, 'user')
        ON DUPLICATE KEY UPDATE `role` = `role`;

CREATE TABLE IF NOT EXISTS `userinroles` (
  `userid` int(10) unsigned NOT NULL,
  `roleid` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO userinroles values(
  (SELECT id FROM users where name = 'admin'),
  (SELECT id FROM roles where role = 'admin')
)
        ON DUPLICATE KEY UPDATE `userid` = `userid`;
        
        INSERT INTO userinroles values(
  (SELECT id FROM users where name = 'master'),
  (SELECT id FROM roles where role = 'master')
)
        ON DUPLICATE KEY UPDATE `userid` = `userid`;
        
        INSERT INTO userinroles values(
  (SELECT id FROM users where name = 'user'),
  (SELECT id FROM roles where role = 'user')
)
        ON DUPLICATE KEY UPDATE `userid` = `userid`;
        
        INSERT INTO userinroles values(
  (SELECT id FROM users where name = 'admin'),
  (SELECT id FROM roles where role = 'user')
)
        ON DUPLICATE KEY UPDATE `userid` = `userid`;
        
        INSERT INTO userinroles values(
  (SELECT id FROM users where name = 'admin'),
  (SELECT id FROM roles where role = 'master')
)
        ON DUPLICATE KEY UPDATE `userid` = `userid`;
        
        INSERT INTO userinroles values(
  (SELECT id FROM users where name = 'master'),
  (SELECT id FROM roles where role = 'user')
)
        ON DUPLICATE KEY UPDATE `userid` = `userid`;
        
        

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;