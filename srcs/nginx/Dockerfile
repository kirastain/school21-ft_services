FROM alpine:latest

EXPOSE 22 80 443

RUN apk update

RUN apk add nginx
RUN apk add openrc
RUN apk add openssh
RUN apk add openssl
RUN apk add supervisor

RUN adduser -D -g 'www' www
RUN mkdir /www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
RUN mkdir -p /run/nginx
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY ./supervisord.conf /etc/supervisord.conf
COPY index.html /www/index.html

RUN adduser -D user
RUN echo "user:pass"|chpasswd

RUN ssh-keygen -A
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-subj '/C=RU/ST=Moscow/L=Moscow/O=42/OU=21/CN=bbelen' \
		-keyout /etc/ssl/localhost.key \
		-out /etc/ssl/localhost.crt

COPY setup.sh ./setup.sh
RUN chmod +x /setup.sh

CMD ./setup.sh