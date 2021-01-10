FROM alpine:latest

EXPOSE 20 21 30000

RUN apk upgrade
RUN apk add openssl vsftpd
RUN apk add jq curl
ENV API URL=https://kubernetes

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
 -subj '/C=RU/ST=Moscow/O=21school/CN=bbelen' \
 -keyout /etc/ssl/private/vsftpd.key \
 -out /etc/ssl/certs/vsftpd.crt

RUN mkdir -p /var/ftp

COPY vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY setup.sh .

RUN chmod +x ./setup.sh

CMD ./setup.sh