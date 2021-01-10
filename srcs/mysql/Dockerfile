FROM alpine:latest

EXPOSE 3306

RUN apk update
RUN apk add openrc
RUN apk add mysql mysql-client

RUN mkdir -p /run/mysqld && chown -R mysql /run/mysqld

COPY mariadb-server.cnf /etc/my.cnf.d/mariadb-server.cnf

COPY ./setup.sh .
RUN chmod +x setup.sh

COPY ./wordpress.sql .
COPY ./maindb.sql .

CMD ./setup.sh