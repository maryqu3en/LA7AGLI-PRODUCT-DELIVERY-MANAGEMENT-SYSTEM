USE Livraison;
CREATE TABLE livreur(
    Id_livreur SMALLINT NOT NULL AUTO_INCREMENT,
    nom_livreur VARCHAR(255),
    prenom_livreur VARCHAR(255),
    adress_livreur VARCHAR(255),
    telephone_livreur INT,
    email_livreur VARCHAR(255),
    Id_user SMALLINT,
    PRIMARY KEY(Id_livreur),
    FOREIGN KEY(Id_user) REFERENCES user(Id_user)
);