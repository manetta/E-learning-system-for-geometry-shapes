drop DATABASE if exists SVGshapes;
create DATABASE SVGshapes character set utf8 collate utf8_bin;
use SVGshapes;


create table `users`
(
	`username` char(20) not null default '',
	`name` char(20) not null default '',
	`surname` char(20) not null default '',
	`password` char(40) not null default '',
	`email` char(25) not null default '',
	`user_type` enum('S','T','A') not null,
	`school` char(40) not null default '',
	`school_level` char(2) not null default '',
	`level_section` char(1) not null default '',
	`modified` timestamp default current_timestamp,
	UNIQUE(`username`),
	PRIMARY KEY(`username`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table `telephone`
(
	`tel_id` int auto_increment,
	`home` char(10) not null,
	`mobile` char(10) not null,
	`user_id` char(20) not null,
	primary key(tel_id),
	constraint phones_constr
	foreign key(user_id) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table `rect`
(
	`idr` int auto_increment,
	`user_idr` char(20) not null,
	`area` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(idr),
	constraint rect_constr
	foreign key(user_idr) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


create table `straight`
(
	`ids` int auto_increment,
	`user_idr` char(20) not null,
	`mikos` enum('true','false') not null default 'false',
	primary key(ids),
	constraint straight_constr
	foreign key(user_idr) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table `rect1`
(
	`idr1` int auto_increment,
	`username` char(20) not null,
	`area` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(idr1),
	constraint rect1_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table `circle`
(
	`idc` int auto_increment,
	`username` char(20) not null,
	`diameter` enum('true','false') not null default 'false',
	`area` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(idc),
	constraint circle_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


create table `ellipse`
(
	`ide` int auto_increment,
	`username` char(20) not null,
	`area` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(ide),
	constraint ellipse_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


create table `isopleuro`
(
	`idispl` int auto_increment,
	`username` char(20) not null,
	`height` enum('true','false') not null default 'false',
	`area` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(idispl),
	constraint isopleuro_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table `isoskeles`
(
	`idiskl` int auto_increment,
	`username` char(20) not null,
	`angle` enum('true','false') not null default 'false',
	`base` enum('true','false') not null default 'false',
	`height` enum('true','false') not null default 'false',
	`area` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(idiskl),
	constraint isoskeles_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


create table `skalino`
(
	`idska` int auto_increment,
	`username` char(20) not null,
	`ab` enum('true','false') not null default 'false',
	`bc` enum('true','false') not null default 'false',
	`ca` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(idska),
	constraint skalino_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


create table `orthogwnio`
(
	`idorth` int auto_increment,
	`username` char(20) not null,
	`ypot` enum('true','false') not null default 'false',
	`area` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(idorth),
	constraint orthogenio_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table `orthisosk`
(
	`idorthiso` int auto_increment,
	`username` char(20) not null,
	`ypot` enum('true','false') not null default 'false',
	`area` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(idorthiso),
	constraint orthogwnioisoskeles_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


create table `rhombus`
(
	`idrhobus` int auto_increment,
	`username` char(20) not null,
	`area` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(idrhobus),
	constraint rhombus_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;





create table `rect11`
(
	`idrectpl` int auto_increment,
	`username` char(20) not null,
	`area` enum('true','false') not null default 'false',
	`perimeter` enum('true','false') not null default 'false',
	primary key(idrectpl),
	constraint rect11_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table `trapezio`
(
	`idtrapezio` int auto_increment,
	`username` char(20) not null,
	`area` enum('true','false') not null default 'false',
	primary key(idtrapezio),
	constraint trapezio_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


create table `otrapezio`
(
	`idotrapezio` int auto_increment,
	`username` char(20) not null,
	`area` enum('true','false') not null default 'false',
	primary key(idotrapezio),
	constraint otrapezio_constr
	foreign key(username) references users(username)
	on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


GRANT SELECT,INSERT,UPDATE,DELETE
ON SVGshapes.*
TO dbauthor@localhost identified by 'password';

flush privileges;