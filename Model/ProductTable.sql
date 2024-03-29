USE Livraison;
CREATE TABLE Produit(
    Id_produit SMALLINT NOT NULL AUTO_INCREMENT,
    nom_produit VARCHAR(255),
    description VARCHAR(255), 
    prix INT,
    product_img VARCHAR(255),
    Id_user SMALLINT,
    PRIMARY KEY(Id_produit),
    FOREIGN KEY(Id_user) REFERENCES user(Id_user)
);