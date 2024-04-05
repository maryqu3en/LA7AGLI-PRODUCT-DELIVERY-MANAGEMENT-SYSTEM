USE Livraison;

CREATE TABLE user (
    Id_user SMALLINT NOT NULL AUTO_INCREMENT,
    nom_user VARCHAR(255),
    prenom_user VARCHAR(255),
    password_user VARCHAR(255),
    email_user VARCHAR(255),
    produit VARCHAR(255),
    prix FLOAT,
    PRIMARY KEY(Id_user)
);