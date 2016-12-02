<?php

include './connect.php';
$database="outsource";
$query="CREATE DATABASE IF NOT EXISTS $database";
if (mysqli_query($link, $query)){
    echo "<br>Database Created Successfully";
}
else
{
    echo "<br>Error : " . mysqli_connect_errno() . " : " . mysqli_connect_error();
}

$link= mysqli_connect($host, $user, $password, $database);
$table="member";
$query="CREATE TABLE IF NOT EXISTS $table(mid int(11) primary key not null auto_increment, mname varchar(100), maddress varchar(100), memail varchar(100))";
if (mysqli_query($link, $query)){
    echo "<br>Table $table Created Successfully";
}
else
{
    echo "<br>Error while creating $table : " . mysqli_errno($link) . " : " . mysqli_error($link);
}

$table="service";
$query="CREATE TABLE IF NOT EXISTS $table(sid int(11) primary key not null auto_increment, sname varchar(100), charges int(11))";
if (mysqli_query($link, $query)){
    echo "<br>Table $table Created Successfully";
}
else
{
    echo "<br>Error while creating $table : " . mysqli_errno($link) . " : " . mysqli_error($link);
}

$table="serviceprovider";
$query="CREATE TABLE IF NOT EXISTS $table(spid int(11) primary key not null auto_increment, spname varchar(100), spaddress varchar(100), spphone varchar(100), spcnic varchar(100), sid int(11), FOREIGN KEY(sid) REFERENCES service(sid))";
if (mysqli_query($link, $query)){
    echo "<br>Table $table Created Successfully";
}
else
{
    echo "<br>Error while creating $table : " . mysqli_errno($link) . " : " . mysqli_error($link);
}

$table="request";
$query="CREATE TABLE IF NOT EXISTS $table(rid int(11) primary key not null auto_increment, rdate date, mid int(11), sid int(11), FOREIGN KEY (mid) REFERENCES member(mid), FOREIGN KEY(sid) REFERENCES service(sid))";
if (mysqli_query($link, $query)){
    echo "<br>Table $table Created Successfully";
}
else
{
    echo "<br>Error while creating $table : " . mysqli_errno($link) . " : " . mysqli_error($link);
}

$table="offer";
$query="CREATE TABLE IF NOT EXISTS $table(oid int(11) primary key not null auto_increment, odate date, response varchar(100), allocation int(11), servicecharges int(11), spid int(11), rid int(11), FOREIGN KEY(spid) REFERENCES serviceprovider(spid), FOREIGN KEY(rid) REFERENCES request(rid))";
if (mysqli_query($link, $query)){
    echo "<br>Table $table Created Successfully";
}
else
{
    echo "<br>Error while creating $table : " . mysqli_errno($link) . " : " . mysqli_error($link);
}

$table="login";
$query="CREATE TABLE IF NOT EXISTS $table(lid int(11) primary key not null auto_increment, lname varchar(100), password varchar(30), role varchar(30), mid int(11), FOREIGN KEY(mid) REFERENCES member(mid))";
if (mysqli_query($link, $query)){
    echo "<br>Table $table Created Successfully";
}
else
{
    echo "<br>Error while creating $table : " . mysqli_errno($link) . " : " . mysqli_error($link);
}


?>