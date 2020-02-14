--php期末实训数据库
create database db_oa;
use db_oa;
create table sp_system(
id int null auto_increment,
light int not null,
background varchar(255) default null comment '背景图',
primary key(id)
) engine=myisam default charset=utf8; 

create table sp_dept(
id int not null auto_increment,
name varchar(50) not null,
pid int not null default 0,
sort int not null default 50,
remark varchar(255),
primary key(id)
) engine=myisam default charset=utf8; 

create table sp_user(
id int(11) not null auto_increment,
username varchar(40) not null,
password char(32) not null,
truename varchar(40) default null,
nickname varchar(50) default null,
dept_id int(11) default null,
sex varchar(10) not null,
birthday date not null,
tel varchar(11) not null,
email varchar(50) not null,
remark varchar(255) default null,
addtime int(11) default null,
role_id int(11) default 3,
primary key (id)
) engine=myisam default charset=utf8; 

create table szphp(
id int(11) not null auto_increment,
username varchar(10) not null,
password varchar(32) not null,
primary key (id)
)engine=myisam default charset=utf8; 

insert into sp_dept values(
'1','管理部','0','1','管理部门');
insert into sp_dept values(
'3','人力资源部','0','2','人力资源部门');
insert into sp_dept values(
'4','编辑部','0','3','编辑部门');
insert into sp_dept values(
'5','采购部','0','4','采购部门');

insert into sp_user values(
'1','QinHsiu','123456','Admin','管理员','1','男','2000-01-01','10000','22@qq.com','管理部门','2019-11-11','3');
insert into sp_user values(
'4','Admin','123456','Admin','管理员','1','男','2000-01-01','100002222','22222@qq.com','管理部门','2019-11-11','1');
insert into sp_user values(
'5','zs','123456','Admin','管理员','2','男','2000-01-01','1000123120','21231232@qq.com','销售部门','2019-11-11','1');
insert into sp_user values(
'2','zb','1234567','QinHsiu','销售人员','2','男','2000-05-04','1000000','223@qq.com','销售部门','2019-12-12','2');
insert into sp_user values(
'3','Qin','123456','admin','管理人员','1','男','2000-05-04','10000010','2234@qq.com','管理部门','2019-12-12','3');

create table sp_doc(
id int(11) not null auto_increment,
title varchar(50) not null comment '公文标题',
filepath varchar(255) default null comment '附件存储路径',
filename varchar(255) default null comment '附件原名',
hasfile smallint(1) default '0' comment '是否存在附件',
content text comment '公文内容',
author varchar(40) not null comment '作者',
addtime int(11) default null comment '添加时间',
primary key (id)
)engine=myisam auto_increment=1 default charset=utf8;

create table sp_email(
id int(11) not null auto_increment,
from_id int(11) not null comment '发送者ID',
to_id int(11) not null comment '接收者ID',
title varchar(50) not null comment '标题',
file varchar(255) default null comment '文件',
hasfile smallint(1) default '0' comment '是否有附件',
filename varchar(255) default null comment '文件原始名',
content text comment '内容',
addtime int(11) default null comment '添加时间',
isread smallint(1) default '0' comment '是否已读',
primary key (id)
)engine=myisam auto_increment=1 default charset=utf8;

create table sp_knowledge(
id int(11) not null auto_increment,
title varchar(50) not null comment '标题',
thumb varchar(255) default null comment '缩略图',
picture varchar(255) default null comment '图片',
description varchar(255) default null comment '描述',
content text comment '内容',
author varchar(40) not null comment '作者',
addtime int(11) default null comment '添加时间', 
primary key (id)
)engine=myisam auto_increment=1 default charset=utf8;