CREATE SEQUENCE my_sequence START 1;
  ALTER SEQUENCE my_sequence RESTART WITH 1;
  CREATE sequence profil_sequence start 1 ;
  create database gestion ;
  \c gestion ;
  create table inscription (
    idinscription INTEGER DEFAULT NEXTVAL('my_sequence') PRIMARY KEY,
    nom VARCHAR(255),
    password VARCHAR(255),
    siege VARCHAR(255),
    addressexploitation VARCHAR(255),
    nomdirigeant VARCHAR(255),
    debutexercice DATE
  );

  create table profil (
  idProfil integer DEFAULT nextval('profil_sequence') PRIMARY KEY ,
  idinscription integer,
  nom varchar(255),
  nomfichier varchar(25),
  FOREIGN KEY (idinscription) REFERENCES inscription(idinscription)
  );

 create table devis (
 Devis varchar(25) ,
 equivalence varchar(25) ,
 NIF VARCHAR(25),
 stat VARCHAR(25) ,
 nomfichier varchar(25),
 numeroregistre int 
 );
 create TABLE planComptable(
 idPlanComptable integer primary key,
 type varchar(25),
 numero integer,
 intituleCompte varchar(25)
 );
 create table planTiers (
 idPlanComptable integer primary key,
 type varchar(25),
 numero integer,
 intituleCompte varchar(25)
 ) ;
 create table codeJourneaux (
 idPlanComptable integer primary key,
 type varchar(25),
 code integer,
 intituleJourneaux varchar(25)
 );
 create table journal (
 idJournal integer PRIMARY key ,
 jour date,
 numeroPiece integer,
 referencesPieces varchar(25),
 numeroCompte1 integer ,
 numeroCompte2 integer ,
 libelleEcriture varchar(25),
 Devise varchar(25) ,
 parite integer ,
 quantite integer, 
 montantDevise integer ,
 prixUnitaire integer ,
 debit integer ,
 credit integer
 );
 CREATE TABLE GrandJ (
 idGrangj integer primary key,
 codeJournal varchar(25) ,
 datet date ,
 numeroPiece integer,
 referencesPieces varchar(25),
 numeroCompte integer ,
 libelleEcriture varchar(25),
 Devise varchar(25) ,
 parite integer ,
 quantite integer, 
 montantDevise integer ,
 prixUnitaire integer ,
 debit integer ,
 credit integer
 );

 CREATE TABLE Balance (
 idBalance integer PRIMARY key ,
 numeroCompte integer ,
 intituleCompte varchar(25) ,
 mouvementDebit integer ,
 mouvementCredit integer ,
 soldesDebit integer ,
 soldesCredit integer 
 );