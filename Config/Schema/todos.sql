create table todos (
	id int unsigned not null auto_increment primary key,
	list varchar(100) not null default '' comment "List name that todo belongs to",
	note text not null default '' comment "Details on the todo",
	completed tinyint(1) not null default 0 comment "Is todo completed?",
	created datetime not null default '0000-00-00 00:00:00',
	modified datetime not null default '0000-00-00 00:00:00',
	key list (list),
	key completed (completed),
	fulltext note (note)
) engine=myisam default charset=latin1 comment="To do list plugin";
