В контейнере собрано:
---
* nginx
* php-fpm 7.1
* mysql 5.7
* mailhog

Структура папок:
---

```
- docker
  - mysql
    - db
    - Dockerfile
    - my.cnf
  - nginx
    - default.conf
    - Dockerfile
  - php
    - Dockerfile
    - php.ini
  - docker-compose.yml
- env
  - mysql.dist.env
  - nginx.dist.env
  - php-fpm.dist.env
- htdocs
- logs
  - mysql
    - error.log
    - general_queries.log
    - slow_queries.log
  - nginx
    - access.log
    - error.log
  - php
    - mail.log
- tmp
  - php
  - sessions
- start.sh
- stop.sh
```

Описание основных файлов проекта:
---

* ./docker/mysql/db - Файлы БД
* ./env - Примеры файлов настроек окружения. Необходимо скопировать и переименовать без ".dist" в названии файла.
* ./htdocs - директория веб-сервера nginx
* ./logs - логи
* ./tmp - временные файлы php, сессий
* ./start.sh и ./stop.sh - запуск/остановка окружения проекта. Может потребоваться запуск из под sudo.

После клонирования репозитория необходимо настроить env файлы и выставить chmod +x на файлы start.sh и stop.sh

Для тестирования писем настроен mailhog. Открывается по адресу проекта с портом :8025