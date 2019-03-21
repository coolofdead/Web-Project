DROP TABLE UTILISATEUR;
DROP TABLE COMPETENCES;
DROP TABLE CONTACT;
DROP TABLE DIPLOMES;

/*
    Date d'anniversaire, Ville actuelle, Code postal, Ecole ou lieu de travail,
    Numéro de téléphone, Age, Diplomes, Mail, Lien vers un cv si disponible, Competences
*/
CREATE TABLE UTILISATEUR (
  ID INT PRIMARY KEY,
  NOM VARCHAR(30) NOT NULL,
  PRENOM VARCHAR(30) NOT NULL,
  ANNIVERSAIRE DATE UNIQUE NOT NULL,
  VILLE VARCHAR(20) NOT NULL,
  CODE_POSTAL INT,
  ECOLE VARCHAR(20),
  TELEPHONE INT,
  AGE INT UNIQUE NOT NULL CHECK(AGE > 0),
  /*COMPETENCES,*/
  MAIL VARCHAR(30),
  LINK_CV VARCHAR(100)
);

/*
    Nom, Lien vers une icone, Niveau en pourcentage de maitrise, Année d'experience,
    Color utilisé pour la barre 1 er plan, Color utilisé pour la barre au second plan
*/
CREATE TABLE COMPETENCES (
    ID INT,
    NOM VARCHAR(30) NOT NULL UNIQUE,
    ICON_LINK VARCHAR(100),
    NIVEAU INT CHECK(NIVEAU >= 0),
    ANNEE_EXPERIENCE INT CHECK(ANNEE_EXPERIENCE > 0),
    COLOR_FRONT VARCHAR(30),
    COLOR_BACK VARCHAR(30)
);

/*
    Nom de l'envoyeur, Son mail ainsi que son message
    Géré par la page web, il n'est pas obligé que toute les colonnes soient remplies (Javascript)
*/
CREATE TABLE CONTACT (
    NOM VARCHAR(100),
    MAIL VARCHAR(100),
    MESSAGE VARCHAR(2000)
);

/*
    Nom de l'école, Niveau d'apprentissage (bachelor, master, bac ..),
    Nom de la formation (Inge Sup,..), Année d'obention du diplome
*/
CREATE TABLE DIPLOMES (
    ID INT,
    ECOLE VARCHAR(50) NOT NULL,
    NIVEAU VARCHAR(30),
    FORMATION VARCHAR(50) NOT NULL,
    GRADUATING_YEAR DATE
);

ALTER TABLE COMPETENCES 
ADD CONSTRAINT  COMPETENCES_UTILISTAEUR_ID_FK FOREIGN KEY (ID) REFERENCES UTILISATEUR(ID);

ALTER TABLE COMPETENCES
DROP CONSTRAINT COMPETENCES_UTILISTAEUR_ID_FK;

ALTER TABLE DIPLOMES 
ADD CONSTRAINT  DIPLOMES_UTILISTAEUR_ID_FK FOREIGN KEY (ID) REFERENCES UTILISATEUR(ID);

ALTER TABLE DIPLOMES
DROP CONSTRAINT DIPLOMES_UTILISTAEUR_ID_FK;

INSERT INTO UTILISATEUR VALUES(0,'GIOVANNONI', 'Thomas', TO_DATE('1998/11/23', 'yyyy/mm/dd'), 'LYON', 69002, 'YNOV', 0619493115, 20, 'thomas.giovannoni@ynov.com', '');
INSERT INTO COMPETENCES VALUES(0, 'HTML', '', 90, 2, 'orange', 'rgb(244, 244, 66)');
INSERT INTO COMPETENCES VALUES(0, 'CSS', '', 70, 1, 'blue', 'rgb(170, 215, 255)');
INSERT INTO COMPETENCES VALUES(0, 'JAVASCRIPT', '', 80, 1, 'yellow', 'rgb(255, 251, 186)');
INSERT INTO COMPETENCES VALUES(0, 'C#', '', 70, 1, 'purple', 'rgb(240, 196, 255)');
INSERT INTO DIPLOMES VALUES(0, 'BRANLY', 'BAC', 'STI2D', TO_DATE('2017/07/12', 'yyyy/mm/dd'));
