create database regime;
use regime;

create table user
(
    id_User int auto_increment primary key,
    user varchar(50),
    mail varchar(25),
    mdp varchar(20),
    status int
);

create table plat 
(
    id_Plat int auto_increment primary key,
    plat varchar(50)
);

create table ingredient
(
    id_Ingr int auto_increment primary key,
    ingredient varchar(50),
    apport double,
    pu double,
    unite varchar(2)
);

create table sport
(
    id_S int auto_increment primary key,
    nom varchar(50),
    quantite int,
    temps int,
    apport double
);

create table plat_ingr
(
    id_PI int auto_increment primary key,
    id_Plat int,
    id_Ingr int,
    quantite double,
    foreign key (id_Plat) references plat (id_Plat),
    foreign key (id_Ingr) references ingredient (id_Ingr)
);

create table apport_plat
(
    id_AP int auto_increment primary key,
    id_Plat int,
    apport_total double,
    prix double,
    foreign key (id_Plat) references plat (id_Plat)
);

create table regime
(
    id_Regime int auto_increment primary key,
    id_User int,
    debut date,  
    fin date,
    foreign key (id_User) references user(id_User)  
);

create table constitution_regime
(
    id_CR int auto_increment primary key,
    id_Regime int,
    id_Plat int,
    id_S int,
    foreign key (id_S) references sport (id_S),
    foreign key (id_Regime) references regime (id_Regime),
    foreign key (id_Plat) references plat (id_Plat)
);

insert into user values(null,'Gasy','gasy@gmail.com',1234,1);
insert into user values(null,'Nandraina','nandraina@gmail.com',1234,1);
insert into user values(null,'Anrick','anrick@gmail.com',1234,1);
insert into user values(null,'Paul','paul@gmail.com',0000,0);

insert into plat values(null,'Soupe tomate');
insert into plat values(null,'Salade de pate');
insert into plat values(null,'Steak salade');
insert into plat values(null,'Jus de menthe');
insert into plat values(null,'Viande de poulet');

insert into ingredient values(null,'Carotte',2,500,'g');
insert into ingredient values(null,'Laitue',-3,200,'g');
insert into ingredient values(null,'Menthe',-5,200,'g');
insert into ingredient values(null,'Patate douce',3,400,'g');
insert into ingredient values(null,'Haricot vert',-2,200,'g');
insert into ingredient values(null,'Ail',-2,100,'g');
insert into ingredient values(null,'Oigon',-2,100,'g');
insert into ingredient values(null,'Mais doux',2,200,'g');
insert into ingredient values(null,'Vinaigre',-8,100,'g');
insert into ingredient values(null,'Gingembre',-2,100,'g');
insert into ingredient values(null,'Sel',2,200,'g');
insert into ingredient values(null,'Sucre',3,200,'g');
insert into ingredient values(null,'Pain',8,200,'g');
insert into ingredient values(null,'Pate',6,300,'g');
insert into ingredient values(null,'Lait',2,200,'L');
insert into ingredient values(null,'Poivron',2,200,'g');
insert into ingredient values(null,'Ciboulette',-3,200,'g');
insert into ingredient values(null,'Persil',3,100,'g');
insert into ingredient values(null,'Aubergine',-4,300,'g');
insert into ingredient values(null,'Tomate',-3,200,'g');
insert into ingredient values(null,'Poireau',-2,200,'g');
insert into ingredient values(null,'Pomme',-5,200,'g');
insert into ingredient values(null,'Concombre',-3,200,'g');
insert into ingredient values(null,'Cornichon',-2,200,'g');
insert into ingredient values(null,'Viande de zebu',5,500,'g');
insert into ingredient values(null,'Viande de porc',4,600,'g');
insert into ingredient values(null,'Viande de poulet',2,400,'g');
insert into ingredient values(null,'Viande hachée',1,200,'g');
insert into ingredient values(null,'Steak',4,600,'g');
insert into ingredient values(null,'Eau',0,100,'g');

insert into plat_ingr values(null,1,(select id_Ingr from ingredient where ingredient = 'Tomate'),400);
insert into plat_ingr values(null,1,(select id_Ingr from ingredient where ingredient = 'Sel'),50);
insert into plat_ingr values(null,1,(select id_Ingr from ingredient where ingredient = 'Ciboulette'),100);

insert into plat_ingr values(null,2,(select id_Ingr from ingredient where ingredient = 'Pate'),150);
insert into plat_ingr values(null,2,(select id_Ingr from ingredient where ingredient = 'Poivron'),50);
insert into plat_ingr values(null,2,(select id_Ingr from ingredient where ingredient = 'Sel'),20);
insert into plat_ingr values(null,2,(select id_Ingr from ingredient where ingredient = 'Oigon'),30);
insert into plat_ingr values(null,2,(select id_Ingr from ingredient where ingredient = 'Concombre'),40);
insert into plat_ingr values(null,2,(select id_Ingr from ingredient where ingredient = 'Cornichon'),20);
insert into plat_ingr values(null,2,(select id_Ingr from ingredient where ingredient = 'Mais doux'),30);

insert into plat_ingr values(null,3,(select id_Ingr from ingredient where ingredient = 'Steak'),100);
insert into plat_ingr values(null,3,(select id_Ingr from ingredient where ingredient = 'Laitue'),40);
insert into plat_ingr values(null,3,(select id_Ingr from ingredient where ingredient = 'Oigon'),20);
insert into plat_ingr values(null,3,(select id_Ingr from ingredient where ingredient = 'Tomate'),20);
insert into plat_ingr values(null,3,(select id_Ingr from ingredient where ingredient = 'Mais doux'),30);
insert into plat_ingr values(null,3,(select id_Ingr from ingredient where ingredient = 'Vinaigre'),15);

insert into plat_ingr values(null,4,(select id_Ingr from ingredient where ingredient = 'Menthe'),150);
insert into plat_ingr values(null,4,(select id_Ingr from ingredient where ingredient = 'Eau'),500);
insert into plat_ingr values(null,4,(select id_Ingr from ingredient where ingredient = 'Gingembre'),60);

insert into plat_ingr values(null,5,(select id_Ingr from ingredient where ingredient = 'Viande de poulet'),200);
insert into plat_ingr values(null,5,(select id_Ingr from ingredient where ingredient = 'Laitue'),150);
insert into plat_ingr values(null,5,(select id_Ingr from ingredient where ingredient = 'Oigon'),50);
insert into plat_ingr values(null,5,(select id_Ingr from ingredient where ingredient = 'Ail'),30);
insert into plat_ingr values(null,5,(select id_Ingr from ingredient where ingredient = 'Sel'),25);

insert into sport values(null,'Push-Up',10,null,-10);
insert into sport values(null,'Push-Up',5,null,-2);
insert into sport values(null,'Push-Up',15,null,2);
insert into sport values(null,'Squat',5,null,-2);
insert into sport values(null,'Squat',10,null,2);
insert into sport values(null,'Jumping',3,30,-2);

create or replace view apportPlatParIngr as 
select
    p.plat as plat,
    (pi.quantite * i.apport) as apport,
    (pi.quantite * i.pu) as prix
from plat_ingr pi 
join ingredient i
on pi.id_Ingr = i.id_Ingr
join plat p 
on p.id_Plat = pi.id_Plat;

create or replace view apportPrixParPlat as
select
    plat,
    sum(apport) as apport,
    sum(prix) as prix
from apportPlatParIngr
group by plat;







