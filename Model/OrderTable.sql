USE Livraison;
CREATE TABLE commande(
    Id_commande SMALLINT NOT NULL AUTO_INCREMENT,
    date_commande DATE,
    date_livraison DATE,
    quantite INT,  
    adresse_livraison VARCHAR(255),  
    Id_client SMALLINT,
    Id_livreur SMALLINT,
    Id_user SMALLINT,
    PRIMARY KEY(Id_commande),
    FOREIGN KEY(Id_client) REFERENCES client(Id_client),
    FOREIGN KEY(Id_livreur) REFERENCES livreur(Id_livreur),
    FOREIGN KEY(Id_user) REFERENCES user(Id_user)
);