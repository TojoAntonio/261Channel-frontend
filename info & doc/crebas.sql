/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     29/01/2015 16:23:29                          */
/*==============================================================*/


drop table if exists ASSOCIATION_3;

drop table if exists CATEGORIEAGE;

drop table if exists EMISSION;

drop table if exists PROGRAMME;

drop table if exists TYPEEMISSION;

/*==============================================================*/
/* Table: ASSOCIATION_3                                         */
/*==============================================================*/
create table ASSOCIATION_3
(
   IDEMISSION           int not null,
   IDPROGRAMME          int not null,
   HEURE_DIFFUSION      time,
   primary key (IDEMISSION, IDPROGRAMME)
);

/*==============================================================*/
/* Table: CATEGORIEAGE                                          */
/*==============================================================*/
create table CATEGORIEAGE
(
   IDCATEGORIE          int not null auto_increment,
   CAT_LIBELLE          varchar(50),
   primary key (IDCATEGORIE)
);

/*==============================================================*/
/* Table: EMISSION                                              */
/*==============================================================*/
create table EMISSION
(
   IDEMISSION           int not null auto_increment,
   IDCATEGORIE          int not null,
   IDTYPE               int not null,
   E_NOM                varchar(50),
   E_DUREE              bigint,
   E_ZANAKA             varchar(100),
   E_CHEMIN             varchar(200),
   primary key (IDEMISSION)
);

/*==============================================================*/
/* Table: PROGRAMME                                             */
/*==============================================================*/
create table PROGRAMME
(
   IDPROGRAMME          int not null auto_increment,
   P_DATE               date,
   primary key (IDPROGRAMME)
);

/*==============================================================*/
/* Table: TYPEEMISSION                                          */
/*==============================================================*/
create table TYPEEMISSION
(
   IDTYPE               int not null auto_increment,
   T_LIBELLE            varchar(50),
   primary key (IDTYPE)
);

alter table ASSOCIATION_3 add constraint FK_ASSOCIATION_3 foreign key (IDEMISSION)
      references EMISSION (IDEMISSION) on delete restrict on update restrict;

alter table ASSOCIATION_3 add constraint FK_ASSOCIATION_4 foreign key (IDPROGRAMME)
      references PROGRAMME (IDPROGRAMME) on delete restrict on update restrict;

alter table EMISSION add constraint FK_ASSOCIATION_1 foreign key (IDCATEGORIE)
      references CATEGORIEAGE (IDCATEGORIE) on delete restrict on update restrict;

alter table EMISSION add constraint FK_ASSOCIATION_2 foreign key (IDTYPE)
      references TYPEEMISSION (IDTYPE) on delete restrict on update restrict;

