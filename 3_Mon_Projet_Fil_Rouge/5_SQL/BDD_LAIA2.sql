create database laia_crea;
use laia_crea;

create table role_utilisateur(
id_role_utilisateur int primary key auto_increment not null,
nom_role_utilisateur varchar(50) not null
)engine=InnoDB;

create table utilisateur(
id_utilisateur int primary key auto_increment not null,
nom_utilisateur   Varchar (50) NOT NULL,
prenom_utilisateur   Varchar (50) NOT NULL,
email_utilisateur Varchar (50) NOT NULL,
mdp_utilisateur   Varchar (100) NOT NULL,
num_rue_adresse_utilisateur   Varchar (50) NOT NULL,
nom_adresse_utilisateur   Varchar (50) NOT NULL,
cp_ville_utilisateur   Varchar (50) NOT NULL,
ville_utilisateur   Varchar (50) NOT NULL,
pays_utilisateur   Varchar (50) NOT NULL,
id_role_utilisateur int
)ENGINE=InnoDB;

create table passer(
id_commande int not null,
id_utilisateur int not null,
primary key(id_commande,id_utilisateur)
)engine=InnoDB;

create table commande(
id_commande int primary key auto_increment not null,
qte_commande int not null,
date_commande datetime not null,
id_livraison int
)engine=InnoDB;

create table contenir(
id_commande int not null,
id_produit int not null,
primary key(id_commande,id_produit)
)engine=InnoDB;

create table categorie(
id_categorie int primary key auto_increment not null,
nom_categorie varchar (50) not null
)engine=InnoDB;

create table livraison(
id_livraison int primary key auto_increment not null,
nom_livraison varchar (50) not null,
prix_livraison float not null,
mode_livraison varchar (50) not null
)engine=InnoDB;

create table appartenir(
id_categorie int not null,
id_produit int not null,
primary key(id_categorie,id_produit)
)engine=InnoDB;

create table produit(
id_produit int primary key auto_increment not null,
nom_produit varchar (50) not null,
description_produit varchar (50) not null,
prix_produit float not null,
image_produit varchar(50) not null,
id_categorie int
)engine=InnoDB;

create table facture(
id_facture int primary key auto_increment not null,
nom_facture varchar (50) not null,
date_facture datetime not null,
prix_facture float not null,
id_commande int
)engine=InnoDB;

alter table utilisateur
add constraint fk_posseder_role_utilisateur
foreign key(id_role_utilisateur)
references role_utilisateur(id_role_utilisateur);

alter table passer
add constraint fk_passer_commande
foreign key(id_commande)
references commande(id_commande);

alter table passer
add constraint fk_passer_utilisateur
foreign key(id_utilisateur)
references utilisateur(id_utilisateur);

alter table commande
add constraint fk_effectuer_livraison
foreign key(id_livraison)
references livraison(id_livraison);

alter table contenir
add constraint fk_contenir_commande
foreign key(id_commande)
references commande(id_commande);

alter table contenir
add constraint fk_contenir_produit
foreign key(id_produit)
references produit(id_produit);

alter table facture
add constraint fk_editer_commande
foreign key(id_commande)
references commande(id_commande);

alter table produit
add constraint fk_appartenir_categorie
foreign key(id_categorie)
references categorie(id_categorie)