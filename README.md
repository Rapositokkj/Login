# 🔐 Sistema de Login — PHP + MySQL

Projeto simples desenvolvido para estudar a integração entre **HTML, PHP e MySQL**.

O sistema permite:

* Criar uma conta
* Salvar os dados no banco de dados
* Fazer login
* Verificar e-mail e senha

> ⚠️ Projeto desenvolvido para fins de estudo. Ainda não está preparado para uso em produção.

---

## 🚀 Demonstração

>  https://rapositokkj.github.io/Login/

## 🛠️ Tecnologias

* HTML
* PHP 8+
* MySQL/MariaDB
* Apache
* XAMPP
* phpMyAdmin

---

## 📁 Estrutura do projeto

```text
login/
├── index.php
├── cadastro.php
├── cadastrar.php
└── login.php
```

### Função de cada arquivo

| Arquivo         | Função                           |
| --------------- | -------------------------------- |
| `index.php`     | Página de login                  |
| `cadastro.php`  | Página para criar uma conta      |
| `cadastrar.php` | Recebe os dados e salva no banco |
| `login.php`     | Verifica os dados do login       |

---

# 🚀 Como executar

## 1. Instalar o XAMPP

Instale o XAMPP no computador.

Depois abra o **XAMPP Control Panel**.

Inicie:

```text
Apache
MySQL
```

Os dois devem aparecer como **Running**.

---

## 2. Colocar o projeto no XAMPP

Copie a pasta `login` para:

```text
C:\xampp\htdocs\
```

O resultado deve ficar:

```text
C:\xampp\htdocs\login\
```

E dentro dela:

```text
index.php
cadastro.php
cadastrar.php
login.php
```

---

# 🗄️ 3. Criar o banco de dados

Abra no navegador:

```text
http://localhost/phpmyadmin/
```

Clique na aba **SQL**.

Execute:

```sql
CREATE DATABASE teste_login;

USE teste_login;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
```

Depois de executar, o banco deverá aparecer como:

```text
teste_login
└── usuarios
```

---

# 🌐 4. Abrir o site

No navegador, acesse:

```text
http://localhost/login/
```

A página de login deverá aparecer.

Para criar uma conta, clique em:

```text
Criar uma conta
```

Depois de cadastrar, os dados poderão ser visualizados no:

```text
http://localhost/phpmyadmin/
```

Em:

```text
teste_login → usuarios → Procurar
```

---

# 🔄 Como o sistema funciona

O fluxo básico é:

```text
              SITE
                │
                ↓
              PHP
                │
                ↓
             MySQL
                │
                ↓
          Banco de dados
```

### Criar conta

```text
cadastro.php
      ↓
cadastrar.php
      ↓
    MySQL
      ↓
usuarios
```

### Fazer login

```text
index.php
    ↓
login.php
    ↓
MySQL
    ↓
verificação dos dados
    ↓
Login realizado
```

---

# ⚠️ Observações

Este projeto é apenas para aprendizado.

O código atual não possui todas as proteções necessárias para um sistema de login real.

Em uma aplicação real, é necessário implementar, entre outras coisas:

* Prepared Statements
* Validação dos dados
* Proteção contra SQL Injection
* Controle de sessões
* Proteção CSRF
* Configuração segura das credenciais do banco
* HTTPS

As senhas são armazenadas utilizando `password_hash()` e verificadas com `password_verify()`.

---

## 📚 Objetivo

Este projeto foi criado para aprender os conceitos básicos de:

**Front-end → Back-end → Banco de dados**

e entender como um site pode enviar, armazenar e consultar informações usando PHP e MySQL.
