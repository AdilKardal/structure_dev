create database laia_crea;
use laia_crea;

create table role_user(
id_role_user int primary key auto_increment not null,
nom_role_user varchar(50) not null
)engine=InnoDB;

create table posseder(
id_role_user int not null,
id_utilisateur int not null,
primary key(id_role_user, id_utilisateur)
)engine=InnoDB;

create table utilisateur(
id_utilisateur int primary key auto_increment not null,
login_utilisateur Varchar (50) NOT NULL ,
mdp_utilisateur   Varchar (50) NOT NULL
)ENGINE=InnoDB;

create table devenir(
id_client int not null,
id_utilisateur int not null,
primary key(id_client, id_utilisateur)
)engine=InnoDB;

create table client(
id_client int primary key auto_increment not null,
nom_client varchar (50) not null,
prenom_client varchar (50) not null,
id_adresse int
)engine=InnoDB;

create table passer(
id_client int not null,
id_commande int not null,
primary key(id_client,id_commande)
)engine=InnoDB;

create table adresse(
id_adresse  int primary key auto_increment not null,
num_rue_adresse varchar (50) not null,
nom_adresse varchar (50) not null,
cp_adresse int not null,
ville_adresse varchar (50) not null,
pays_adresse varchar (50) not null
)engine=InnoDB;

create table avoir(
id_adresse int not null,
id_facture int not null,
id_livraison int not null,
primary key(id_adresse,id_facture,id_livraison)
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
prix_produit float not null,
desc_produit varchar (50) not null
)engine=InnoDB;

create table facture(
id_facture int primary key auto_increment not null,
nom_facture varchar (50) not null,
date_facture datetime not null,
prix_facture float not null,
id_commande int
)engine=InnoDB;


alter table posseder
add constraint fk_posseder_role_user
foreign key(id_role_user)
references role_user(id_role_user);

alter table posseder
add constraint fk_posseder_utilisateur
foreign key(id_utilisateur)
references utilisateur(id_utilisateur);

alter table appartenir
add constraint fk_appartenir_categorie
foreign key(id_categorie)
references categorie(id_categorie);

alter table appartenir
add constraint fk_appartenir_produit
foreign key(id_produit)
references produit(id_produit);

alter table devenir
add constraint fk_devenir_utilisateur
foreign key(id_utilisateur)
references utilisateur(id_utilisateur);

alter table devenir
add constraint fk_devenir_client
foreign key(id_client)
references client(id_client);

alter table passer
add constraint fk_passer_commande
foreign key(id_commande)
references commande(id_commande);

alter table passer
add constraint fk_passer_client
foreign key(id_client)
references client(id_client);

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

alter table client
add constraint fk_habiter_adresse
foreign key(id_adresse)
references adresse(id_adresse);

alter table avoir
add constraint fk_avoir_adresse
foreign key (id_adresse)
references adresse(id_adresse);

alter table avoir
add constraint fk_avoir_facture
foreign key (id_facture)
references facture(id_facture);

alter table avoir
add constraint fk_avoir_livraison
foreign key (id_livraison)
references livraison(id_livraison);

