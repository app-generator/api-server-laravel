
# [Laravel API Server](https://appseed.us/boilerplate-code/laravel-boilerplate)

Simple Laravel API Server with JWT authentication, and **SQLite** persistance - Provided by **AppSeed** [App Generator](https://appseed.us) and [UPDIVISION](https://updivision.com/?ref=appseed).


<br />

> Features:

- [API Definition](https://docs.appseed.us/boilerplate-code/api-unified-definition) - the unified API structure implemented by this server
- Simple, intuitive codebase - can be extended with ease.  
- **Stack**: PHP 7.4+ / Laravel / Doctrine
- JWT Authentication 

<br />

> Can be used with other [React Starters](https://appseed.us/apps/react) for a complete **Full-Stack** experience:

| [React Node JS Berry](https://appseed.us/product/react-node-js-berry-dashboard) | [React Node Soft Dashboard](https://appseed.us/product/node-js-react-soft-dashboard) | [React Node Datta Able](https://github.com/app-generator/react-datta-able) |
| --- | --- | --- |
| [![React Node JS Berry](https://user-images.githubusercontent.com/51070104/124934742-aa392300-e00d-11eb-83bf-28d8b8704ec8.png)](https://appseed.us/product/react-node-js-berry-dashboard) | [![React Node Soft Dashboard](https://user-images.githubusercontent.com/51070104/137918158-54b20cce-1ac8-4279-ab89-aac0353ff7d3.png)](https://appseed.us/product/node-js-react-soft-dashboard) | [![React Node Datta Able](https://user-images.githubusercontent.com/51070104/125737710-834a9e6f-c39b-4f3b-a42a-9583ce2ce1da.png)](https://github.com/app-generator/react-datta-able)

<br />

![Laravel API Server - Open-source Nodejs Starter provided by AppSeed.](https://user-images.githubusercontent.com/51070104/141784950-b63f71bb-192e-4851-af6b-1b7a99226c9f.jpg)

<br />

## Requirements

- PHP 7.4+
- Extensions (check the #Troubleshooting section for installation info)
  - `php-xml`
  - `php7.4-sqlite`
  
<br />

## How to use the code

**Step #1** - Clone the project

```bash
$ git clone https://github.com/app-generator/api-server-laravel.git
$ cd api-server-laravel
```

**Step #2** - Install dependencies

```bash
$ composer install
$ cp .env.example .env 
$ php artisan key:generate
```

**Step #3** - Generate a `secret` key used by JWT Authentication Flow

```
$ php artisan jwt:secret
```

**Step #4** - Set up the database

```bash
$ touch database/database.sqlite
$ php artisan migrate
```

**Step #5** - Start the server

```bash
$ php -S localhost:5000 server.php
```

<br />

## Troubleshooting

To have a successful compilation of this product, make sure you have the following PHP extensions installed and enabled:

- `php-xml` - required by Php-Unit
- `php7.4-sqlite` - The SQLite driver required by Laravel ORM

```bash
$ # Php XML - required by Php Unit
$ sudo apt install php-xml php-cli php-mbstring php7.4-sqlite
```

<br />

## Codebase Structure

```bash
< ROOT >
     | 
     |-- app/          # Implements APP Bussiness Logic                    
     |-- config/       # Configuration
     |-- public/       # Public folder                         
     |-- routes/       # Application ROutes                        
     |-- tests/        # Tests                              
     | 
     |-- server.js     # API Entry Point
     |-- .env          # Specify the ENV variables
     |                        
     |-- ************************************************************************
```

<br />

## API

For a fast set up, use this POSTMAN file: [api_sample](https://github.com/app-generator/api-server-nodejs-pro/blob/master/media/api.postman_collection.json)

> **Register** - `api/users/register`

```
POST api/users/register
Content-Type: application/json

{
    "username":"test",
    "password":"pass", 
    "email":"test@appseed.us"
}
```

<br />

> **Login** - `api/users/login`

```
POST /api/users/login
Content-Type: application/json

{
    "password":"pass", 
    "email":"test@appseed.us"
}
```

<br />

> **Logout** - `api/users/logout`

```
POST api/users/logout
Content-Type: application/json
authorization: JWT_TOKEN (returned by Login request)

{
    "token":"JWT_TOKEN"
}
```

<br />

---
**[Laravel API Server](https://appseed.us/boilerplate-code/laravel-boilerplate)** - provided by AppSeed [App Generator](https://appseed.us)
