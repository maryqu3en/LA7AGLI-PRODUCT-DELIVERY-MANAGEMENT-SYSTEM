USE Livraison;

CREATE TABLE commande(
    Id_commande SMALLINT NOT NULL AUTO_INCREMENT,
    date_commande DATE,
    quantite INT,
    Id_client SMALLINT,
    Id_user SMALLINT,
    PRIMARY KEY(Id_commande),
    FOREIGN KEY(Id_client) REFERENCES client(Id_client) ON DELETE CASCADE,
    FOREIGN KEY(Id_user) REFERENCES user(Id_user)
);
