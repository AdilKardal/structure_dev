create database laia_crea;
use laia_crea;

create table administrateur(
id_administrateur int primary key auto_increment not null,
email_administrateur Varchar (50) NOT NULL,
mdp_administrateur Varchar (100) NOT NULL
)ENGINE=InnoDB;

create table categorie(
id_categorie int primary key auto_increment not null,
nom_categorie varchar (50) not null
)engine=InnoDB;

create table produit(
id_produit int primary key auto_increment not null,
nom_produit varchar (50) not null,
description_produit varchar (50) not null,
prix_produit float not null,
image_produit varchar(50) not null,
id_categorie int
)engine=InnoDB;

alter table produit
add constraint fk_appartenir_categorie
foreign key(id_categorie)
references categorie(id_categorie)