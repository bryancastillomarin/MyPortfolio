create database portfolio character set utf8 collate utf8_general_ci;
set names utf8;

use portfolio;

create table projects(
	id_project int not null auto_increment,
    url varchar(100),
    src_image varchar(100),
    description varchar(100),
    descripcion varchar(100),
    primary key(id_project)
);

create table projects_technologies(
	id_technology int not null auto_increment,
    id_project int not null,
    technology varchar(50) not null,
    primary key(id_technology),
    foreign key(id_project) references projects(id_project)
    on delete cascade
);

create table skills(
	id_skill int not null auto_increment,
    name varchar(25),
    percent int,
    primary key(id_skill)
);