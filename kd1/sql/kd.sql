create database dbkd;
use dbkd;

create table tblPertanyaan(
no int,
subno int,
sub pertanyaan varchar(255),
pertanyaan varchar(255)
);


create table tblNip(
nip int primary key auto_increment,
namaguru varchar(255),
mapel varchar(255)
);

create table tblSimpan1(
no int,
score int,
subscore int,
keterangan varchar(255),
foreign key (no) references tblNip(no)
);
