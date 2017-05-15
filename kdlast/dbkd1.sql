drop database if exists dbkd1;
create database dbkd1;
use dbkd1;



CREATE TABLE IF NOT EXISTS `loginlist` (
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `jenis` int(11) NOT NULL DEFAULT '1',
  `disable` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginlist`
--

INSERT INTO `loginlist` (`user`, `pass`, `nama`, `jenis`, `disable`) VALUES
('guru', 'guru', 'guru', 1, 0),
('test', '098f6bcd4621d373cade4e832627b4f6', 'test', 0, 0);

create table tblPassword 
(
	id int primary key auto_increment,
	username varchar(250),
	password varchar(200),
	status int,
	tipe varchar(255)
);

create table tblUser 
(
	id int auto_increment primary key,
	kantorcabang varchar(255),
	unit varchar(255),
	namaguru varchar(255),
	matapelajaran varchar(255),
	kelas varchar(200),
	semester varchar(10)
);



create table tblDetailKantorCabang
(
	id int auto_increment primary key,
	detailkantorcabang varchar(255)
);


create table tblDetailUnit
(
	id int auto_increment primary key,
	detailunit varchar(255)
);

create table tblDetailNamaGuru
(
	id int auto_increment primary key,
	nip int,
	detailguru varchar(255)
);


create table tblUserSupervisor
(
		
	id int primary key auto_increment,
	nipguruspv int,
	guruspv varchar(255),
	username varchar(255),
	password varchar(255)
	
);

create table tblDetailMataPelajaran
(
	id int auto_increment primary key,
	detailmatapelajaran varchar(255)
);

create table tblInsertDataSpv
(
	id int auto_increment primary key,
	idspv int,
	guruspv varchar(255),
	tahun varchar(200),
	waktusekarang datetime,
	kantorcabang varchar(255),
	unit varchar(255),
	namaguru varchar(255),
	matapelajaran varchar(255),
	kelas varchar(200),
	semester varchar(10),
	scorebobot1 int,
	scorebobot2 int,
	scorebobot3 int,
	scorebobot4 int,
	scorebobot5 int,
	scorebobot6 int,
	scorebobot7 int,
	scorebobot8 int,
	scorebobot9 int,
	scorebobot10 int,
	scorebobot11 varchar(255),
	scorebobot12 varchar(255),
	scorebobot13 varchar(255),
	scorebobot14 varchar(255),
	scorebobot15 varchar(255),
	scorebobot16 varchar(255),
	scorebobot17 varchar(255)

);



create table tblEvaluasiKepsek
(
	id int auto_increment primary key,
	idspv int,
	guruspv varchar(255),
	tahun varchar(200),
	waktusekarang datetime,
	kantorcabang varchar(255),
	unit varchar(255),
	namaguru varchar(255),
	matapelajaran varchar(255),
	kelas varchar(200),
	semester varchar(10),
	scorebobot1 int,
	scorebobot2 int,
	scorebobot3 int,
	scorebobot4 int,
	scorebobot5 int,
	scorebobot6 int,
	scorebobot7 int,
	scorebobot8 int,
	scorebobot9 int,
	scorebobot10 int,
	scorebobot11 varchar(255),
	scorebobot12 varchar(255),
	scorebobot13 varchar(255),
	scorebobot14 varchar(255),
	scorebobot15 varchar(255),
	scorebobot16 varchar(255),
	scorebobot17 varchar(255),
	foreign key (idspv) references tblUserSupervisor (id),
	foreign key (idspv) references tblInsertDataSpv (id)
);



create table tblShowAll
(
	id int auto_increment primary key,
	idspv int,
	guruspv varchar(255),
	tahun varchar(200),
	waktusekarang datetime,
	kantorcabang varchar(255),
	unit varchar(255),
	namaguru varchar(255),
	matapelajaran varchar(255),
	kelas varchar(200),
	semester varchar(10),
	scorebobot1 int,
	scorebobot2 int,
	scorebobot3 int,
	scorebobot4 int,
	scorebobot5 int,
	scorebobot6 int,
	scorebobot7 int,
	scorebobot8 int,
	scorebobot9 int,
	scorebobot10 int,
	scorebobot11 varchar(255),
	scorebobot12 varchar(255),
	scorebobot13 varchar(255),
	scorebobot14 varchar(255),
	scorebobot15 varchar(255),
	scorebobot16 varchar(255),
	scorebobot17 varchar(255),
	foreign key (idspv) references tblUserSupervisor (id),
	foreign key (idspv) references tblInsertDataSpv (id)
);



