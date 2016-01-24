use curso_flash;
select * from libros;
select * from flash2sql;
INSERT INTO flash2sql values(NULL, 'a', 'b', 'c');
use dgtve;
drop table if EXISTS primer_piso;
create table general_tel(
       id_empleado int(4) not null auto_increment,
       nombres varchar(30) not null,
       appaterno varchar(20) not null,
       apmaterno varchar(20) not null,
       area varchar(20) not null,
       modelo varchar(6) not null,
       inventario varchar(7) not null,
       serie varchar(20) not null,
       iptel tinyint unsigned not null,
       mac varchar(12) not null,
       ext int(6) unsigned not null,
       core tinyint(1) unsigned not null,
       clan  varchar(5) not null,
       vlan  tinyint(2) unsigned not null,
       compañia varchar(20) null,
       foto varchar(60) null,
       primary key(id_empleado)
);
describe primer_piso;
select * from primer_piso;
insert into general_tel values(
NULL,
'Francisco',
'Lechuga',
'Lechu',
'Telecom',
'A122',
'324JKDD',
'435763333FS46', 
4,
'DD230923DFSE',
23454,
5,
'3.192',
17,
'Avaya',
NULL
);


insert into general_tel values(
NULL,
'Francisco',
'Lechuga',
'Hernandez',
'Telecom',
'A123',
'324J3F4',
'43576FSF3F345', 
89,
'DD890923DFSE',
23473,
5,
'3.197',
17,
'Cisco',
NULL
);

drop table privilegios;
create table users_telecom(
       id tinyint unsigned AUTO_INCREMENT,
       usser varchar(20) not null,
       pass varchar(10) not null,
       PRIMARY KEY(id)
);

select * from general_tel;
DELETE  from general_tel where id='2';

create table ejemplos(
       id tinyint unsigned AUTO_INCREMENT,
       nombre varchar(30),
       apaterno varchar(20),
       amaterno varchar(20),
       primary key(id)
);

insert into ejemplos values (null,'Jose','Nalgon','Nalgota');
drop TABLE ejemplos;
select * from general_tel;

create table empleados(
       id_empleado int not null AUTO_INCREMENT primary key,
       nombre varchar (250),
       telefono varchar (50),
       correo varchar(100)
);

select * from empleados;
insert into empleados values
(null,'Pasi Pasita','47364786','pasita@hotmail.com')

select * from empleados where id_empleado=2;
use dgtve;
drop table general_tel;
create table 
select * from general_tel;

select * from general_tel order by nombres asc
UPDATE general_tel SET nombres='Pedro' where id_empleado='2';
DESCRIBE users_telecom;
insert into users_telecom values(null,'Alejandra','12345');
select * from users_telecom;
select usser from users_telecom where usser='123';

