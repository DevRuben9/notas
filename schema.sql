create table notes(
	id int not null auto_increment primary key,
	uuid varchar(250) not null unique,
	title varchar(250) not null,
	content text not null,
	updated date not null
);