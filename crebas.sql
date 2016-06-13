/*==============================================================*/
/* Nom de SGBD :  Sybase SQL Anywhere 11                        */
/* Date de création :  02/06/2016 15:49:49                      */
/*==============================================================*/


if exists(select 1 from sys.sysforeignkey where role='FK_ARRIVER__ARRIVER_D_DATE') then
    alter table ARRIVER_DEPART_A
       delete foreign key FK_ARRIVER__ARRIVER_D_DATE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_ARRIVER__ARRIVER_D_HOTEL') then
    alter table ARRIVER_DEPART_A
       delete foreign key FK_ARRIVER__ARRIVER_D_HOTEL
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_ASSURANC_ASSURANCE_PRIX') then
    alter table ASSURANCE
       delete foreign key FK_ASSURANC_ASSURANCE_PRIX
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_AU_DEPAR_AU_DEPART_VOL') then
    alter table AU_DEPART_DE
       delete foreign key FK_AU_DEPAR_AU_DEPART_VOL
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_AU_DEPAR_AU_DEPART_VILLE') then
    alter table AU_DEPART_DE
       delete foreign key FK_AU_DEPAR_AU_DEPART_VILLE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_A_DESTIN_A_DESTINA_VILLE') then
    alter table A_DESTINATION_DE
       delete foreign key FK_A_DESTIN_A_DESTINA_VILLE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_A_DESTIN_A_DESTINA_VOL') then
    alter table A_DESTINATION_DE
       delete foreign key FK_A_DESTIN_A_DESTINA_VOL
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_A_PAYER_A_PAYER_CLIENT') then
    alter table A_PAYER
       delete foreign key FK_A_PAYER_A_PAYER_CLIENT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_A_PAYER_A_PAYER2_TYPE_VOY') then
    alter table A_PAYER
       delete foreign key FK_A_PAYER_A_PAYER2_TYPE_VOY
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_CIRCUIT_APPARTENI_TYPE_VOY') then
    alter table CIRCUIT
       delete foreign key FK_CIRCUIT_APPARTENI_TYPE_VOY
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_CIRCUIT__CIRCUIT_C_CIRCUIT') then
    alter table CIRCUIT_COUT
       delete foreign key FK_CIRCUIT__CIRCUIT_C_CIRCUIT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_CIRCUIT__CIRCUIT_C_PRIX') then
    alter table CIRCUIT_COUT
       delete foreign key FK_CIRCUIT__CIRCUIT_C_PRIX
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_CLIENT_ETRE3_TYPE_PER') then
    alter table CLIENT
       delete foreign key FK_CLIENT_ETRE3_TYPE_PER
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_CLIENT_HABITER_VILLE') then
    alter table CLIENT
       delete foreign key FK_CLIENT_HABITER_VILLE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_EMPLOYE_ETRE_TYPE_PER') then
    alter table EMPLOYE
       delete foreign key FK_EMPLOYE_ETRE_TYPE_PER
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_HOTEL_SE_TROUVE_VILLE') then
    alter table HOTEL
       delete foreign key FK_HOTEL_SE_TROUVE_VILLE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_HOTEL_CO_HOTEL_COU_PRIX') then
    alter table HOTEL_COUT
       delete foreign key FK_HOTEL_CO_HOTEL_COU_PRIX
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_HOTEL_CO_HOTEL_COU_HOTEL') then
    alter table HOTEL_COUT
       delete foreign key FK_HOTEL_CO_HOTEL_COU_HOTEL
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_IMAGE_AVOIR_TYPE_VOY') then
    alter table IMAGE
       delete foreign key FK_IMAGE_AVOIR_TYPE_VOY
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_IMAGE_AVOIR2_HOTEL') then
    alter table IMAGE
       delete foreign key FK_IMAGE_AVOIR2_HOTEL
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_OCCUPER_OCCUPER_EMPLOYE') then
    alter table OCCUPER
       delete foreign key FK_OCCUPER_OCCUPER_EMPLOYE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_OCCUPER_OCCUPER2_POSTE') then
    alter table OCCUPER
       delete foreign key FK_OCCUPER_OCCUPER2_POSTE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PAYS_SE_SITUER_CONTINEN') then
    alter table PAYS
       delete foreign key FK_PAYS_SE_SITUER_CONTINEN
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_POUR_DES_POUR_DEST_TYPE_VOY') then
    alter table POUR_DESTINATION
       delete foreign key FK_POUR_DES_POUR_DEST_TYPE_VOY
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_POUR_DES_POUR_DEST_VILLE') then
    alter table POUR_DESTINATION
       delete foreign key FK_POUR_DES_POUR_DEST_VILLE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PRIX_CORRESPON_DATE') then
    alter table PRIX
       delete foreign key FK_PRIX_CORRESPON_DATE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PRIX_OBTENIR2_REDUCTIO') then
    alter table PRIX
       delete foreign key FK_PRIX_OBTENIR2_REDUCTIO
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PROMOTIO_OBTENIR_PRIX') then
    alter table PROMOTION
       delete foreign key FK_PROMOTIO_OBTENIR_PRIX
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_REDUCTIO_OBTENIR3_PRIX') then
    alter table REDUCTION
       delete foreign key FK_REDUCTIO_OBTENIR3_PRIX
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_RESERVER_RESERVER_SEJOUR') then
    alter table RESERVER
       delete foreign key FK_RESERVER_RESERVER_SEJOUR
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_RESERVER_RESERVER2_HOTEL') then
    alter table RESERVER
       delete foreign key FK_RESERVER_RESERVER2_HOTEL
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_RESERVER_RESERVER3_VOL') then
    alter table RESERVER
       delete foreign key FK_RESERVER_RESERVER3_VOL
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_SEJOUR_APPARTENI_TYPE_VOY') then
    alter table SEJOUR
       delete foreign key FK_SEJOUR_APPARTENI_TYPE_VOY
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_SEJOUR_C_SEJOUR_CO_SEJOUR') then
    alter table SEJOUR_COUT
       delete foreign key FK_SEJOUR_C_SEJOUR_CO_SEJOUR
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_SEJOUR_C_SEJOUR_CO_PRIX') then
    alter table SEJOUR_COUT
       delete foreign key FK_SEJOUR_C_SEJOUR_CO_PRIX
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_TYPE_PER_ETRE2_EMPLOYE') then
    alter table TYPE_PERSONNE
       delete foreign key FK_TYPE_PER_ETRE2_EMPLOYE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_TYPE_PER_ETRE4_CLIENT') then
    alter table TYPE_PERSONNE
       delete foreign key FK_TYPE_PER_ETRE4_CLIENT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_TYPE_VOY_APPARTENI_SEJOUR') then
    alter table TYPE_VOYAGE
       delete foreign key FK_TYPE_VOY_APPARTENI_SEJOUR
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_TYPE_VOY_APPARTENI_CIRCUIT') then
    alter table TYPE_VOYAGE
       delete foreign key FK_TYPE_VOY_APPARTENI_CIRCUIT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_TYPE_VOY_A_INSERER_EMPLOYE') then
    alter table TYPE_VOYAGE
       delete foreign key FK_TYPE_VOY_A_INSERER_EMPLOYE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_VILLE_SE_SITUER_PAYS') then
    alter table VILLE
       delete foreign key FK_VILLE_SE_SITUER_PAYS
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_VOL_DECOLLE_A_DATE') then
    alter table VOL
       delete foreign key FK_VOL_DECOLLE_A_DATE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_VOL_COUT_VOL_COUT_VOL') then
    alter table VOL_COUT
       delete foreign key FK_VOL_COUT_VOL_COUT_VOL
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_VOL_COUT_VOL_COUT2_PRIX') then
    alter table VOL_COUT
       delete foreign key FK_VOL_COUT_VOL_COUT2_PRIX
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ARRIVER_DEPART_A2_FK'
     and t.table_name='ARRIVER_DEPART_A'
) then
   drop index ARRIVER_DEPART_A.ARRIVER_DEPART_A2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ARRIVER_DEPART_A_FK'
     and t.table_name='ARRIVER_DEPART_A'
) then
   drop index ARRIVER_DEPART_A.ARRIVER_DEPART_A_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ARRIVER_DEPART_A_PK'
     and t.table_name='ARRIVER_DEPART_A'
) then
   drop index ARRIVER_DEPART_A.ARRIVER_DEPART_A_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='ARRIVER_DEPART_A'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table ARRIVER_DEPART_A
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ASSURANCE_COUT_FK'
     and t.table_name='ASSURANCE'
) then
   drop index ASSURANCE.ASSURANCE_COUT_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ASSURANCE_PK'
     and t.table_name='ASSURANCE'
) then
   drop index ASSURANCE.ASSURANCE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='ASSURANCE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table ASSURANCE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='AU_DEPART_DE2_FK'
     and t.table_name='AU_DEPART_DE'
) then
   drop index AU_DEPART_DE.AU_DEPART_DE2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='AU_DEPART_DE_FK'
     and t.table_name='AU_DEPART_DE'
) then
   drop index AU_DEPART_DE.AU_DEPART_DE_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='AU_DEPART_DE_PK'
     and t.table_name='AU_DEPART_DE'
) then
   drop index AU_DEPART_DE.AU_DEPART_DE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='AU_DEPART_DE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table AU_DEPART_DE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='A_DESTINATION_DE2_FK'
     and t.table_name='A_DESTINATION_DE'
) then
   drop index A_DESTINATION_DE.A_DESTINATION_DE2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='A_DESTINATION_DE_FK'
     and t.table_name='A_DESTINATION_DE'
) then
   drop index A_DESTINATION_DE.A_DESTINATION_DE_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='A_DESTINATION_DE_PK'
     and t.table_name='A_DESTINATION_DE'
) then
   drop index A_DESTINATION_DE.A_DESTINATION_DE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='A_DESTINATION_DE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table A_DESTINATION_DE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='A_PAYER2_FK'
     and t.table_name='A_PAYER'
) then
   drop index A_PAYER.A_PAYER2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='A_PAYER_FK'
     and t.table_name='A_PAYER'
) then
   drop index A_PAYER.A_PAYER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='A_PAYER_PK'
     and t.table_name='A_PAYER'
) then
   drop index A_PAYER.A_PAYER_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='A_PAYER'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table A_PAYER
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='APPARTENIR3_FK'
     and t.table_name='CIRCUIT'
) then
   drop index CIRCUIT.APPARTENIR3_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='CIRCUIT_PK'
     and t.table_name='CIRCUIT'
) then
   drop index CIRCUIT.CIRCUIT_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='CIRCUIT'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table CIRCUIT
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='CIRCUIT_COUT2_FK'
     and t.table_name='CIRCUIT_COUT'
) then
   drop index CIRCUIT_COUT.CIRCUIT_COUT2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='CIRCUIT_COUT_FK'
     and t.table_name='CIRCUIT_COUT'
) then
   drop index CIRCUIT_COUT.CIRCUIT_COUT_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='CIRCUIT_COUT_PK'
     and t.table_name='CIRCUIT_COUT'
) then
   drop index CIRCUIT_COUT.CIRCUIT_COUT_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='CIRCUIT_COUT'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table CIRCUIT_COUT
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='HABITER_FK'
     and t.table_name='CLIENT'
) then
   drop index CLIENT.HABITER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ETRE3_FK'
     and t.table_name='CLIENT'
) then
   drop index CLIENT.ETRE3_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='CLIENT_PK'
     and t.table_name='CLIENT'
) then
   drop index CLIENT.CLIENT_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='CLIENT'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table CLIENT
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='CONTINENT_PK'
     and t.table_name='CONTINENT'
) then
   drop index CONTINENT.CONTINENT_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='CONTINENT'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table CONTINENT
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='DATE_PK'
     and t.table_name='DATE'
) then
   drop index "DATE".DATE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='DATE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table "DATE"
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ETRE_FK'
     and t.table_name='EMPLOYE'
) then
   drop index EMPLOYE.ETRE_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='EMPLOYE_PK'
     and t.table_name='EMPLOYE'
) then
   drop index EMPLOYE.EMPLOYE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='EMPLOYE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table EMPLOYE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SE_TROUVER_FK'
     and t.table_name='HOTEL'
) then
   drop index HOTEL.SE_TROUVER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='HOTEL_PK'
     and t.table_name='HOTEL'
) then
   drop index HOTEL.HOTEL_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='HOTEL'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table HOTEL
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='HOTEL_COUT2_FK'
     and t.table_name='HOTEL_COUT'
) then
   drop index HOTEL_COUT.HOTEL_COUT2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='HOTEL_COUT_FK'
     and t.table_name='HOTEL_COUT'
) then
   drop index HOTEL_COUT.HOTEL_COUT_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='HOTEL_COUT_PK'
     and t.table_name='HOTEL_COUT'
) then
   drop index HOTEL_COUT.HOTEL_COUT_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='HOTEL_COUT'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table HOTEL_COUT
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='AVOIR2_FK'
     and t.table_name='IMAGE'
) then
   drop index IMAGE.AVOIR2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='AVOIR_FK'
     and t.table_name='IMAGE'
) then
   drop index IMAGE.AVOIR_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='IMAGE_PK'
     and t.table_name='IMAGE'
) then
   drop index IMAGE.IMAGE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='IMAGE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table IMAGE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='OCCUPER2_FK'
     and t.table_name='OCCUPER'
) then
   drop index OCCUPER.OCCUPER2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='OCCUPER_FK'
     and t.table_name='OCCUPER'
) then
   drop index OCCUPER.OCCUPER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='OCCUPER_PK'
     and t.table_name='OCCUPER'
) then
   drop index OCCUPER.OCCUPER_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='OCCUPER'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table OCCUPER
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SE_SITUER2_FK'
     and t.table_name='PAYS'
) then
   drop index PAYS.SE_SITUER2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='PAYS_PK'
     and t.table_name='PAYS'
) then
   drop index PAYS.PAYS_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='PAYS'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table PAYS
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='POSTE_PK'
     and t.table_name='POSTE'
) then
   drop index POSTE.POSTE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='POSTE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table POSTE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='POUR_DESTINATION2_FK'
     and t.table_name='POUR_DESTINATION'
) then
   drop index POUR_DESTINATION.POUR_DESTINATION2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='POUR_DESTINATION_FK'
     and t.table_name='POUR_DESTINATION'
) then
   drop index POUR_DESTINATION.POUR_DESTINATION_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='POUR_DESTINATION_PK'
     and t.table_name='POUR_DESTINATION'
) then
   drop index POUR_DESTINATION.POUR_DESTINATION_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='POUR_DESTINATION'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table POUR_DESTINATION
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='OBTENIR2_FK'
     and t.table_name='PRIX'
) then
   drop index PRIX.OBTENIR2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='CORRESPONDRE_FK'
     and t.table_name='PRIX'
) then
   drop index PRIX.CORRESPONDRE_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='PRIX_PK'
     and t.table_name='PRIX'
) then
   drop index PRIX.PRIX_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='PRIX'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table PRIX
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='OBTENIR_FK'
     and t.table_name='PROMOTION'
) then
   drop index PROMOTION.OBTENIR_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='PROMOTION_PK'
     and t.table_name='PROMOTION'
) then
   drop index PROMOTION.PROMOTION_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='PROMOTION'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table PROMOTION
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='OBTENIR3_FK'
     and t.table_name='REDUCTION'
) then
   drop index REDUCTION.OBTENIR3_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='REDUCTION_PK'
     and t.table_name='REDUCTION'
) then
   drop index REDUCTION.REDUCTION_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='REDUCTION'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table REDUCTION
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='RESERVER3_FK'
     and t.table_name='RESERVER'
) then
   drop index RESERVER.RESERVER3_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='RESERVER2_FK'
     and t.table_name='RESERVER'
) then
   drop index RESERVER.RESERVER2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='RESERVER_FK'
     and t.table_name='RESERVER'
) then
   drop index RESERVER.RESERVER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='RESERVER_PK'
     and t.table_name='RESERVER'
) then
   drop index RESERVER.RESERVER_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='RESERVER'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table RESERVER
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SEJOUR_PK'
     and t.table_name='SEJOUR'
) then
   drop index SEJOUR.SEJOUR_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='SEJOUR'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table SEJOUR
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SEJOUR_COUT2_FK'
     and t.table_name='SEJOUR_COUT'
) then
   drop index SEJOUR_COUT.SEJOUR_COUT2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SEJOUR_COUT_FK'
     and t.table_name='SEJOUR_COUT'
) then
   drop index SEJOUR_COUT.SEJOUR_COUT_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SEJOUR_COUT_PK'
     and t.table_name='SEJOUR_COUT'
) then
   drop index SEJOUR_COUT.SEJOUR_COUT_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='SEJOUR_COUT'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table SEJOUR_COUT
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ETRE4_FK'
     and t.table_name='TYPE_PERSONNE'
) then
   drop index TYPE_PERSONNE.ETRE4_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ETRE2_FK'
     and t.table_name='TYPE_PERSONNE'
) then
   drop index TYPE_PERSONNE.ETRE2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='TYPE_PERSONNE_PK'
     and t.table_name='TYPE_PERSONNE'
) then
   drop index TYPE_PERSONNE.TYPE_PERSONNE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='TYPE_PERSONNE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table TYPE_PERSONNE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='APPARTENIR4_FK'
     and t.table_name='TYPE_VOYAGE'
) then
   drop index TYPE_VOYAGE.APPARTENIR4_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='A_INSERER_FK'
     and t.table_name='TYPE_VOYAGE'
) then
   drop index TYPE_VOYAGE.A_INSERER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='TYPE_SEJOUR_PK'
     and t.table_name='TYPE_VOYAGE'
) then
   drop index TYPE_VOYAGE.TYPE_SEJOUR_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='TYPE_VOYAGE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table TYPE_VOYAGE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SE_SITUER_FK'
     and t.table_name='VILLE'
) then
   drop index VILLE.SE_SITUER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='VILLE_PK'
     and t.table_name='VILLE'
) then
   drop index VILLE.VILLE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='VILLE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table VILLE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='DECOLLE_A_FK'
     and t.table_name='VOL'
) then
   drop index VOL.DECOLLE_A_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='VOL_PK'
     and t.table_name='VOL'
) then
   drop index VOL.VOL_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='VOL'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table VOL
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='VOL_COUT2_FK'
     and t.table_name='VOL_COUT'
) then
   drop index VOL_COUT.VOL_COUT2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='VOL_COUT_FK'
     and t.table_name='VOL_COUT'
) then
   drop index VOL_COUT.VOL_COUT_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='VOL_COUT_PK'
     and t.table_name='VOL_COUT'
) then
   drop index VOL_COUT.VOL_COUT_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='VOL_COUT'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table VOL_COUT
end if;

/*==============================================================*/
/* Table : ARRIVER_DEPART_A                                     */
/*==============================================================*/
create table ARRIVER_DEPART_A 
(
   ID_DATE              integer                        not null,
   ID_HOTEL             integer                        not null,
   constraint PK_ARRIVER_DEPART_A primary key clustered (ID_DATE, ID_HOTEL)
);

/*==============================================================*/
/* Index : ARRIVER_DEPART_A_PK                                  */
/*==============================================================*/
create unique clustered index ARRIVER_DEPART_A_PK on ARRIVER_DEPART_A (
ID_DATE ASC,
ID_HOTEL ASC
);

/*==============================================================*/
/* Index : ARRIVER_DEPART_A_FK                                  */
/*==============================================================*/
create index ARRIVER_DEPART_A_FK on ARRIVER_DEPART_A (
ID_DATE ASC
);

/*==============================================================*/
/* Index : ARRIVER_DEPART_A2_FK                                 */
/*==============================================================*/
create index ARRIVER_DEPART_A2_FK on ARRIVER_DEPART_A (
ID_HOTEL ASC
);

/*==============================================================*/
/* Table : ASSURANCE                                            */
/*==============================================================*/
create table ASSURANCE 
(
   CODE_ASSURANCE       long varchar                   not null,
   ID_PRIX              integer                        not null,
   DESCRIPTION_ASSURANCE long varchar                   null,
   constraint PK_ASSURANCE primary key (CODE_ASSURANCE)
);

/*==============================================================*/
/* Index : ASSURANCE_PK                                         */
/*==============================================================*/
create unique index ASSURANCE_PK on ASSURANCE (
CODE_ASSURANCE ASC
);

/*==============================================================*/
/* Index : ASSURANCE_COUT_FK                                    */
/*==============================================================*/
create index ASSURANCE_COUT_FK on ASSURANCE (
ID_PRIX ASC
);

/*==============================================================*/
/* Table : AU_DEPART_DE                                         */
/*==============================================================*/
create table AU_DEPART_DE 
(
   ID_VOL               integer                        not null,
   ID_VILLE             integer                        not null,
   VILLE_DEPART         long varchar                   null,
   constraint PK_AU_DEPART_DE primary key clustered (ID_VOL, ID_VILLE)
);

/*==============================================================*/
/* Index : AU_DEPART_DE_PK                                      */
/*==============================================================*/
create unique clustered index AU_DEPART_DE_PK on AU_DEPART_DE (
ID_VOL ASC,
ID_VILLE ASC
);

/*==============================================================*/
/* Index : AU_DEPART_DE_FK                                      */
/*==============================================================*/
create index AU_DEPART_DE_FK on AU_DEPART_DE (
ID_VOL ASC
);

/*==============================================================*/
/* Index : AU_DEPART_DE2_FK                                     */
/*==============================================================*/
create index AU_DEPART_DE2_FK on AU_DEPART_DE (
ID_VILLE ASC
);

/*==============================================================*/
/* Table : A_DESTINATION_DE                                     */
/*==============================================================*/
create table A_DESTINATION_DE 
(
   ID_VILLE             integer                        not null,
   ID_VOL               integer                        not null,
   VILLE_DESTINATION    long varchar                   null,
   constraint PK_A_DESTINATION_DE primary key clustered (ID_VILLE, ID_VOL)
);

/*==============================================================*/
/* Index : A_DESTINATION_DE_PK                                  */
/*==============================================================*/
create unique clustered index A_DESTINATION_DE_PK on A_DESTINATION_DE (
ID_VILLE ASC,
ID_VOL ASC
);

/*==============================================================*/
/* Index : A_DESTINATION_DE_FK                                  */
/*==============================================================*/
create index A_DESTINATION_DE_FK on A_DESTINATION_DE (
ID_VILLE ASC
);

/*==============================================================*/
/* Index : A_DESTINATION_DE2_FK                                 */
/*==============================================================*/
create index A_DESTINATION_DE2_FK on A_DESTINATION_DE (
ID_VOL ASC
);

/*==============================================================*/
/* Table : A_PAYER                                              */
/*==============================================================*/
create table A_PAYER 
(
   ID_CLIENT            integer                        not null,
   CODE_TYPE            integer                        not null,
   constraint PK_A_PAYER primary key clustered (ID_CLIENT, CODE_TYPE)
);

/*==============================================================*/
/* Index : A_PAYER_PK                                           */
/*==============================================================*/
create unique clustered index A_PAYER_PK on A_PAYER (
ID_CLIENT ASC,
CODE_TYPE ASC
);

/*==============================================================*/
/* Index : A_PAYER_FK                                           */
/*==============================================================*/
create index A_PAYER_FK on A_PAYER (
ID_CLIENT ASC
);

/*==============================================================*/
/* Index : A_PAYER2_FK                                          */
/*==============================================================*/
create index A_PAYER2_FK on A_PAYER (
CODE_TYPE ASC
);

/*==============================================================*/
/* Table : CIRCUIT                                              */
/*==============================================================*/
create table CIRCUIT 
(
   ID_CIRCUIT           integer                        not null,
   CODE_TYPE            integer                        not null,
   constraint PK_CIRCUIT primary key (ID_CIRCUIT)
);

/*==============================================================*/
/* Index : CIRCUIT_PK                                           */
/*==============================================================*/
create unique index CIRCUIT_PK on CIRCUIT (
ID_CIRCUIT ASC
);

/*==============================================================*/
/* Index : APPARTENIR3_FK                                       */
/*==============================================================*/
create index APPARTENIR3_FK on CIRCUIT (
CODE_TYPE ASC
);

/*==============================================================*/
/* Table : CIRCUIT_COUT                                         */
/*==============================================================*/
create table CIRCUIT_COUT 
(
   ID_CIRCUIT           integer                        not null,
   ID_PRIX              integer                        not null,
   constraint PK_CIRCUIT_COUT primary key clustered (ID_CIRCUIT, ID_PRIX)
);

/*==============================================================*/
/* Index : CIRCUIT_COUT_PK                                      */
/*==============================================================*/
create unique clustered index CIRCUIT_COUT_PK on CIRCUIT_COUT (
ID_CIRCUIT ASC,
ID_PRIX ASC
);

/*==============================================================*/
/* Index : CIRCUIT_COUT_FK                                      */
/*==============================================================*/
create index CIRCUIT_COUT_FK on CIRCUIT_COUT (
ID_CIRCUIT ASC
);

/*==============================================================*/
/* Index : CIRCUIT_COUT2_FK                                     */
/*==============================================================*/
create index CIRCUIT_COUT2_FK on CIRCUIT_COUT (
ID_PRIX ASC
);

/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT 
(
   ID_CLIENT            integer                        not null,
   ID_VILLE             integer                        not null,
   ID_TYPE_PERSONNE     integer                        not null,
   NUM_TEL              numeric                        not null,
   EMAIL                long varchar                   not null,
   ADRESSE              long varchar                   not null,
   CP                   integer                        not null,
   constraint PK_CLIENT primary key (ID_CLIENT)
);

/*==============================================================*/
/* Index : CLIENT_PK                                            */
/*==============================================================*/
create unique index CLIENT_PK on CLIENT (
ID_CLIENT ASC
);

/*==============================================================*/
/* Index : ETRE3_FK                                             */
/*==============================================================*/
create index ETRE3_FK on CLIENT (
ID_TYPE_PERSONNE ASC
);

/*==============================================================*/
/* Index : HABITER_FK                                           */
/*==============================================================*/
create index HABITER_FK on CLIENT (
ID_VILLE ASC
);

/*==============================================================*/
/* Table : CONTINENT                                            */
/*==============================================================*/
create table CONTINENT 
(
   CODE_CONTINENT       long varchar                   not null,
   NOM_CONTINENT        long varchar                   not null,
   constraint PK_CONTINENT primary key (CODE_CONTINENT)
);

/*==============================================================*/
/* Index : CONTINENT_PK                                         */
/*==============================================================*/
create unique index CONTINENT_PK on CONTINENT (
CODE_CONTINENT ASC
);

/*==============================================================*/
/* Table : "DATE"                                               */
/*==============================================================*/
create table "DATE" 
(
   ID_DATE              integer                        not null,
   DATE_DEPART          date                           not null,
   DATE_RETOUR          date                           not null,
   HEURE_DEPART         time                           not null,
   HEURE_RETOUR         time                           not null,
   constraint PK_DATE primary key (ID_DATE)
);

/*==============================================================*/
/* Index : DATE_PK                                              */
/*==============================================================*/
create unique index DATE_PK on "DATE" (
ID_DATE ASC
);

/*==============================================================*/
/* Table : EMPLOYE                                              */
/*==============================================================*/
create table EMPLOYE 
(
   ID_EMPLOYE           integer                        not null,
   ID_TYPE_PERSONNE     integer                        not null,
   "LOGIN"              long varchar                   not null,
   PWD                  long varchar                   not null,
   constraint PK_EMPLOYE primary key (ID_EMPLOYE)
);

/*==============================================================*/
/* Index : EMPLOYE_PK                                           */
/*==============================================================*/
create unique index EMPLOYE_PK on EMPLOYE (
ID_EMPLOYE ASC
);

/*==============================================================*/
/* Index : ETRE_FK                                              */
/*==============================================================*/
create index ETRE_FK on EMPLOYE (
ID_TYPE_PERSONNE ASC
);

/*==============================================================*/
/* Table : HOTEL                                                */
/*==============================================================*/
create table HOTEL 
(
   ID_HOTEL             integer                        not null,
   ID_VILLE             integer                        not null,
   NB_ETOILES           integer                        not null,
   NB_CHAMBRES          long varchar                   not null,
   NB_CHAMBRES_DISPO    integer                        not null,
   NB_NUIT              integer                        not null,
   DESCRIPTION_HOTEL    long varchar                   not null,
   constraint PK_HOTEL primary key (ID_HOTEL)
);

/*==============================================================*/
/* Index : HOTEL_PK                                             */
/*==============================================================*/
create unique index HOTEL_PK on HOTEL (
ID_HOTEL ASC
);

/*==============================================================*/
/* Index : SE_TROUVER_FK                                        */
/*==============================================================*/
create index SE_TROUVER_FK on HOTEL (
ID_VILLE ASC
);

/*==============================================================*/
/* Table : HOTEL_COUT                                           */
/*==============================================================*/
create table HOTEL_COUT 
(
   ID_PRIX              integer                        not null,
   ID_HOTEL             integer                        not null,
   constraint PK_HOTEL_COUT primary key clustered (ID_PRIX, ID_HOTEL)
);

/*==============================================================*/
/* Index : HOTEL_COUT_PK                                        */
/*==============================================================*/
create unique clustered index HOTEL_COUT_PK on HOTEL_COUT (
ID_PRIX ASC,
ID_HOTEL ASC
);

/*==============================================================*/
/* Index : HOTEL_COUT_FK                                        */
/*==============================================================*/
create index HOTEL_COUT_FK on HOTEL_COUT (
ID_PRIX ASC
);

/*==============================================================*/
/* Index : HOTEL_COUT2_FK                                       */
/*==============================================================*/
create index HOTEL_COUT2_FK on HOTEL_COUT (
ID_HOTEL ASC
);

/*==============================================================*/
/* Table : IMAGE                                                */
/*==============================================================*/
create table IMAGE 
(
   ID_IMAGE             integer                        not null,
   ID_HOTEL             integer                        not null,
   CODE_TYPE            integer                        not null,
   URL                  long varchar                   null,
   DESCRIPTION_IMAGE    long varchar                   null,
   constraint PK_IMAGE primary key (ID_IMAGE)
);

/*==============================================================*/
/* Index : IMAGE_PK                                             */
/*==============================================================*/
create unique index IMAGE_PK on IMAGE (
ID_IMAGE ASC
);

/*==============================================================*/
/* Index : AVOIR_FK                                             */
/*==============================================================*/
create index AVOIR_FK on IMAGE (
CODE_TYPE ASC
);

/*==============================================================*/
/* Index : AVOIR2_FK                                            */
/*==============================================================*/
create index AVOIR2_FK on IMAGE (
ID_HOTEL ASC
);

/*==============================================================*/
/* Table : OCCUPER                                              */
/*==============================================================*/
create table OCCUPER 
(
   ID_EMPLOYE           integer                        not null,
   ID_POSTE             integer                        not null,
   constraint PK_OCCUPER primary key clustered (ID_EMPLOYE, ID_POSTE)
);

/*==============================================================*/
/* Index : OCCUPER_PK                                           */
/*==============================================================*/
create unique clustered index OCCUPER_PK on OCCUPER (
ID_EMPLOYE ASC,
ID_POSTE ASC
);

/*==============================================================*/
/* Index : OCCUPER_FK                                           */
/*==============================================================*/
create index OCCUPER_FK on OCCUPER (
ID_EMPLOYE ASC
);

/*==============================================================*/
/* Index : OCCUPER2_FK                                          */
/*==============================================================*/
create index OCCUPER2_FK on OCCUPER (
ID_POSTE ASC
);

/*==============================================================*/
/* Table : PAYS                                                 */
/*==============================================================*/
create table PAYS 
(
   CODE_PAYS            long varchar                   not null,
   CODE_CONTINENT       long varchar                   not null,
   NOM_PAYS             long varchar                   not null,
   constraint PK_PAYS primary key (CODE_PAYS)
);

/*==============================================================*/
/* Index : PAYS_PK                                              */
/*==============================================================*/
create unique index PAYS_PK on PAYS (
CODE_PAYS ASC
);

/*==============================================================*/
/* Index : SE_SITUER2_FK                                        */
/*==============================================================*/
create index SE_SITUER2_FK on PAYS (
CODE_CONTINENT ASC
);

/*==============================================================*/
/* Table : POSTE                                                */
/*==============================================================*/
create table POSTE 
(
   ID_POSTE             integer                        not null,
   NOM_POSTE            long varchar                   null,
   constraint PK_POSTE primary key (ID_POSTE)
);

/*==============================================================*/
/* Index : POSTE_PK                                             */
/*==============================================================*/
create unique index POSTE_PK on POSTE (
ID_POSTE ASC
);

/*==============================================================*/
/* Table : POUR_DESTINATION                                     */
/*==============================================================*/
create table POUR_DESTINATION 
(
   CODE_TYPE            integer                        not null,
   ID_VILLE             integer                        not null,
   constraint PK_POUR_DESTINATION primary key clustered (CODE_TYPE, ID_VILLE)
);

/*==============================================================*/
/* Index : POUR_DESTINATION_PK                                  */
/*==============================================================*/
create unique clustered index POUR_DESTINATION_PK on POUR_DESTINATION (
CODE_TYPE ASC,
ID_VILLE ASC
);

/*==============================================================*/
/* Index : POUR_DESTINATION_FK                                  */
/*==============================================================*/
create index POUR_DESTINATION_FK on POUR_DESTINATION (
CODE_TYPE ASC
);

/*==============================================================*/
/* Index : POUR_DESTINATION2_FK                                 */
/*==============================================================*/
create index POUR_DESTINATION2_FK on POUR_DESTINATION (
ID_VILLE ASC
);

/*==============================================================*/
/* Table : PRIX                                                 */
/*==============================================================*/
create table PRIX 
(
   ID_PRIX              integer                        not null,
   ID_REDUCTION         integer                        null,
   ID_DATE              integer                        not null,
   PHT                  decimal                        not null,
   PTTC                 decimal                        not null,
   constraint PK_PRIX primary key (ID_PRIX)
);

/*==============================================================*/
/* Index : PRIX_PK                                              */
/*==============================================================*/
create unique index PRIX_PK on PRIX (
ID_PRIX ASC
);

/*==============================================================*/
/* Index : CORRESPONDRE_FK                                      */
/*==============================================================*/
create index CORRESPONDRE_FK on PRIX (
ID_DATE ASC
);

/*==============================================================*/
/* Index : OBTENIR2_FK                                          */
/*==============================================================*/
create index OBTENIR2_FK on PRIX (
ID_REDUCTION ASC
);

/*==============================================================*/
/* Table : PROMOTION                                            */
/*==============================================================*/
create table PROMOTION 
(
   ID_PROMOTION         integer                        not null,
   ID_PRIX              integer                        not null,
   CODE_PROMO           long varchar                   not null,
   DESCRIPTION_PROMO    long varchar                   null,
   constraint PK_PROMOTION primary key (ID_PROMOTION)
);

/*==============================================================*/
/* Index : PROMOTION_PK                                         */
/*==============================================================*/
create unique index PROMOTION_PK on PROMOTION (
ID_PROMOTION ASC
);

/*==============================================================*/
/* Index : OBTENIR_FK                                           */
/*==============================================================*/
create index OBTENIR_FK on PROMOTION (
ID_PRIX ASC
);

/*==============================================================*/
/* Table : REDUCTION                                            */
/*==============================================================*/
create table REDUCTION 
(
   ID_REDUCTION         integer                        not null,
   ID_PRIX              integer                        not null,
   PRIX_REDUCTION       decimal                        null,
   DESCRIPTION_REDUCTION long varchar                   not null,
   constraint PK_REDUCTION primary key (ID_REDUCTION)
);

/*==============================================================*/
/* Index : REDUCTION_PK                                         */
/*==============================================================*/
create unique index REDUCTION_PK on REDUCTION (
ID_REDUCTION ASC
);

/*==============================================================*/
/* Index : OBTENIR3_FK                                          */
/*==============================================================*/
create index OBTENIR3_FK on REDUCTION (
ID_PRIX ASC
);

/*==============================================================*/
/* Table : RESERVER                                             */
/*==============================================================*/
create table RESERVER 
(
   ID_SEJOUR            integer                        not null,
   ID_HOTEL             integer                        not null,
   ID_VOL               integer                        not null,
   constraint PK_RESERVER primary key clustered (ID_SEJOUR, ID_HOTEL, ID_VOL)
);

/*==============================================================*/
/* Index : RESERVER_PK                                          */
/*==============================================================*/
create unique clustered index RESERVER_PK on RESERVER (
ID_SEJOUR ASC,
ID_HOTEL ASC,
ID_VOL ASC
);

/*==============================================================*/
/* Index : RESERVER_FK                                          */
/*==============================================================*/
create index RESERVER_FK on RESERVER (
ID_SEJOUR ASC
);

/*==============================================================*/
/* Index : RESERVER2_FK                                         */
/*==============================================================*/
create index RESERVER2_FK on RESERVER (
ID_HOTEL ASC
);

/*==============================================================*/
/* Index : RESERVER3_FK                                         */
/*==============================================================*/
create index RESERVER3_FK on RESERVER (
ID_VOL ASC
);

/*==============================================================*/
/* Table : SEJOUR                                               */
/*==============================================================*/
create table SEJOUR 
(
   ID_SEJOUR            integer                        not null,
   CODE_TYPE            integer                        not null,
   constraint PK_SEJOUR primary key (ID_SEJOUR)
);

/*==============================================================*/
/* Index : SEJOUR_PK                                            */
/*==============================================================*/
create unique index SEJOUR_PK on SEJOUR (
ID_SEJOUR ASC
);

/*==============================================================*/
/* Table : SEJOUR_COUT                                          */
/*==============================================================*/
create table SEJOUR_COUT 
(
   ID_SEJOUR            integer                        not null,
   ID_PRIX              integer                        not null,
   constraint PK_SEJOUR_COUT primary key clustered (ID_SEJOUR, ID_PRIX)
);

/*==============================================================*/
/* Index : SEJOUR_COUT_PK                                       */
/*==============================================================*/
create unique clustered index SEJOUR_COUT_PK on SEJOUR_COUT (
ID_SEJOUR ASC,
ID_PRIX ASC
);

/*==============================================================*/
/* Index : SEJOUR_COUT_FK                                       */
/*==============================================================*/
create index SEJOUR_COUT_FK on SEJOUR_COUT (
ID_SEJOUR ASC
);

/*==============================================================*/
/* Index : SEJOUR_COUT2_FK                                      */
/*==============================================================*/
create index SEJOUR_COUT2_FK on SEJOUR_COUT (
ID_PRIX ASC
);

/*==============================================================*/
/* Table : TYPE_PERSONNE                                        */
/*==============================================================*/
create table TYPE_PERSONNE 
(
   ID_TYPE_PERSONNE     integer                        not null,
   ID_CLIENT            integer                        null,
   ID_EMPLOYE           integer                        null,
   NOM                  long varchar                   not null,
   PRENOM               long varchar                   not null,
   constraint PK_TYPE_PERSONNE primary key (ID_TYPE_PERSONNE)
);

/*==============================================================*/
/* Index : TYPE_PERSONNE_PK                                     */
/*==============================================================*/
create unique index TYPE_PERSONNE_PK on TYPE_PERSONNE (
ID_TYPE_PERSONNE ASC
);

/*==============================================================*/
/* Index : ETRE2_FK                                             */
/*==============================================================*/
create index ETRE2_FK on TYPE_PERSONNE (
ID_EMPLOYE ASC
);

/*==============================================================*/
/* Index : ETRE4_FK                                             */
/*==============================================================*/
create index ETRE4_FK on TYPE_PERSONNE (
ID_CLIENT ASC
);

/*==============================================================*/
/* Table : TYPE_VOYAGE                                          */
/*==============================================================*/
create table TYPE_VOYAGE 
(
   CODE_TYPE            integer                        not null,
   ID_CIRCUIT           integer                        null,
   ID_EMPLOYE           integer                        not null,
   ID_SEJOUR            integer                        null,
   TYPE_SEJOUR          long varchar                   not null,
   constraint PK_TYPE_VOYAGE primary key (CODE_TYPE)
);

/*==============================================================*/
/* Index : TYPE_SEJOUR_PK                                       */
/*==============================================================*/
create unique index TYPE_SEJOUR_PK on TYPE_VOYAGE (
CODE_TYPE ASC
);

/*==============================================================*/
/* Index : A_INSERER_FK                                         */
/*==============================================================*/
create index A_INSERER_FK on TYPE_VOYAGE (
ID_EMPLOYE ASC
);

/*==============================================================*/
/* Index : APPARTENIR4_FK                                       */
/*==============================================================*/
create index APPARTENIR4_FK on TYPE_VOYAGE (
ID_CIRCUIT ASC
);

/*==============================================================*/
/* Table : VILLE                                                */
/*==============================================================*/
create table VILLE 
(
   ID_VILLE             integer                        not null,
   CODE_PAYS            long varchar                   not null,
   VILLE                long varchar                   not null,
   constraint PK_VILLE primary key (ID_VILLE)
);

/*==============================================================*/
/* Index : VILLE_PK                                             */
/*==============================================================*/
create unique index VILLE_PK on VILLE (
ID_VILLE ASC
);

/*==============================================================*/
/* Index : SE_SITUER_FK                                         */
/*==============================================================*/
create index SE_SITUER_FK on VILLE (
CODE_PAYS ASC
);

/*==============================================================*/
/* Table : VOL                                                  */
/*==============================================================*/
create table VOL 
(
   ID_VOL               integer                        not null,
   ID_DATE              integer                        not null,
   NB_PLACE             integer                        not null,
   COMPAGNIE            long varchar                   not null,
   constraint PK_VOL primary key (ID_VOL)
);

/*==============================================================*/
/* Index : VOL_PK                                               */
/*==============================================================*/
create unique index VOL_PK on VOL (
ID_VOL ASC
);

/*==============================================================*/
/* Index : DECOLLE_A_FK                                         */
/*==============================================================*/
create index DECOLLE_A_FK on VOL (
ID_DATE ASC
);

/*==============================================================*/
/* Table : VOL_COUT                                             */
/*==============================================================*/
create table VOL_COUT 
(
   ID_VOL               integer                        not null,
   ID_PRIX              integer                        not null,
   constraint PK_VOL_COUT primary key clustered (ID_VOL, ID_PRIX)
);

/*==============================================================*/
/* Index : VOL_COUT_PK                                          */
/*==============================================================*/
create unique clustered index VOL_COUT_PK on VOL_COUT (
ID_VOL ASC,
ID_PRIX ASC
);

/*==============================================================*/
/* Index : VOL_COUT_FK                                          */
/*==============================================================*/
create index VOL_COUT_FK on VOL_COUT (
ID_VOL ASC
);

/*==============================================================*/
/* Index : VOL_COUT2_FK                                         */
/*==============================================================*/
create index VOL_COUT2_FK on VOL_COUT (
ID_PRIX ASC
);

alter table ARRIVER_DEPART_A
   add constraint FK_ARRIVER__ARRIVER_D_DATE foreign key (ID_DATE)
      references "DATE" (ID_DATE)
      on update restrict
      on delete restrict;

alter table ARRIVER_DEPART_A
   add constraint FK_ARRIVER__ARRIVER_D_HOTEL foreign key (ID_HOTEL)
      references HOTEL (ID_HOTEL)
      on update restrict
      on delete restrict;

alter table ASSURANCE
   add constraint FK_ASSURANC_ASSURANCE_PRIX foreign key (ID_PRIX)
      references PRIX (ID_PRIX)
      on update restrict
      on delete restrict;

alter table AU_DEPART_DE
   add constraint FK_AU_DEPAR_AU_DEPART_VOL foreign key (ID_VOL)
      references VOL (ID_VOL)
      on update restrict
      on delete restrict;

alter table AU_DEPART_DE
   add constraint FK_AU_DEPAR_AU_DEPART_VILLE foreign key (ID_VILLE)
      references VILLE (ID_VILLE)
      on update restrict
      on delete restrict;

alter table A_DESTINATION_DE
   add constraint FK_A_DESTIN_A_DESTINA_VILLE foreign key (ID_VILLE)
      references VILLE (ID_VILLE)
      on update restrict
      on delete restrict;

alter table A_DESTINATION_DE
   add constraint FK_A_DESTIN_A_DESTINA_VOL foreign key (ID_VOL)
      references VOL (ID_VOL)
      on update restrict
      on delete restrict;

alter table A_PAYER
   add constraint FK_A_PAYER_A_PAYER_CLIENT foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT)
      on update restrict
      on delete restrict;

alter table A_PAYER
   add constraint FK_A_PAYER_A_PAYER2_TYPE_VOY foreign key (CODE_TYPE)
      references TYPE_VOYAGE (CODE_TYPE)
      on update restrict
      on delete restrict;

alter table CIRCUIT
   add constraint FK_CIRCUIT_APPARTENI_TYPE_VOY foreign key (CODE_TYPE)
      references TYPE_VOYAGE (CODE_TYPE)
      on update restrict
      on delete restrict;

alter table CIRCUIT_COUT
   add constraint FK_CIRCUIT__CIRCUIT_C_CIRCUIT foreign key (ID_CIRCUIT)
      references CIRCUIT (ID_CIRCUIT)
      on update restrict
      on delete restrict;

alter table CIRCUIT_COUT
   add constraint FK_CIRCUIT__CIRCUIT_C_PRIX foreign key (ID_PRIX)
      references PRIX (ID_PRIX)
      on update restrict
      on delete restrict;

alter table CLIENT
   add constraint FK_CLIENT_ETRE3_TYPE_PER foreign key (ID_TYPE_PERSONNE)
      references TYPE_PERSONNE (ID_TYPE_PERSONNE)
      on update restrict
      on delete restrict;

alter table CLIENT
   add constraint FK_CLIENT_HABITER_VILLE foreign key (ID_VILLE)
      references VILLE (ID_VILLE)
      on update restrict
      on delete restrict;

alter table EMPLOYE
   add constraint FK_EMPLOYE_ETRE_TYPE_PER foreign key (ID_TYPE_PERSONNE)
      references TYPE_PERSONNE (ID_TYPE_PERSONNE)
      on update restrict
      on delete restrict;

alter table HOTEL
   add constraint FK_HOTEL_SE_TROUVE_VILLE foreign key (ID_VILLE)
      references VILLE (ID_VILLE)
      on update restrict
      on delete restrict;

alter table HOTEL_COUT
   add constraint FK_HOTEL_CO_HOTEL_COU_PRIX foreign key (ID_PRIX)
      references PRIX (ID_PRIX)
      on update restrict
      on delete restrict;

alter table HOTEL_COUT
   add constraint FK_HOTEL_CO_HOTEL_COU_HOTEL foreign key (ID_HOTEL)
      references HOTEL (ID_HOTEL)
      on update restrict
      on delete restrict;

alter table IMAGE
   add constraint FK_IMAGE_AVOIR_TYPE_VOY foreign key (CODE_TYPE)
      references TYPE_VOYAGE (CODE_TYPE)
      on update restrict
      on delete restrict;

alter table IMAGE
   add constraint FK_IMAGE_AVOIR2_HOTEL foreign key (ID_HOTEL)
      references HOTEL (ID_HOTEL)
      on update restrict
      on delete restrict;

alter table OCCUPER
   add constraint FK_OCCUPER_OCCUPER_EMPLOYE foreign key (ID_EMPLOYE)
      references EMPLOYE (ID_EMPLOYE)
      on update restrict
      on delete restrict;

alter table OCCUPER
   add constraint FK_OCCUPER_OCCUPER2_POSTE foreign key (ID_POSTE)
      references POSTE (ID_POSTE)
      on update restrict
      on delete restrict;

alter table PAYS
   add constraint FK_PAYS_SE_SITUER_CONTINEN foreign key (CODE_CONTINENT)
      references CONTINENT (CODE_CONTINENT)
      on update restrict
      on delete restrict;

alter table POUR_DESTINATION
   add constraint FK_POUR_DES_POUR_DEST_TYPE_VOY foreign key (CODE_TYPE)
      references TYPE_VOYAGE (CODE_TYPE)
      on update restrict
      on delete restrict;

alter table POUR_DESTINATION
   add constraint FK_POUR_DES_POUR_DEST_VILLE foreign key (ID_VILLE)
      references VILLE (ID_VILLE)
      on update restrict
      on delete restrict;

alter table PRIX
   add constraint FK_PRIX_CORRESPON_DATE foreign key (ID_DATE)
      references "DATE" (ID_DATE)
      on update restrict
      on delete restrict;

alter table PRIX
   add constraint FK_PRIX_OBTENIR2_REDUCTIO foreign key (ID_REDUCTION)
      references REDUCTION (ID_REDUCTION)
      on update restrict
      on delete restrict;

alter table PROMOTION
   add constraint FK_PROMOTIO_OBTENIR_PRIX foreign key (ID_PRIX)
      references PRIX (ID_PRIX)
      on update restrict
      on delete restrict;

alter table REDUCTION
   add constraint FK_REDUCTIO_OBTENIR3_PRIX foreign key (ID_PRIX)
      references PRIX (ID_PRIX)
      on update restrict
      on delete restrict;

alter table RESERVER
   add constraint FK_RESERVER_RESERVER_SEJOUR foreign key (ID_SEJOUR)
      references SEJOUR (ID_SEJOUR)
      on update restrict
      on delete restrict;

alter table RESERVER
   add constraint FK_RESERVER_RESERVER2_HOTEL foreign key (ID_HOTEL)
      references HOTEL (ID_HOTEL)
      on update restrict
      on delete restrict;

alter table RESERVER
   add constraint FK_RESERVER_RESERVER3_VOL foreign key (ID_VOL)
      references VOL (ID_VOL)
      on update restrict
      on delete restrict;

alter table SEJOUR
   add constraint FK_SEJOUR_APPARTENI_TYPE_VOY foreign key (CODE_TYPE)
      references TYPE_VOYAGE (CODE_TYPE)
      on update restrict
      on delete restrict;

alter table SEJOUR_COUT
   add constraint FK_SEJOUR_C_SEJOUR_CO_SEJOUR foreign key (ID_SEJOUR)
      references SEJOUR (ID_SEJOUR)
      on update restrict
      on delete restrict;

alter table SEJOUR_COUT
   add constraint FK_SEJOUR_C_SEJOUR_CO_PRIX foreign key (ID_PRIX)
      references PRIX (ID_PRIX)
      on update restrict
      on delete restrict;

alter table TYPE_PERSONNE
   add constraint FK_TYPE_PER_ETRE2_EMPLOYE foreign key (ID_EMPLOYE)
      references EMPLOYE (ID_EMPLOYE)
      on update restrict
      on delete restrict;

alter table TYPE_PERSONNE
   add constraint FK_TYPE_PER_ETRE4_CLIENT foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT)
      on update restrict
      on delete restrict;

alter table TYPE_VOYAGE
   add constraint FK_TYPE_VOY_APPARTENI_SEJOUR foreign key (ID_SEJOUR)
      references SEJOUR (ID_SEJOUR)
      on update restrict
      on delete restrict;

alter table TYPE_VOYAGE
   add constraint FK_TYPE_VOY_APPARTENI_CIRCUIT foreign key (ID_CIRCUIT)
      references CIRCUIT (ID_CIRCUIT)
      on update restrict
      on delete restrict;

alter table TYPE_VOYAGE
   add constraint FK_TYPE_VOY_A_INSERER_EMPLOYE foreign key (ID_EMPLOYE)
      references EMPLOYE (ID_EMPLOYE)
      on update restrict
      on delete restrict;

alter table VILLE
   add constraint FK_VILLE_SE_SITUER_PAYS foreign key (CODE_PAYS)
      references PAYS (CODE_PAYS)
      on update restrict
      on delete restrict;

alter table VOL
   add constraint FK_VOL_DECOLLE_A_DATE foreign key (ID_DATE)
      references "DATE" (ID_DATE)
      on update restrict
      on delete restrict;

alter table VOL_COUT
   add constraint FK_VOL_COUT_VOL_COUT_VOL foreign key (ID_VOL)
      references VOL (ID_VOL)
      on update restrict
      on delete restrict;

alter table VOL_COUT
   add constraint FK_VOL_COUT_VOL_COUT2_PRIX foreign key (ID_PRIX)
      references PRIX (ID_PRIX)
      on update restrict
      on delete restrict;

