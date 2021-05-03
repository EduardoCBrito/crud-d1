### Como rodar localmente

1. Acessar a pasta principal.
2. Cria um banco de dados dum;
        create database dum;
3. Importar Sql:
        mysql -u {user} -p{password} dum < dum.sql
4. startar servidor php:
        php -S localhost:8000
5. Acessar servidor no browser
        localhost:8000/index.php?page=list