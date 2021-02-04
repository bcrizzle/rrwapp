create table `client`(
                         `clientid` int(10) not null auto_increment primary key ,
                         `clientname` varchar(50) not null,
                         `clientemail` varchar(75) not null,
                         `clientphone` int(10) not null,
                         `clientaddress` varchar(50) not null,
                         `clientcity` varchar(25) not null,
                         `clientprov` varchar(2) not null,
                         `clientpc` varchar(6) not null,
                         `ispromo` binary not null
);
create table `orders`(
                         `orderid` int(10) NOT NULL auto_increment primary key ,
                         `clientid` int(10) not null,
                         `orderstatus` int(2) not null,
                         `orderdate` timestamp not null,
                         `iscomplete` binary not null
);
create table `items`(
                        `itemid` int(10) not null auto_increment primary key ,
                        `itemname` varchar(50) not null,
                        `itemcost` double not null,
                        `itemprice` double not null,
                        `itemdesc` varchar(255) not null,
                        `itemcount` int not null,
                        `itemqr` varchar(255) not null
);
create table `orderstatus`(
                              `orderstatusid` int(2) not null auto_increment primary key ,
                              `orderstatusdesc` varchar(255) not null
);
create table `ordercomments`(
                                `commentid` int(10) not null auto_increment primary key ,
                                `comment` varchar(255) not null,
                                `orderid` int(10) not null,
                                `commentdate` timestamp not null,
                                `isvisible` binary not null,
                                `userid` int(10) not null
);
CREATE TABLE `user`(
                       `userid`    int(10)      NOT NULL auto_increment primary key,
                       `username`  varchar(15)  NOT NULL,
                       `useremail` varchar(50)  NOT NULL,
                       `userpass`  varchar(255) NOT NULL
);

