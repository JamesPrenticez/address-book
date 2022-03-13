https://www.youtube.com/watch?v=UHSipe7pSac 5.02
https://www.youtube.com/watch?v=kqkzl9TPW5E

- /c/xampp/htdocs/address-book

- install xampp - https://www.youtube.com/watch?v=inbGsEUB7T4
- Install composer - https://getcomposer.org/download/
- composer create-project laravel/laravel projectname
- ``` php artisan serve ```

- create migrations - ``` php artisan make:model Item -m ``` and add some columns
- run migration ``` php artisan migrate ```
- ```http://localhost/phpmyadmin/ ```

- ``` php artisan make:controller ItemController --resource ```
- Create some routes in in api.php
- http://127.0.0.1:8000/api/item/store + Header Content-Type: Application/json

- npm install vue@next vue-loader@next @vue/compiler-sfc babel-loader @babel/core @babel/preset-env
 vue-router@next

[https://www.youtube.com/watch?v=2PHsbIS66H4]
 THE CODE TO COPY AND PASTE
composer install 
mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate
