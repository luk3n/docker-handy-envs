# docker-handy-envs
Handy scripts for docker-compose to create Docker containers ready to be used as development environments.

### Environments
* SQL Server 2017 (Developer edition)
* LAMP (Linux + Apache + MariaDB + PHP)

### Prerequisites
* [Docker](https://www.docker.com/products/docker-desktop)
* [Docker Compose](https://docs.docker.com/compose/install/)

### Get started
1. Clone this repository:
```
git clone https://github.com/luk3n/docker-handy-envs.git
```

2. Launch the environment of your preference:
```
./run-sqlserver.sh start
./run-lamp.sh start
```
3. Stop it using:
```
./run-sqlserver.sh stop
./run-lamp.sh stop
```
All these bash scripts do is to execute ```docker-compose up -d```or ```docker-compose stop``` as you would do manually.

### Volumes
For LAMP environment:

```/var/www/html/``` will be mapped to ```./lamp/www```

### Ports

LAMP:
* Apache HTTP Server ```80```
* MariaDB ```3306```
* phpMyAdmin ```8080```

SQL Server 2017: ```1433```

### Credentials

MariaDB:
* Username ```foobar```
* Password: ```123456```

phpmyAdmin:
* Username: ```root```
* Password: ```toor```

SQL Server 2017:
* Username: ```sa```
* Password: ```Alm0sts3cur3!```