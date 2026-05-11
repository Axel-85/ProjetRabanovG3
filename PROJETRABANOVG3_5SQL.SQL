drop table if exists societe;

drop table if exists client;

drop table if exists ressources_materiels;

drop table if exists reservation;

drop table if exists contenir_materiel;

# -----------------------------------------------------------------------------
#       table : societe
# -----------------------------------------------------------------------------

create table if not exists societe
 (
   numerosiret char(32) not null  ,
   nom char(32) null  ,
   ville char(32) null  ,
   rue char(32) null  ,
   codepostal integer null  ,
   secteur char(32) null  
   , primary key (numerosiret) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : client
# -----------------------------------------------------------------------------

create table if not exists client
 (
   id char(32) not null  ,
   id_effectuer char(32) not null  ,
   numerosiret char(32) null  ,
   nom char(32) null  ,
   prenom char(32) null  ,
   mail char(32) null  ,
   telephone integer null  ,
   identifiant_wifi char(32) null  ,
   numerocb integer null  ,
   code_securite integer null  ,
   date_expiration date null  
   , primary key (id) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : ressources_materiels
# -----------------------------------------------------------------------------

create table if not exists ressources_materiels
 (
   id char(32) not null  ,
   libelle char(32) null  ,
   prix integer null  
   , primary key (id) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : reservation
# -----------------------------------------------------------------------------

create table if not exists reservation
 (
   id char(32) not null  ,
   date_debut datetime null  ,
   date_fin datetime null  ,
   mdpwifi char(32) null  
   , primary key (id) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : contenir_materiel
# -----------------------------------------------------------------------------

create table if not exists contenir_materiel
 (
   id char(32) not null  ,
   id_1 char(32) not null  
   , primary key (id,id_1) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       creation des references de table
# -----------------------------------------------------------------------------


alter table client 
  add foreign key fk_client_reservation (id_effectuer)
      references reservation (id) ;


alter table client 
  add foreign key fk_client_societe (numerosiret)
      references societe (numerosiret) ;


alter table contenir_materiel 
  add foreign key fk_contenir_materiel_reservation (id)
      references reservation (id) ;


alter table contenir_materiel 
  add foreign key fk_contenir_materiel_ressources_materiels (id_1)
      references ressources_materiels (id) ;

