# Тестовое задание

## Установка

Сначала, склонируйте репозиторий

```bash
$ git clone git@bitbucket.org:siftly/siftly.git
```

Перейдите в каталог проекта, установите зависимости с помощью `composer install` и установите конфигурационный файл `.env`

```bash
$ cd /home/mnt/main3/apache/test1
$ composer install
$ cp .env.example .env
```

Сгенерируйте ключ для приложения и настройке остальные параметры конфигурации в .env
Как минимум адрес приложения APP_URL и параметры подключения к базе данных

```bash
$ php artisan key:generate
```


Установка яваскрипт зависимостей:

```bash
$ yarn
```

Компиляция скриптов и стилей:

```bash
$ npm run production
```
