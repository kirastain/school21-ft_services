FROM alpine:latest

EXPOSE 5050

RUN apk update
RUN apk add openrc
RUN apk add nginx supervisor
RUN apk add wget && mkdir /www \
&& apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session

RUN wget https://wordpress.org/latest.zip && \
	unzip latest.zip && \
	mv wordpress /www/ && \
	rm latest.zip

COPY wp-config.php /www/wp-config.php
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY supervisord.conf /etc/supervisord.conf

COPY setup.sh .
RUN chmod +x setup.sh

CMD ./setup.sh