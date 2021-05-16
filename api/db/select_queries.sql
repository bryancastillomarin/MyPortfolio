create view projectsEN as
select distinct(pt.id_project) as id, src_image as image, description, url,
	(select technology
    from projects_technologies
    where id_project = id
    limit 0,1) as technology1,
    (select technology
    from projects_technologies
    where id_project = id
    limit 1,1) as technology2,
    (select technology
    from projects_technologies
    where id_project = id
    limit 2,1) as technology3
from projects_technologies as pt
inner join projects as p on pt.id_project = p.id_project;

create view projectsES as
select distinct(pt.id_project) as id, src_image as image, descripcion as description, url,
	(select technology
    from projects_technologies
    where id_project = id
    limit 0,1) as technology1,
    (select technology
    from projects_technologies
    where id_project = id
    limit 1,1) as technology2,
    (select technology
    from projects_technologies
    where id_project = id
    limit 2,1) as technology3
from projects_technologies as pt
inner join projects as p on pt.id_project = p.id_project;

select name, percent from skills;
select * from projectsES;
select * from projectsEN;