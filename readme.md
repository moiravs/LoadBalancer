Nous considérons que nous avons 5 serveurs:

## Lancer le site web
- Installer php-fpm
- Installer nginx
- Installer php
- Changer le fichier `/etc/nginx/sites-available` avec : 
- 
`server {
    listen 80 default_server;
    listen [::]:80 default_server;

    root /home/emily/Documents/loadBalancing/website; # <- là ou est situé le site index.php
    index index.php index.html index.htm index.nginx-debian.html;

    server_name _;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.1-fpm.sock; # <- chercher le directive listen dans le fichier : /etc/php/7.2/fpm/pool.d/www.conf avec votre version de php
    }

    location ~ /\.ht {
        deny all;
    }
}`

- Lancer le service php-fpm  `sudo service php8.1-fpm restart`
- Lancer nginx: `sudo service nginx restart`

## Tester sur linux
Pour tester, nous pouvons utiliser Docker.

Suivre le tuto sur: [https://docs.docker.com/engine/install/ubuntu/](https://docs.docker.com/desktop/install/ubuntu/)

### Build l'image docker:

docker build -t {nom de l'image quon veut créer} .
Le point signifie où on peut trouver l'image

## Envoyer des requêtes au container docker contenant le load balancer
curl http://192.168.1.100:8080
ou 
curl http://localhost



### Taches
- LEMP


- Une base de données
- Host un site avec mkdocs
- Configurer les serveurs 
- Configurer le load balancer (contient le WAF)
- Avancer sur le latex