use pagina_eventos;
create table persona (id_persona int primary key, nombre_persona varchar (50), ap_persona varchar (50), am_persona varchar(50), 
id_tipousuario int, email varchar (50), pass varchar (50));

create table registrar_eventos(id_registrar int primary key, id_evento int, descripcion_evento varchar (50), 
fecha_registro timestamp);
create table tipo_usuarios(id_tipousuario int primary key, descripcion_tipousuario varchar (50));
create table tipo_eventos (id_tipoevento int primary key, descripcion varchar (100));
create table lugares (id_lugar int primary key,descripcion_lugar varchar (50));
create table eventos (id_evento int primary key, id_lugar int, fecha_evento date, hora_evento time,nombre_evento varchar (50), id_tipoevento int);


insert into persona values(400, 'Valeria', 'Sanchez', 'Rodriguez', 1, 'val.sa@hgmail.com', '123456');
insert into persona values(401, 'Jesus Emerith', 'Ramirez', 'Ocampo', 1, 'Jjesus.e.ramirez@hgmail.com', '123456');

insert into registrar_eventos values(500, 300, 'Carrera de H2O anual', sysdate());
insert into registrar_eventos values(501, 301, 'Platica preventiva de drogas', sysdate());

insert into tipo_usuarios values(1, 'Usuario-predeterminado');
insert into tipo_usuarios values(2, 'Administrador');

insert into tipo_eventos values (100, 'Cultural');
insert into tipo_eventos values (101, 'Social');
insert into tipo_eventos values (102, 'Deportivo');
insert into tipo_eventos values (103, 'Gastronomicos');
insert into tipo_eventos values (104, 'Educativo');


insert into lugares values(200, 'Embarcadero Municipal');
insert into lugares values(201, 'Alameda del pueblo');
insert into lugares values(202, 'Casa de la Cultura');
insert into lugares values(203, 'La Peña del Príncipe');
insert into lugares values(204, 'Jardín Central');

insert into eventos values (300,200, '2018/10/20', '16:00:00', 'Carreras H20', 102 );
insert into eventos values (301, 201, '2018/12/20', '14:00:00', 'Platica preventiva', 101);
insert into eventos values (302, 202, '2018/10/31', '15:00:00', 'Concurso de catrinas', 100);
insert into eventos values (303, 203, '2018/11/01', '12:00:00', 'Carrera escolar', 104 );

insert into lugares values(205, 'Precidencia Municipal');
insert into lugares values(206, 'La capilla');
insert into lugares values(207, 'La deportiva');


insert into eventos values (304,206, '2018/11/17', '12:00:00', 'Valle Fest', 100);
insert into eventos values (305, 206, '2018/12/20', '14:00:00', 'Platica preventiva', 101);
insert into eventos values (306, 207, '2018/10/31', '15:00:00', 'Concurso de catrinas', 100);
insert into eventos values (307, 208, '2018/11/01', '12:00:00', 'Carrera escolar', 104 );
insert into eventos values (308, 209, '2018/11/01', '12:00:00', 'Carrera escolar', 104 );



