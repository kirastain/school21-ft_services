FROM alpine:latest

EXPOSE 3000

RUN apk update
RUN apk add openrc


RUN apk add grafana --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted --no-cache
RUN wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.28-r0/glibc-2.28-r0.apk
RUN apk add glibc-2.28-r0.apk --allow-untrusted --no-cache

COPY ./datasources.yaml /usr/share/grafana/conf/provisioning/datasources/influxdb.yaml
COPY ./dashboards.yaml /usr/share/grafana/conf/provisioning/dashboards/influxdb.yaml
COPY dashboards /var/lib/dashboards/
COPY ./grafana.ini /usr/share/grafana/conf/custom.ini

COPY ./setup.sh .
RUN chmod +x setup.sh

CMD ./setup.sh