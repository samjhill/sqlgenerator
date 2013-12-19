create table users (
	username varchar(100) not null,
	password char(100) not null,
	userid int not null auto_increment,
	primary key(userid)
);
create table phonenumbers (
	phonenum char(10) not null,
	phoneid int not null auto_increment,
	userid int not null,
	index pn_user_index(userid),
	foreign key (userid) references users(userid ),
	primary key(phoneid)
);
