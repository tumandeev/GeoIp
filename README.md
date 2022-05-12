# Market Project

## Installation

Для работы на машине требуется Docker и Docker-compose и ssh

Процесс установки

```sh
git clone https://github.com/tumandeev/GeoIp.git
```
Из корня проекта:
```sh
cp src/.env.example src/.env
docker-compose up -d --build
docker-compose run artisan composer install
docker-compose run artisan key:generate
docker-compose run artisan migrate --seed
```
Возможно потребуется дать 755 права на папку storage в проекте

Если все установлено верно, то можно будет работать с проектом по адресам:
```sh
Само приложение - 127.0.0.1:8000
База данных - 127.0.0.1:8888
```
