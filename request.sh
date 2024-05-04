sudo service docker start
sudo docker-compose down
sudo docker-compose up --build -d
echo "Processes running\n"
sudo docker ps
