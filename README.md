# Equipe 10 - Méliuz / Let's Rock - Gama Academy

Este projeto é uma página web desenvolvida em CakePHP 2.3 e Bootstrap 3 para cumprir uma tarefa da Gama Academy.

## Instalação

* Instale a versão mais recente do Apache e MySQL Server:

```
sudo apt-get install apache2 mysql-server

```

* Instale o PHP5. Atenção: caso seu sistema seja o Ubuntu 16.04, o PHP5 não estará mais disponível no repositório do sistema. Neste caso, é necessário adicionar um repositório que disponibilize o PHP5.

```
sudo apt-get install php5.6 php5.6-mysql

```

* Ative os módulos rewrite e php5.6 no Apache:

```
a2enmod rewrite php5.6

```

* Verifique se a versão do PHP está correta:

```
php -v

PHP 5.6.30-7+deb.sury.org~xenial+1 (cli) 

```

* Crie um arquivo de configuração específico para o domínio do site em /etc/apache2/sites-available/dominio.com.conf ou utilize o arquivo default /etc/apache2/sites-available/000-default.conf caso o site não possua um domínio configurado, com o seguinte conteúdo: (obs: substitua o diretório do DocumentRoot e Directory pelo diretório onde estão os arquivos deste projeto)

```
<VirtualHost *:80>

        ServerAdmin admin@gama_assignment1
        ServerName localhost
        ServerAlias www.localhost
        DocumentRoot /var/www/gama_assignment1

        <Directory /var/www/gama_assignment1>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Require all granted
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

</VirtualHost>

```

* Modifique as permissões da pasta gama_assignment1:

```
sudo chmod -R 755 gama_assignment1

```

* Modifique as permissões da pasta temporária gama_assignment1/app/tmp (permissão 777 só por preguiça):

```
sudo chmod -R 777 gama_assignment1/app/tmp

```

* Crie uma database gama_assignment1 no MySQL:

```

mysql -u root -p
CREATE DATABASE gama_assignment1;

```

* Carregue o esquema gama_assignment1.sql na raiz deste projeto para o MySQL:

```
mysql -u root -p < gama_assignment1.sql

```

* Reinicie o Apache, e tudo deve funcionar corretamente.

```
service restart apache2

```
* Dúvidas: aleksanderllada@gmail.com
