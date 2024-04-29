Nous considérons que nous avons 5 serveurs:

## Lancer le site web
- Installer node.js
- `npm install http-server -g`
- `http-server` -> il affiche le lien lors du résultat de la commande



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