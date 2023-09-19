# Laravel-basic-resource
To get basic understanding on laravel

To create a project separately:
composer create-project laravel/laravel example-app 

Commands->

php artisan serve

Creating table:
Only migration file:
php artisan make:migration create_table_name_table

Botth migration and model file:
php artisan make:model table_name -m

Updating a table:
php artisan make:migration update_file-name_table --table=table-name

Generate the migration:
php artisan migrate

