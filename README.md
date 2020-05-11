# Une-page-avec-php-mysql-et-apache2-sous-linux
c'est un tp sous linux, administration du serveur web apache.

#c'est Partie 1 : Application LAMP All-in-One
#echo "Creation des utilisareurs et de la base de données"
sudo mysql <<EOF
create user Aboubacar23 identified by 'Aboubacar23';
grant all privileges on *.* To Aboubacar23;

create database grh;
use grh;

CREATE TABLE personne (
id Int NOT NULL AUTO_INCREMENT,
nom VARCHAR(255),
prenom VARCHAR(255),
age Int(11),
adresse VARCHAR(255),
PRIMARY KEY (id)
);

