Nous considérons que nous avons 5 serveurs:


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