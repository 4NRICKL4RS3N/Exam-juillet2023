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

create table credit 
(
    id_Credit int auto_increment primary key,
    valeur double
);

create table gestion_credit
(
    id_GC int auto_increment primary key,
    id_User int,
    id_Credit int,
    etat int,
    foreign key (id_User) references user (id_User),
    foreign key (id_Credit) references credit (id_Credit)
);

create table cash
(
    id_Cash int auto_increment primary key,
    id_User int,
    compte double,
    foreign key (id_User) references user (id_User) 
);

insert into user values(null,'Gasy','gasy@gmail.com','1234',1);
insert into user values(null,'Nandraina','nandraina@gmail.com','1234',1);
insert into user values(null,'Anrick','anrick@gmail.com','1234',1);
insert into user values(null,'Paul','paul@gmail.com','0000',0);

insert into credit values(null,5000);
insert into credit values(null,6000);
insert into credit values(null,7000);
insert into credit values(null,8000);
insert into credit values(null,9000);
insert into credit values(null,10000);
insert into credit values(null,12000);
insert into credit values(null,14000);
insert into credit values(null,16000);
insert into credit values(null,20000); 

insert into plat values(null,'Soupe tomate');
insert into plat values(null,'Salade de pate');
insert into plat values(null,'Steak salade');
insert into plat values(null,'Jus de menthe');
insert into plat values(null,'Viande de poulet');

insert into ingredient values(null,'Carotte',0.2,500,'g');
insert into ingredient values(null,'Laitue',-0.3,200,'g');
insert into ingredient values(null,'Menthe',-0.5,200,'g');
insert into ingredient values(null,'Patate douce',0.3,400,'g');
insert into ingredient values(null,'Haricot vert',-0.2,200,'g');
insert into ingredient values(null,'Ail',-0.2,100,'g');
insert into ingredient values(null,'Oigon',-0.2,100,'g');
insert into ingredient values(null,'Mais doux',0.2,200,'g');
insert into ingredient values(null,'Vinaigre',-0.8,100,'g');
insert into ingredient values(null,'Gingembre',-0.2,100,'g');
insert into ingredient values(null,'Sel',0.2,200,'g');
insert into ingredient values(null,'Sucre',0.3,200,'g');
insert into ingredient values(null,'Pain',0.8,200,'g');
insert into ingredient values(null,'Pate',0.6,300,'g');
insert into ingredient values(null,'Lait',0.2,200,'L');
insert into ingredient values(null,'Poivron',0.2,200,'g');
insert into ingredient values(null,'Ciboulette',-0.3,200,'g');
insert into ingredient values(null,'Persil',0.3,100,'g');
insert into ingredient values(null,'Aubergine',-0.4,300,'g');
insert into ingredient values(null,'Tomate',-0.3,200,'g');
insert into ingredient values(null,'Poireau',-0.2,200,'g');
insert into ingredient values(null,'Pomme',-0.5,200,'g');
insert into ingredient values(null,'Concombre',-0.3,200,'g');
insert into ingredient values(null,'Cornichon',-0.2,200,'g');
insert into ingredient values(null,'Viande de zebu',0.5,500,'g');
insert into ingredient values(null,'Viande de porc',0.4,600,'g');
insert into ingredient values(null,'Viande de poulet',0.2,400,'g');
insert into ingredient values(null,'Viande hachée',0.1,200,'g');
insert into ingredient values(null,'Steak',0.4,600,'g');
insert into ingredient values(null,'Eau',0.0,100,'g');

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
    p.id_plat as id_plat,
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
    id_plat,
    plat,
    sum(apport) as apport,
    sum(prix) as prix
from apportPlatParIngr
group by plat;