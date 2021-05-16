-- projects
insert into projects(src_image, description, descripcion) values ("img/pokedex.png", "An application consuming pokeapi. It renders a pokemons data without reloading page.","Aplicación que consume la Pokeapi. Actualiza los datos de un pokémon sin actualizar la página.");
insert into projects(src_image, description, descripcion) values ("img/calculator.png", "A simple digital calculator that computes basic operations (one at a time).","Calculadora digital sencilla que calcula operaciones básicas (una a la vez)");
insert into projects(src_image, description, descripcion) values ("img/rock-paper-scissors.png", "Rock papers scissors game. Not responsive yet.","Juego de piedra papel tijeras. Aún no es responsivo");

-- technologies for each project
insert into projects_technologies(id_project, technology) values (1, "HTML");
insert into projects_technologies(id_project, technology) values (1, "SASS");
insert into projects_technologies(id_project, technology) values (1, "Javascript");

insert into projects_technologies(id_project, technology) values (2, "HTML");
insert into projects_technologies(id_project, technology) values (2, "CSS");
insert into projects_technologies(id_project, technology) values (2, "Javascript");

insert into projects_technologies(id_project, technology) values (3, "HTML");
insert into projects_technologies(id_project, technology) values (3, "CSS");
insert into projects_technologies(id_project, technology) values (3, "Javascript");

-- skills
insert into skills (name, percent) values ("html", 100);
insert into skills (name, percent) values ("css", 95);
insert into skills (name, percent) values ("sass", 95);
insert into skills (name, percent) values ("javascript", 95);
insert into skills (name, percent) values ("jquery", 90);
insert into skills (name, percent) values ("typescript", 70);
insert into skills (name, percent) values ("angular", 70);
insert into skills (name, percent) values ("php", 85);
insert into skills (name, percent) values ("laravel", 80);
insert into skills (name, percent) values ("mysql", 85);
insert into skills (name, percent) values ("react", 0);

-- reset data if something wrong
-- delete from projects;
-- delete from projects_technologies;
-- delete from skills;

-- alter table projects auto_increment = 1;
-- alter table projects_technologies auto_increment = 1;
-- alter table skills auto_increment = 1;

-- -------------------------------------------------------------------------------------
-- these are just for test view
-- insert into projects(src_image, description, descripcion) values ("", "",""); -- id 4
-- insert into projects(src_image, description, descripcion) values ("", "",""); -- id 5
-- insert into projects(src_image, description, descripcion) values ("", "",""); -- id 6

-- insert into projects_technologies(id_project, technology) values (4, "jade");
-- insert into projects_technologies(id_project, technology) values (4, "sass");
-- insert into projects_technologies(id_project, technology) values (4, "js");

-- insert into projects_technologies(id_project, technology) values (5, "php");
-- insert into projects_technologies(id_project, technology) values (5, "mysql");
-- insert into projects_technologies(id_project, technology) values (5, "react");

-- insert into projects_technologies(id_project, technology) values (6, "react");
-- insert into projects_technologies(id_project, technology) values (6, "mongo");
-- insert into projects_technologies(id_project, technology) values (6, "node");