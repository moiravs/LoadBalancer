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

# Lancer la database

- `sudo apt-get install php-mysql`
- `sudo apt-get install mysql-server`
- `sudo service mysql start`

- sudo mysql -u root
- `sudo mysql -u root
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';
FLUSH PRIVILEGES;
exit;`

# Lancer le site web avec docker:
- `docker-compose up`
- aller voir sur http://localhost:8080

## Envoyer des requêtes au container docker contenant le load balancer
curl http://192.168.1.100:8080
ou 
curl http://localhost



### Taches
- LEMP


- Une base de données
- Configurer les serveurs 
- Configurer le load balancer (contient le WAF)
- Avancer sur le latex