mysql -hlocalhost -uroot -p;

use demo;

-- 创建表
create table tp_category(
id int not null primary key auto_increment,
name varchar(10) not null comment '分类名',
content text comment '商品描述',
cid int not null default 0 comment '商品分类的父类id,0表示顶级'
)charset utf8 engine=innodb;

-- 插入数据
insert into tp_category values
(null,'手机',default,default),
(null,'双模手机',default,1),
(null,'3G手机',default,1),
(null,'cdma手机',default,1),
(null,'手机配件',default,default),
(null,'电池',default,5),
(null,'充电器',default,5),
(null,'耳机',default,5),
(null,'beats耳机',default,8),
(null,'电视',default,default),
(null,'液晶电视',default,10),
(null,'等离子电视',default,10),
(null,'平板电视',default,10),
(null,'手机外壳',default,5);

