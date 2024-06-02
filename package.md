Package được dùng:
1. Route: https://github.com/bramus/router

2. View: https://github.com/EFTEC/BladeOne
- Lệnh cài: composer require eftec/bladeone

3. Model: https://github.com/doctrine/dbal/
- Lệnh cài: composer require doctrine/dbal
- Tài liệu sử dụng: https://www.doctrine-project.org/projects/doctrine-dbal/en/4.0/reference/introduction.html

4. .htaccess: Dùng của Laravel or Wordpress
-   RewriteEngine On
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
    RewriteBase /
    RewriteRule ^index\.php$ - [L]
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . /index.php [L]

5. Validate: https://github.com/rakit/validation
- Lệnh cài: composer require "rakit/validation"

6. ENV: https://github.com/vlucas/phpdotenv
- Lệnh cài: composer require vlucas/phpdotenv