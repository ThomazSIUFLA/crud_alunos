# CRUD simples de aluno 
### Desenvolvido para PS_Grupo_Delta


## Sobre o Sistema

* Feito em PHP 7
* Banco de Dados MySQL
* Framework Codeigniter 4

* Bootstrap 5.0 (CDN)


## Sobre o Desenvolvimento

* Apache 2.4.41
* MariaDB 10.4.11
* PHP 7.4.3 (VC15 X86 64bit thread safe) * PEAR
* phpMyAdmin 5.0.1
* XAMPP Control Panel Version 3.2.4.


## Autor

Thomaz Flanklin :smile:

## Requisitos

* Git
* Node.js
* PHP 5.5 ou superior
* Servidor Apache
* MySQL
* Composer

## Guia de configuração

1. Clone o repositório dentro da pasta htdocs (no caso do XAMPP)
 `git clone https://github.com/ThomazSIUFLA/crud_alunos.git`

2. Execute `composer install`

3. Execute o script delta_DB.sql no seu banco de dados

4. Caso não clone o repositório dentro da pasta htdocs direto, altere o arquivo App.php (`app\Config\App.php`) alterando a linha 26 indicando o caminho:
`public $baseURL = 'http://localhost:8080/crud_alunos/';`
Abra no navegador `http://localhost:8080/< caminho do projeto dentro de htdocs >/public`
exemplo:  `http://localhost:8080/crud_alunos/public`

5. Abra no navegador `http://localhost:8080/< caminho do projeto dentro de htdocs >/public`
exemplo:  `http://localhost:8080/crud_alunos/public`
