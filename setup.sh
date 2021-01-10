#!/bin/sh

#clear
minikube delete
rm ./srcs/logs/*

#Starting Minikube with VM
echo "Setting up minikube"
minikube start --vm-driver=virtualbox --cpus=2 --memory 3000 \
    --extra-config=apiserver.service-node-port-range=1-35000 > ./srcs/logs/logs.txt

#Starting addons
minikube addons enable metallb >> ./srcs/logs/logs.txt
kubectl apply -f https://raw.githubusercontent.com/google/metallb/v0.8.1/manifests/metallb.yaml >> ./srcs/logs/logs.txt
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml >> ./srcs/logs/logs.txt
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)" >> ./srcs/logs/logs.txt
kubectl apply -f ./srcs/metallb.yaml >> ./srcs/logs/logs.txt

minikube addons enable dashboard >> ./srcs/logs/logs.txt

#Starting dashboard
sleep 20
minikube dashboard &

#Creating
eval $(minikube -p minikube docker-env)

#Docker docker docker MANY
echo "Docker builds"
docker build -t nginx ./srcs/nginx > ./srcs/logs/nginx-logs.txt
kubectl apply -f ./srcs/nginx.yaml >> ./srcs/logs/nginx-logs.txt
echo "nginx OK"
docker build -t mysql ./srcs/mysql > ./srcs/logs/mysql-logs.txt
kubectl apply -f ./srcs/mysql.yaml >> ./srcs/logs/mysql-logs.txt
echo "mysql OK"
docker build -t wordpress ./srcs/wordpress > ./srcs/logs/wp-logs.txt
kubectl apply -f ./srcs/wordpress.yaml >> ./srcs/logs/wp-logs.txt
echo "wordpress OK"
docker build -t phpmyadmin ./srcs/phpmyadmin > ./srcs/logs/pma-logs.txt
kubectl apply -f ./srcs/phpmyadmin.yaml >> ./srcs/logs/pma-logs.txt
echo "phpmyadmin OK"
docker build -t telegraf ./srcs/telegraf > ./srcs/logs/telegraf-logs.txt
kubectl apply -f ./srcs/telegraf.yaml >> ./srcs/logs/telegraf-logs.txt
echo "telegraf OK"
docker build -t influxdb ./srcs/influxdb > ./srcs/logs/influx-logs.txt
kubectl apply -f ./srcs/influxdb.yaml >> ./srcs/logs/influx-logs.txt
echo "influxdb OK"
docker build -t ftps ./srcs/ftps > ./srcs/logs/ftps-logs.txt
kubectl apply -f ./srcs/ftps.yaml >> ./srcs/logs/ftps-logs.txt
echo "ftps OK"
docker build -t grafana ./srcs/grafana > ./srcs/logs/grafana-logs.txt
kubectl apply -f ./srcs/grafana.yaml >> ./srcs/logs/grafana-logs.txt
echo "grafana OK"

echo "ip is 192.168.99.201"