CREATE TABLE os_Produkte
(p_id integer UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
p_artikelnummer INTEGER UNSIGNED NOT NULL UNIQUE,
p_produktname varchar(40) not null,
p_preis decimal(7,2) unsigned not null,
p_beschreibung varchar(300),
p_anzahl integer unsigned);