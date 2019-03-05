/*selection  d'une base de données */
USE bdd_mysql_command;

/* Ajout des données dans la table catégory */
INSERT INTO category (id, name)
VALUES (1,'Voyage');

/* Ajout de données dans la table fiche */
INSERT INTO fiche (id,firstName, lastName)
VALUES
(1,'jérome','le retour'),
(2,'john','Dos');


/* Ajout de données dans la table app_user */
INSERT INTO app_user (username, email, password, role, is_enabled, fiche_id)
VALUES
('jeje','test@test.fr','test','ROLE ADMIN',1,1),
('john','test@test.fr','test', 'ROLE ADMIN',1,2);

/* Ajout de données dans la table product*/
INSERT INTO product (id,name, description, price, created_at, is_published, category_id, user_username)
VALUES
(1, 'hamac', 'pour se reposer',10.99, '2019-02-20',1,1, 'john'),
(2, 'parasol', 'pour protéger le hamac', 50.99 ,'2019-02-19',1,1,'jeje');

/* Ajout de données dans la table tag */
INSERT INTO tag (id,name)
VALUES
(1, 'nouveautés'),
(2, 'promotion produits');

/* Ajouter de données dans table product_has_tag */
INSERT INTO products_has_tags (tag_id, product_id)
VALUES
(1,2),
(1,1),
(2,1);




