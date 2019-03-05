/* Suppression de la base de données */
DROP DATABASE IF EXISTS bdd_mysql_command;

/* Création de la base de données */
CREATE DATABASE bdd_mysql_command
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

/* On "entre" dans la base de données */
USE bdd_mysql_command;


/* Création de la table category */
CREATE TABLE category(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL
) ENGINE= InnoDB;


CREATE TABLE fiche (
	id INT PRIMARY KEY AUTO_INCREMENT,
	firstName VARCHAR(55) NOT NULL,
	lastName VARCHAR(55) NOT NULL
)ENGINE=InnoDB;


/* Création de la table user */
CREATE TABLE app_user (
	username VARCHAR(80) PRIMARY KEY,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	role VARCHAR(40) NOT NULL,
	is_enabled BOOLEAN NOT NULL,
	fiche_id INT,
	/* On rajoute la constrainte "UNIQUE" sur la fiche pour passer la relation en OneToOne */
	UNIQUE (fiche_id),
	FOREIGN KEY (fiche_id) REFERENCES fiche(id)
)ENGINE=InnoDB;

/* Création de la table product */
CREATE TABLE product(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	description TEXT NOT NULL,
	price DECIMAL(10,2) NOT NULL,
	created_at DATE NOT NULL,
	updated_at DATE,
	is_published BOOLEAN NOT NULL,
	nb_views INT DEFAULT 0,
	category_id INT NOT NULL,
	user_username VARCHAR(80) NOT NULL,
	FOREIGN KEY (category_id) REFERENCES category(id),
	FOREIGN KEY (user_username) REFERENCES app_user(username)
) ENGINE= InnoDB;

/* Création de la table tag */
CREATE TABLE tag (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL
)ENGINE=InnoDB;


/* Création de la table d'association entre les produits et les tags */
CREATE TABLE products_has_tags (
	tag_id INT,
	product_id INT,
	CONSTRAINT pk_products_has_tags PRIMARY KEY(tag_id, product_id),
	
	/* On recréé les index pour les clefs étrangères */
	INDEX index_tag (tag_id),
	INDEX index_product (product_id),
	FOREIGN KEY (tag_id) REFERENCES tag(id),
	FOREIGN KEY (product_id) REFERENCES product(id)
)ENGINE=InnoDB;























