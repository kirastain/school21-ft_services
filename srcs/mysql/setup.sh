#!/bin/ash

openrc default

/etc/init.d/mariadb setup
rc-service mariadb start

mysql -u root mysql < wordpress.sql
mysql -u root wordpress < maindb.sql

rc-service mariadb stop
/usr/bin/mysqld_safe --datadir='/var/lib/mysql'