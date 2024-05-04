# Scénario 1: Lancer le site web avec docker:
- `sudo service docker start`
- `sudo apt install docker-compose`
- (`sudo docker-compose down` si vous avez build avant et changez le fichier de config)
- `sudo docker-compose up --build` (pour compiler, pas nécéssaire de le faire à chaque fois)
- aller voir sur https://localhost:8080 (pour web1) ou https://localhost:8081 (pour web2)
- aller voir sur https://localhost:8082 (pour le load balancer)


### Taches
- LEMP


- Une base de données
- Configurer les serveurs 
- Configurer le load balancer (contient le WAF)
- Avancer sur le latex
- Utiliser un .sh pour rajouter des serveurs et le configurer
