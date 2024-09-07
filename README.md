# E-School*

*Проєкт розблений на замовлення дитячої школи програмування E-School

## Інсталяція

### Отримати копію проєкту:

```bash
    git clone https://github.com/alexergaster/E-School.git
```

### Встановити composer:

```bash
    composer install
```

### Створити конфігураційний файл

```bash
    cp .env.example .env
```

Відредагувати його:

`
DB_DATABASE=E-School
`

### Створити базу даних MySQL:

```bash
    mysql -u [username] -p -e "CREATE DATABASE E-School;"
```

Виконати міграцію:

`
php artisan migration
`

### Створити символічні посилання

`
php artisan storage:link
`
