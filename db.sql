/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     13/04/2022 14:13:17                          */
/*==============================================================*/


drop table ACCESO;

drop table INSCRIPCION;

drop table INSCRITA;

drop table PERSONA;

drop table ROL;

drop table TIENE;

/*==============================================================*/
/* Table: ACCESO                                                */
/*==============================================================*/
create table ACCESO (
   ID_ACCESO            SERIAL               not null,
   CI                   CHAR(25)             null,
   USUARIO              CHAR(50)             null,
   PASSWORD             VARCHAR(1)           null,
   constraint PK_ACCESO primary key (ID_ACCESO)
);

/*==============================================================*/
/* Table: INSCRIPCION                                           */
/*==============================================================*/
create table INSCRIPCION (
   ID_INSCRIPCION       SERIAL               not null,
   CI_ESTUDIANTE        CHAR(25)             null,
   SIGLA                CHAR(10)             null,
   NOTA1                FLOAT8               null,
   NOTA2                FLOAT8               null,
   NOTA3                FLOAT8               null,
   NOTAFINAL            FLOAT8               null,
   constraint PK_INSCRIPCION primary key (ID_INSCRIPCION)
);

/*==============================================================*/
/* Table: INSCRITA                                              */
/*==============================================================*/
create table INSCRITA (
   ID_PERSONA           INT4                 not null,
   ID_INSCRIPCION       INT4                 not null,
   constraint PK_INSCRITA primary key (ID_PERSONA, ID_INSCRIPCION)
);

/*==============================================================*/
/* Table: PERSONA                                               */
/*==============================================================*/
create table PERSONA (
   ID_PERSONA           SERIAL               not null,
   ID_ACCESO            INT4                 not null,
   CI                   CHAR(25)             null,
   NOMBRE_C             CHAR(250)            null,
   FACHA_NAC            DATE                 null,
   DEPARTAMENTO         CHAR(2)              null,
   constraint PK_PERSONA primary key (ID_PERSONA)
);

/*==============================================================*/
/* Table: ROL                                                   */
/*==============================================================*/
create table ROL (
   ID_ROL               SERIAL               not null,
   NOMBRE               CHAR(25)             null,
   constraint PK_ROL primary key (ID_ROL)
);

/*==============================================================*/
/* Table: TIENE                                                 */
/*==============================================================*/
create table TIENE (
   ID_PERSONA           INT4                 not null,
   ID_ROL               INT4                 not null,
   constraint PK_TIENE primary key (ID_PERSONA, ID_ROL)
);

alter table INSCRITA
   add constraint FK_INSCRITA_INSCRITA_PERSONA foreign key (ID_PERSONA)
      references PERSONA (ID_PERSONA)
      on delete restrict on update restrict;

alter table INSCRITA
   add constraint FK_INSCRITA_INSCRITA2_INSCRIPC foreign key (ID_INSCRIPCION)
      references INSCRIPCION (ID_INSCRIPCION)
      on delete restrict on update restrict;

alter table PERSONA
   add constraint FK_PERSONA_ACCEDE_ACCESO foreign key (ID_ACCESO)
      references ACCESO (ID_ACCESO)
      on delete restrict on update restrict;

alter table TIENE
   add constraint FK_TIENE_TIENE_PERSONA foreign key (ID_PERSONA)
      references PERSONA (ID_PERSONA)
      on delete restrict on update restrict;

alter table TIENE
   add constraint FK_TIENE_TIENE2_ROL foreign key (ID_ROL)
      references ROL (ID_ROL)
      on delete restrict on update restrict;

