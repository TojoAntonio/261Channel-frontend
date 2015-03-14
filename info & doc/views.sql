create or replace view vueemission as (
select 
	p.idprogramme,
	e.idemission,
	ca.cat_libelle,
	te.t_libelle,
	e.e_nom,
	e.e_duree,
	e.e_zanaka,
	e.e_chemin,
	e.e_picture,
	e.e_description,
	as3.heure_diffusion
from 
	association_3 as as3
	JOIN emission e
	ON as3.idemission = e.idemission
	JOIN programme p
	ON as3.idprogramme = p.idprogramme
	JOIN typeemission te
	ON te.idtype = e.idtype
	JOIN categorieage ca
	ON ca.idcategorie = e.idcategorie
);

create or replace view vueemissionparprogramme as (
select
	c.cat_libelle,
	te.t_libelle,
	e.e_nom,
	e.e_duree,
	e.e_zanaka,
	e.e_chemin,
	e.e_picture,
	e.e_description,
	as3.idprogramme,
	as3.heure_diffusion,
	as3.idemission
from 
	association_3 as3
	JOIN emission e
	ON e.idemission = as3.idemission
	JOIN typeemission te
	ON te.idtype = e.idtype
	JOIN categorieage c
	ON c.idcategorie = e.idcategorie
);
create view vueemissionprogramme as (
select
	c.cat_libelle,
	te.t_libelle,
	e.e_nom,
	e.e_duree,
	e.e_zanaka,
	e.e_chemin,
	as3.idprogramme,
	as3.heure_diffusion,
	as3.idemission,
        p.p_date
from 
	association_3 as3
	JOIN emission e
	ON e.idemission = as3.idemission
	JOIN typeemission te
	ON te.idtype = e.idtype
	JOIN categorieage c
	ON c.idcategorie = e.idcategorie
	JOIN programme p
	ON p.idprogramme=as3.idprogramme
);
