create table employees
(
    Id                int auto_increment
        primary key,
    Username          varchar(128)                                                            not null,
    Email             varchar(255)                                                            not null,
    Password          varchar(255)                                                            not null,
    FirstName         varchar(255)                                                            not null,
    LastName          varchar(255)                                                            not null,
    DateOfBirth       date                                                                    not null,
    PermanentAddress  text                                                                    not null,
    PhoneNumber       varchar(20)                                                             not null,
    StoreOfEmployment enum ('store_1', 'store_2', 'store_3', 'store_4', 'store_5', 'store_6') not null,
    DateEmployed      date                                                                    not null,
    JobTitle          varchar(255)                                                            not null,
    constraint Email
        unique (Email),
    constraint Username
        unique (Username)
);

create table managers
(
    Id                int auto_increment
        primary key,
    Username          varchar(128)                                                            not null,
    Email             varchar(255)                                                            not null,
    Password          varchar(255)                                                            not null,
    FirstName         varchar(255)                                                            not null,
    LastName          varchar(255)                                                            not null,
    DateOfBirth       date                                                                    not null,
    PermanentAddress  text                                                                    not null,
    PhoneNumber       varchar(20)                                                             not null,
    DateEmployed      date                                                                    not null,
    Position          varchar(255)                                                            not null,
    StoreOfManagement enum ('store_1', 'store_2', 'store_3', 'store_4', 'store_5', 'store_6') not null,
    constraint Email
        unique (Email),
    constraint Username
        unique (Username)
);

create table memos
(
    Id                  int auto_increment
        primary key,
    FileName            text                                                                    not null,
    FileSize            int                                                                     not null,
    DateUploaded        datetime                                                                not null,
    Uploader            int                                                                     not null,
    StoreOfUploader     enum ('store_1', 'store_2', 'store_3', 'store_4', 'store_5', 'store_6') not null,
    PathToDoc           text                                                                    not null,
    PathToXML           text                                                                    not null,
    DownloadedByManager tinyint(1) default 0                                                    null,
    constraint memos_ibfk_1
        foreign key (Uploader) references employees (Id)
);

create index Uploader
    on memos (Uploader);


