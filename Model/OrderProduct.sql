USE Livraison;
CREATE TABLE OrderProduct(
    orderProduct_ID SMALLINT NOT NULL,
    Id_commande SMALLINT NOT NULL,
    Id_produit SMALLINT NOT NULL,
    PRIMARY KEY (Id_commande, Id_produit),
    FOREIGN KEY(Id_commande) REFERENCES commande(Id_commande), 
    FOREIGN KEY(Id_produit) REFERENCES Produit(Id_produit) 
);
