Package được dùng:
1. Route: https://github.com/bramus/router

2. View: https://github.com/EFTEC/BladeOne
2.1. Lệnh cài: composer require eftec/bladeone

3. Model: https://github.com/doctrine/dbal/
3.1. Lệnh cài: composer require doctrine/dbal
3.2. Tài liệu sử dụng: https://www.doctrine-project.org/projects/doctrine-dbal/en/4.0/reference/introduction.html

4. .htaccess: Dùng của Laravel or Wordpress
#BEGIN WordPress
    RewriteEngine On
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
    RewriteBase /
    RewriteRule ^index\.php$ - [L]
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . /index.php [L]
#END WordPress

5. Validate: https://github.com/rakit/validation
5.1. Lệnh cài: composer require "rakit/validation"

6. ENV: https://github.com/vlucas/phpdotenv
6.1. Lệnh cài: composer require vlucas/phpdotenv