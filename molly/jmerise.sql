#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Administrateur
#------------------------------------------------------------

CREATE TABLE admin(
        id_admin  Int  Auto_increment  NOT NULL ,
        admin_nom Varchar (50) NOT NULL ,
        admin_mdp Varchar (50) NOT NULL
	 ,PRIMARY KEY (id_admin)
)ENGINE=MyISAM;


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE article(
        id_article               Int  Auto_increment  NOT NULL ,
        article_Nom              Varchar (50) NOT NULL ,
        article_Taille           Varchar (150) NOT NULL ,
        article_Coloris          Varchar (200) NOT NULL ,
        article_Genre            Varchar (50) NOT NULL ,
        article_Marque           Varchar (200) NOT NULL ,
        article_Information      Varchar (200) NOT NULL ,
        article_Conseil          Varchar (200) NOT NULL ,
        article_Prix             Varchar (15) NOT NULL ,
        article_Image_principale Varchar (200) NOT NULL ,
        article_Image_secondaire Varchar (1000) NOT NULL
	 ,PRIMARY KEY (id_article)
)ENGINE=MyISAM;