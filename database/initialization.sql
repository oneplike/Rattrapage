create table cities
(
    idCity      int auto_increment
        primary key,
    temperature float                            null,
    city_name   text collate utf8mb4_bin         null,
    degree_min  float                            null,
    degree_max  float                            null,
    weather     varchar(255) collate utf8mb4_bin null comment '-- nuageux, pluvieux, ensoleiller --',
    icon        varchar(255)                     null
)
    charset = latin1;

create table deduct
(
    idDeduct  int auto_increment
        primary key,
    fkProduct int null,
    fkOffer   int null
);

create index deduct_offers_idOffer_fk
    on deduct (fkOffer);

create index deduct_products_idProduct_fk
    on deduct (fkProduct);

create table hold
(
    idHold  int auto_increment
        primary key,
    fkOffer int null,
    fkRide  int null
);

create index hold_offers_idOffer_fk
    on hold (fkOffer);

create index hold_rides_idRide_fk
    on hold (fkRide);

create table lease
(
    idLease   int auto_increment
        primary key,
    fkUser    int null,
    fkScooter int null
);

create index lease_scooters_idScooter_fk
    on lease (fkScooter);

create index lease_users_idUser_fk
    on lease (fkUser);

create table make
(
    idMake  int auto_increment
        primary key,
    fkUser  int null,
    fkOffer int null
);

create index make_offers_idOffer_fk
    on make (fkOffer);

create index make_users_idUser_fk
    on make (fkUser);

create table offers
(
    idOffer     int auto_increment
        primary key,
    name        varchar(52) null,
    percent     float       null,
    start       date        null,
    end         date        null,
    description text        null,
    tag         int         null
);

create table products
(
    idProduct     int auto_increment
        primary key,
    name          varchar(52)  null,
    description   text         null,
    price_product float        null comment '-- Prix produit calcule en php avec la tva --',
    category      varchar(52)  null,
    picture       varchar(255) null comment '-- Chemin vers l''image --',
    quantity      int          null,
    price_order   float        null comment '-- Prix de la commande calcule en php avec la tva --',
    vat           float        null comment '-- TAX --',
    tag           varchar(255) not null,
    weight        int          null
);

create table purchase
(
    idPurchase int auto_increment
        primary key,
    fkProduct  int null,
    fkUser     int null
);

create index purchase_products_idProduct_fk
    on purchase (fkProduct);

create index purchase_users_idUser_fk
    on purchase (fkUser);

create table rides
(
    idRide         int auto_increment
        primary key,
    status         tinyint(1)   null,
    start          text         null comment '-- Localisation du depart de la course --',
    arrive         text         null comment '-- Localisation de l''arrive de la course --',
    distance       float        null comment '-- Distance parcourus --',
    date           date         null,
    price          float        null,
    time           time         null comment '-- Duree de la course --',
    invoice_path   varchar(255) null comment '-- Chemin de la facture --',
    number_scooter int          null
);

create index rides_scooters_number_fk
    on rides (number_scooter);

create table scooters
(
    idScooter   int auto_increment
        primary key,
    number      int             null,
    `condition` int   default 1 null,
    km          float default 0 null,
    location    text            null,
    status      tinyint(1)      null,
    workzone    varchar(52)     null
);

create table users
(
    idUser      int auto_increment
        primary key,
    siret       varchar(20)   null,
    firstname   varchar(52)   null,
    lastname    varchar(52)   null,
    phone       varchar(10)   null,
    email       varchar(90)   null,
    passwd      varchar(255)  null,
    status_user varchar(52)   null comment '-- Clients --Admin --Partenaire -- Collecteur',
    address     varchar(52)   null,
    points      int           null,
    wallet      varchar(10)   null,
    birthdate   date          null,
    zipcode     varchar(10)   null,
    state       int default 2 null,
    ` check`    int           null,
    token       char(32)      null
)
    charset = latin1;

create table orders
(
    idOrder         int auto_increment
        primary key,
    Date            date  not null,
    status          int   null,
    date_expedition date  null,
    price_order     float null,
    constraint orders_products_idProduct_fk
        foreign key (idOrder) references products (idProduct),
    constraint orders_users_idUser_fk
        foreign key (idOrder) references users (idUser)
);

create index users_cities_fk
    on users (zipcode);

