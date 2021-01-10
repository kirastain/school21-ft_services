FROM alpine:latest

EXPOSE 8086

RUN apk update
RUN apk add openrc
RUN apk add influxdb
RUN apk add --no-cache --upgrade bash

COPY setup.sh /setup.sh
RUN chmod +x /setup.sh

CMD ./setup.sh