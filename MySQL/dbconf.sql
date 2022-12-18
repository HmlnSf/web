CREATE DATABASE web;

CREATE TABLE web.ad
(
    ID int not null auto_increment unique,
    EMAIL varchar(255) not null,
    TITLE varchar(255) not null,
    DESCRIPTION varchar(255) not null,
    CATEGORY varchar(255) not null,
    CREATED datetime not null default NOW(),
    constraint AD_PK
        primary key (ID)
);