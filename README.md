<br>
  
<p  align="center">
<a  href="https://github.com/laravel/framework/actions"><img  src="https://repository-images.githubusercontent.com/262374167/19a93700-438a-11eb-9de5-d50a874fd362"  alt="Build Status"></a>
</p>


# # *Laradocker development environment  Docker and Laravel 11- PHP 8.3*



### `Passo a passo`
**Clone Repositório**
```sh
git clone -b https://github.com/GeovanniMarrocos/app-laradocker.git
```
```sh
cd app-laradocker.git
```

**Suba os containers do projeto**
```sh
docker-compose up -d
```


**Crie o arquivo .env**
```sh
cp .env.example .env
```

**Acesse o container app**
```sh
docker-compose exec app bash
```


**Instale as dependências do projeto**
```sh
composer install
```

**Gere a key do projeto Laravel**
```sh
php artisan key:generate
```

**OPCIONAL: Gere o banco SQLite (caso não use o banco MySQL)**
```sh
touch database/database.sqlite
```

**Rodar as migrations**

```sh
php artisan migrate
```

Acesse o projeto
 exemplo: (http://localhost:8787)

