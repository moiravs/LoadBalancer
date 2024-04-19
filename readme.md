Nous considérons que nous avons 5 serveurs:


## Tester
Pour tester, nous pouvons utiliser docker

FROM nginx
COPY nginx.conf /etc/nginx/nginx.conf

docker build -t my-nginx .

docker run -d -p 8080:80 my-nginx
docker run -d -p 8081:80 my-nginx
docker run -d -p 8082:80 my-nginx
docker run -d -p 8083:80 my-nginx
docker run -d -p 8084:80 my-nginx
