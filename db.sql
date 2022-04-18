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
   /*CI                   CHAR(25)             null,*/
   USUARIO              CHAR(50)             null,
   PASSWORD             VARCHAR           null,
   constraint PK_ACCESO primary key (ID_ACCESO)
);

/*==============================================================*/
/* Table: INSCRIPCION                                           */
/*==============================================================*/
create table INSCRIPCION (
   ID_INSCRIPCION       SERIAL               not null,
   /*CI_ESTUDIANTE        CHAR(25)             null,*/
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

/*Datos de la tabla rol*/
INSERT INTO rol (nombre) values ('administrador');
INSERT INTO rol (nombre) values ('estudiante');
INSERT INTO rol (nombre) values ('director');
INSERT INTO rol (nombre) values ('profesor');

/*datos de la tabla acceso*/
INSERT INTO acceso (usuario, password) values ('bulgaTEr', 'ARyStLe');/*admim*/
INSERT INTO acceso (usuario, password) values ('oNDeRc', 'NtTHb');/*director*/
INSERT INTO acceso (usuario, password) values ('cOniOW', 'rwKfE');/*profesor1*/
INSERT INTO acceso (usuario, password) values ('nONeCT', 'u6EPm');/*profesor2*/
INSERT INTO acceso (usuario, password) values ('TRICer', 'PnEFr');/*estudiante1*/
INSERT INTO acceso (usuario, password) values ('rELfuL', 'yxgWz');/*estudiante2*/
INSERT INTO acceso (usuario, password) values ('aNtiCe', 'XvuYe');/*estudiante3*/
INSERT INTO acceso (usuario, password) values ('IspaRi', 'qqReW');/*estudiante4*/
INSERT INTO acceso (usuario, password) values ('mINvOC', 'hP2ZV');/*estudiante5*/

/*datos de la tabla persona*/
INSERT INTO persona (id_acceso, ci, nombre_c, facha_nac, departamento) values (1, '6962120','RICARDO VEGA ZAMBRANO','1995-05-21','02');/*admim*/
INSERT INTO persona (id_acceso, ci, nombre_c, facha_nac, departamento) values (2, '3037257','JUAN CAMILO JIMENEZ CORTES','1970-08-02','03');/*director*/
INSERT INTO persona (id_acceso, ci, nombre_c, facha_nac, departamento) values (3, '9350108','CAROLINA PINTOR PINZON','1990-04-11','07');/*profesor1*/
INSERT INTO persona (id_acceso, ci, nombre_c, facha_nac, departamento) values (4, '6991036','JORGE ESTEBAN REY BOTERO','1992-10-08','02');/*profesor2*/
INSERT INTO persona (id_acceso, ci, nombre_c, facha_nac, departamento) values (5, '9756226','CLAUDIA LILIANA TORRES FRIAS ','2000-06-11','02');/*estudiante1*/
INSERT INTO persona (id_acceso, ci, nombre_c, facha_nac, departamento) values (6, '9229511','FERNANDO PADILLA ROJAS','2001-02-01','04');/*estudiante2*/
INSERT INTO persona (id_acceso, ci, nombre_c, facha_nac, departamento) values (7, '8793155','JESUS RAMOS UYULI','2000-07-25','03');/*estudiante3*/
INSERT INTO persona (id_acceso, ci, nombre_c, facha_nac, departamento) values (8, 'E-0031409','PABLO ROBERTO RIVERO SOSA','2002-11-17','07');/*estudiante4*/
INSERT INTO persona (id_acceso, ci, nombre_c, facha_nac, departamento) values (9, '9749519','MARCELA GARCIA RUEDA','2000-05-06','02');/*estudiante5*/

/*datos inscripcion*/
INSERT INTO inscripcion (sigla, nota1, nota2, nota3, notafinal) values ('INF161',55,65,70,68);/*estudiante1*/
INSERT INTO inscripcion (sigla, nota1, nota2, nota3, notafinal) values ('INF281',75,65,80,70);/*estudiante2-1*/
INSERT INTO inscripcion (sigla, nota1, nota2, nota3, notafinal) values ('INF324',51,48,60,48);/*estudiante2-2*/
INSERT INTO inscripcion (sigla, nota1, nota2, nota3, notafinal) values ('INF324',65,70,75,76);/*estudiante3*/
INSERT INTO inscripcion (sigla, nota1, nota2, nota3, notafinal) values ('INF161',59,66,70,68);/*estudiante4-1*/
INSERT INTO inscripcion (sigla, nota1, nota2, nota3, notafinal) values ('INF281',80,85,90,93);/*estudiante4-2*/
INSERT INTO inscripcion (sigla, nota1, nota2, nota3, notafinal) values ('INF161',70,65,60,67);/*estudiante5*/

/*ver tiene e inscrita */
/*datos relacion inscrita*/
INSERT INTO inscrita (id_persona, id_inscripcion) values (5,1);/*relacion estudiante1 con su inscripcion*/
INSERT INTO inscrita (id_persona, id_inscripcion) values (6,2);/*relacion estudiante2 con su inscripcion-1*/
INSERT INTO inscrita (id_persona, id_inscripcion) values (6,3);/*relacion estudiante2 con su inscripcion-2*/
INSERT INTO inscrita (id_persona, id_inscripcion) values (7,4);/*relacion estudiante3 con su inscripcion*/
INSERT INTO inscrita (id_persona, id_inscripcion) values (8,5);/*relacion estudiante4 con su inscripcion-1*/
INSERT INTO inscrita (id_persona, id_inscripcion) values (8,6);/*relacion estudiante4 con su inscripcion-2*/
INSERT INTO inscrita (id_persona, id_inscripcion) values (9,7);/*relacion estudiante5 con su inscripcion*/

/*datos realacion tiene*/
INSERT INTO tiene (id_persona, id_rol) values (1,1);/*admin relacion persona*/
INSERT INTO tiene (id_persona, id_rol) values (2,3);/*director relacion persona*/
INSERT INTO tiene (id_persona, id_rol) values (3,4);/*profesor1 relacion persona*/
INSERT INTO tiene (id_persona, id_rol) values (4,4);/*profesor2 relacion persona*/
INSERT INTO tiene (id_persona, id_rol) values (5,2);/*estudiante1 relacion persona*/
INSERT INTO tiene (id_persona, id_rol) values (6,2);/*estudiante2 relacion persona*/
INSERT INTO tiene (id_persona, id_rol) values (7,2);/*estudiante3 relacion persona*/
INSERT INTO tiene (id_persona, id_rol) values (8,2);/*estudiante4 relacion persona*/
INSERT INTO tiene (id_persona, id_rol) values (9,2);/*estudiante5 relacion persona*/


/*consultas*/
/*ve si es estudiante y muestra sus notas*/
SELECT p.nombre_c,i.sigla,i.nota1,i.nota2,i.nota3,i.notafinal
FROM acceso a INNER JOIN persona p ON a.id_acceso = p.id_acceso
INNER JOIN tiene t ON p.id_persona = t.id_persona
INNER JOIN rol r ON t.id_rol = r.id_rol
INNER JOIN inscrita ins ON p.id_persona = ins.id_persona
INNER JOIN inscripcion i ON ins.id_inscripcion = i.id_inscripcion 
WHERE r.nombre = 'estudiante' and a.usuario = 'rELfuL' and a.password = 'yxgWz';

/*ve si es estudiante*/
SELECT p.nombre_c
FROM acceso a INNER JOIN persona p ON a.id_acceso = p.id_acceso
INNER JOIN tiene t ON p.id_persona = t.id_persona
INNER JOIN rol r ON t.id_rol = r.id_rol
WHERE r.nombre = 'estudiante' and a.usuario = 'rELfuL' and a.password = 'yxgWz';

/**/
SELECT * FROM inscripcion ;
/*suma y divide */
SELECT p.departamento,ins.id_inscripcion,((nota1+nota2+nota3+notafinal)/4) "total"
FROM inscripcion i INNER JOIN inscrita ins ON i.id_inscripcion = ins.id_inscripcion 
INNER JOIN persona p ON ins.id_persona = p.id_persona;

 /*muestra la media de notas por departamento*/
SELECT p.departamento,AVG((nota1+nota2+nota3+notafinal)/4)
FROM inscripcion i INNER JOIN inscrita ins ON i.id_inscripcion = ins.id_inscripcion 
INNER JOIN persona p ON ins.id_persona = p.id_persona
GROUP BY p.departamento
ORDER BY p.departamento;