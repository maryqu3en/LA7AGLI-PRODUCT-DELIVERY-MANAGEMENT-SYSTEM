USE Livraison;
CREATE TABLE client (
    Id_client SMALLINT NOT NULL AUTO_INCREMENT,
    nom_client VARCHAR(255),
    prenom_client VARCHAR(255),
    adresse_client VARCHAR(255),
    telephone_client INT,
    email_client VARCHAR(255),
    Id_user SMALLINT,
    PRIMARY KEY(Id_client),
    FOREIGN KEY(Id_user) REFERENCES user(Id_user)
);

-- user interaction/handles/io         ---> controllers

-- anything working with database

-- login verification: 