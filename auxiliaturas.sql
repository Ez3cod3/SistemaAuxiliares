/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     30/03/2020 08:41:42 p.m.                     */
/*==============================================================*/


drop table if exists ADMINISTRADOR;

drop table if exists AUXILIATURA;

drop table if exists CONVOCATORIA;

drop table if exists CON_DOCU;

drop table if exists DOCUMENTOS;

drop table if exists FUNCIONES;

drop table if exists NOTAS;

drop table if exists OBSERVACIONES;

drop table if exists POSTULACION;

drop table if exists POSTULANTE;

drop table if exists VALIDACION;

/*==============================================================*/
/* Table: ADMINISTRADOR                                         */
/*==============================================================*/
create table ADMINISTRADOR
(
   COD_ADMINISTRACION   varchar(50) not null,
   NOM_ADMINISTRACION   varchar(20),
   APE_PAT_ADMINISTRACION varchar(20),
   APE_MAT_ADMINISTRACION varchar(20),
   CI_ADMINISTRADOR     varchar(20),
   TIPO_ADMINISTRADOR   int,
   primary key (COD_ADMINISTRACION)
);

/*==============================================================*/
/* Table: AUXILIATURA                                           */
/*==============================================================*/
create table AUXILIATURA
(
   COD_AUXILIATURA      varchar(20) not null,
   NOM_AUXILIATURA      varchar(20),
   OBS_AUXILIATURA      varchar(100),
   primary key (COD_AUXILIATURA)
);

/*==============================================================*/
/* Table: CONVOCATORIA                                          */
/*==============================================================*/
create table CONVOCATORIA
(
   COD_CONVOCATORIA     varchar(20) not null,
   COD_AUXILIATURA      varchar(20),
   NOM_CONVOCATORIA     varchar(50),
   FECHA_INI_CONVOCATORIA date,
   FECHA_FIN_CONVOCATORIA date,
   primary key (COD_CONVOCATORIA)
);

/*==============================================================*/
/* Table: CON_DOCU                                              */
/*==============================================================*/
create table CON_DOCU
(
   ID_CON_DOCU          int not null,
   ID_DOCUMENTO         int,
   COD_CONVOCATORIA     varchar(20),
   primary key (ID_CON_DOCU)
);

/*==============================================================*/
/* Table: DOCUMENTOS                                            */
/*==============================================================*/
create table DOCUMENTOS
(
   ID_DOCUMENTO         int not null,
   NOM_DOCUMENTO        varchar(100),
   DESC_DOCUMENTO       varchar(100),
   primary key (ID_DOCUMENTO)
);

/*==============================================================*/
/* Table: FUNCIONES                                             */
/*==============================================================*/
create table FUNCIONES
(
   ID_FUNCION           int not null,
   COD_ADMINISTRACION   varchar(50),
   NOMBRE_FUNCION       varchar(30),
   primary key (ID_FUNCION)
);

/*==============================================================*/
/* Table: NOTAS                                                 */
/*==============================================================*/
create table NOTAS
(
   ID_NOTAS             int not null,
   ID_POSTULACION       int,
   NOTA_EXAMEN          int,
   NOTA_MERITOS         int,
   NOTA_FINAL           int,
   primary key (ID_NOTAS)
);

/*==============================================================*/
/* Table: OBSERVACIONES                                         */
/*==============================================================*/
create table OBSERVACIONES
(
   ID_OBSERVACIONES     int not null,
   ID_POSTULACION       int,
   DESC_OBSERVACION     varchar(200),
   primary key (ID_OBSERVACIONES)
);

/*==============================================================*/
/* Table: POSTULACION                                           */
/*==============================================================*/
create table POSTULACION
(
   ID_POSTULACION       int not null,
   ID_POSTULANTE        int,
   COD_POSTULACION      varchar(20),
   OBS_POSTULACION      int,
   primary key (ID_POSTULACION)
);

/*==============================================================*/
/* Table: POSTULANTE                                            */
/*==============================================================*/
create table POSTULANTE
(
   ID_POSTULANTE        int not null,
   NOM_POSTULANTE       varchar(50),
   APE_PAT_POSTULANTE   varchar(20),
   APE_MAT_POSTULANTE   varchar(20),
   CI_POSTULANTE        varchar(20),
   COD_SIS_POSTULANTE   int,
   primary key (ID_POSTULANTE)
);

/*==============================================================*/
/* Table: VALIDACION                                            */
/*==============================================================*/
create table VALIDACION
(
   ID_VALIDACION        int not null,
   ID_POSTULACION       int,
   COD_ADMINISTRACION   varchar(50),
   VALIDAR              int,
   primary key (ID_VALIDACION)
);

alter table CONVOCATORIA add constraint FK_RELATIONSHIP_6 foreign key (COD_AUXILIATURA)
      references AUXILIATURA (COD_AUXILIATURA) on delete restrict on update restrict;

alter table CON_DOCU add constraint FK_RELATIONSHIP_2 foreign key (COD_CONVOCATORIA)
      references CONVOCATORIA (COD_CONVOCATORIA) on delete restrict on update restrict;

alter table CON_DOCU add constraint FK_RELATIONSHIP_3 foreign key (ID_DOCUMENTO)
      references DOCUMENTOS (ID_DOCUMENTO) on delete restrict on update restrict;

alter table FUNCIONES add constraint FK_RELATIONSHIP_9 foreign key (COD_ADMINISTRACION)
      references ADMINISTRADOR (COD_ADMINISTRACION) on delete restrict on update restrict;

alter table NOTAS add constraint FK_RELATIONSHIP_5 foreign key (ID_POSTULACION)
      references POSTULACION (ID_POSTULACION) on delete restrict on update restrict;

alter table OBSERVACIONES add constraint FK_RELATIONSHIP_4 foreign key (ID_POSTULACION)
      references POSTULACION (ID_POSTULACION) on delete restrict on update restrict;

alter table POSTULACION add constraint FK_RELATIONSHIP_1 foreign key (ID_POSTULANTE)
      references POSTULANTE (ID_POSTULANTE) on delete restrict on update restrict;

alter table VALIDACION add constraint FK_RELATIONSHIP_7 foreign key (ID_POSTULACION)
      references POSTULACION (ID_POSTULACION) on delete restrict on update restrict;

alter table VALIDACION add constraint FK_RELATIONSHIP_8 foreign key (COD_ADMINISTRACION)
      references ADMINISTRADOR (COD_ADMINISTRACION) on delete restrict on update restrict;

