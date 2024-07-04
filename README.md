## Fluxo de Processo de inicialização do projeto

### Subir containers em segundo plano
```
sudo docker-compose up -d
```

### Caso apareça esse erro de permissão -> There is no existing directory at /storage/logs and its not buildable: Permission denied, execute os comandos abaixo
```
sudo docker exec -it phpgold-app php artisan route:clear
```
```
sudo docker exec -it phpgold-app php artisan config:clear
```
```
sudo docker exec -it phpgold-app php artisan cache:clear
```

### Instalar pacote para atualização de campos já existentes no banco de dados, rodar esse comando antes de rodar as migrations
```
sudo docker exec -it phpgold-app composer require doctrine/dbal:^2.6
```

### Se não existir o arquivo .env criar
```
cp .env.example .env
```

### caso não tenha configurado, configure essas variaveis como quiser, ele já cria o usuário...
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=user_local
DB_PASSWORD=Teste123456! 
```

### Rodar migrations
```
sudo docker exec -it phpgold-app php artisan migrate:install
```
```
sudo docker exec -it phpgold-app php artisan migrate
```

### OBS caso os seeders ABAIXO não executem rodar o comando
```
sudo docker exec -it phpgold-app sudo composer dump-autoload 
```

### Popula tabelas de status de serviços e pagamentos
```
sudo docker exec -it phpgold-app php artisan db:seed --class=CreateUserSeeder
sudo docker exec -it phpgold-app php artisan db:seed --class=StatusServiceSeeder
sudo docker exec -it phpgold-app php artisan db:seed --class=PaymentStatusSeeder
sudo docker exec -it phpgold-app php artisan db:seed --class=PermissionsSeeder
sudo docker exec -it phpgold-app php artisan db:seed --class=EmployeeRolesSeeder
sudo docker exec -it phpgold-app php artisan db:seed --class=EmployeeSeeder
```

### Esse comando de criar o passport eu não estou usando, mas tem classes que estão importando ele, instalei por futuramente posso precissar parar trabalhar com tokens...
```
sudo docker exec -it phpgold-app composer require laravel/passport:^9.2
```

### Gera tokens do passport
```
sudo docker exec -it phpgold-app php artisan passport:install
```

### criar link simbolico
```
sudo docker exec -it phpgold-app php artisan storage:link
```

### Atualizar o composer caso necessario
```
sudo docker exec -it phpgold-app composer update
```

### Derrubar todos containers
```
sudo docker-compose down
```
