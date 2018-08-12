create table profile(idno int,username varchar(10),password varchar(10),pos varchar(10));
insert into profile values(1,'admin','admin','admin');
insert into profile values(2,'admin1','admin','admin');
insert into profile values(101,'tchr1','tchr1','tchr');
insert into profile values(102,'tchr2','tchr2','tchr');
insert into profile values(103,'tchr3','tchr3','tchr');
insert into profile values(104,'tchr4','tchr4','tchr');
insert into profile values(1001,'stu1','stu1','stu');
insert into profile values(1002,'stu2','stu2','stu');
insert into profile values(1003,'stu3','stu3','stu');
insert into profile values(1004,'stu4','stu4','stu');

create table teacher(idno int,username varchar(10),firstname varchar(10),lastname varchar(10),dept varchar(3),joindate date,quali varchar(10),area varchar(10));
insert into teacher values(101,'tchr1','anand','h','cse','2014-01-10','m-tech','associatepro');
insert into teacher values(102,'tchr2','tripti','s','cse','2016-10-10','m-tech','associatepro');
insert into teacher values(103,'tchr3','girish','balakrishnan','cse','2013-06-10','m-tech','assistantpro');
insert into teacher values(104,'tchr4','sanju','v','cse','2015-04-10','m-tech','associatepro');

create table hod(idno int,username varchar(10),dept varchar(3));
insert into hod values(102,'tchr2','cse');

create table student(idno int,username varchar(10),firstname varchar(10),lastname varchar(10),dept varchar(3),sem varchar(3),addr varchar(20));
insert into student values(1001,'stu1','akshay','babu','cse','s5','add1');
insert into student values(1002,'stu2','amal','anand','cse','s5','add2');
insert into student values(1003,'stu3','aswin','av','cse','s5','add3');
insert into student values(1004,'stu4','sreejith','ag','cse','s5','add4');

create table inta(idno int,username varchar(10),m1 int,m2 int,m3 int,m4 int,m5 int,m6 int);
insert into inta values(1001,'stu1',16,15,17,18,19,16);
insert into inta values(1002,'stu2',15,17,16,17,15,19);
insert into inta values(1003,'stu3',19,17,19,19,20,18);
insert into inta values(1004,'stu4',17,17,15,18,16,17);

create table intb(idno int,username varchar(10),m1 int,m2 int,m3 int,m4 int,m5 int,m6 int);
insert into intb values(1001,'stu1',15,17,16,17,15,19);
insert into intb values(1002,'stu2',17,17,15,18,16,17);
insert into intb values(1003,'stu3',20,20,19,19,20,18);
insert into intb values(1004,'stu4',16,17,15,18,16,17);

create table intf(idno int,username varchar(10),m1 int,m2 int,m3 int,m4 int,m5 int,m6 int,m7 int,m8 int);

create table event(eid int,ename varchar(20),edate date);
insert into event values(1,'christmas','2017-12-25');

create table advisor(idno int,username varchar(10),sem varchar(3),dept varchar(3),phoneno varchar(10));
insert into advisor values(101,'tchr1','s5','cse',9998080777);

create table atten(idno int,username varchar(10),atten varchar(3));
insert into atten values(1001,'stu1',78);
insert into atten values(1002,'stu2',88);
insert into atten values(1003,'stu3',90);
insert into atten values(1004,'stu4',85);


