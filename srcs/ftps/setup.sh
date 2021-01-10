#!/bin/sh

adduser -D -h /var/ftp bbelen
echo "bbelen:admin" | chpasswd
vsftpd /etc/vsftpd/vsftpd.conf