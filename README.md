<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://d1.awsstatic.com/acs/characters/Logos/Docker-Logo_Horizontel_279x131.b8a5c41e56b77706656d61080f6a0217a3ba356d.png" width="400" alt="Laravel Logo"></a></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://duboestetica.cl/assets/images/logo_.png" width="400" alt="Laravel Logo"></a></p>



## Lravel docker -> el proyecto cambia el 19/05/2022
El proyecto cambia por error en la lectura de la DB neumachile-otarola, base de datos inestable. 
por ende se soluciona clonando la DB de noche.
- verificar fecha del DEPLOY 31/07/2022
- cambio de Fecha por atrasos de NT, control de emails
- Nueva fecha del DEPLOY 30/10/22
- Contiene un ID2 en marcas, no es Critico
# Docker Larvel 9

Contenedor Docker laravel 9 - php 8.0.2
--
con los cambios imprevistos, la base de datos cambio y la forma de como se ejecuta el backend, por ende.
- verificar controladores
- modelos

## Instalacion

Clona el repo

```bash
git clone git@github.com:Taoista/ventasneumachile.git
```
Entra al proyecto
```bash
cd ventasneumachile
```

## Uso
Despues descargar, ejecutar

```docker
docker-compose up -d
```
verifica el nombre del contenedor (lo puedes cambiar, 'deberias')

```bash
CONTAINER ID   IMAGE                 COMMAND                  CREATED          STATUS          PORTS                  NAMES
a96b6b76b5f0   nginx:1.21.6-alpine   "/docker-entrypoint.…"   21 minutes ago   Up 21 minutes   0.0.0.0:8001->80/tcp   webserver-ventas
62ad5e14ff02   eternite-backend      "docker-php-entrypoi…"   22 minutes ago   Up 22 minutes   9000/tcp               backend-ventas
```
en este caso el container es 'backend', entra en la consola

```bash
docker-compose exec backend-ventas sh
```
ejecuta

```bash
composer install
```
Puede que no funcione por NPM
```bash
npm install
```
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```
si estas trabajando con xampp y/o largon, crea un usuario con los privilegios completos y en la configuracion de mysql agrega
```bash
bind-address=0.0.0.0
```





