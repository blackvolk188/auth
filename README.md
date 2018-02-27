# auth
Auth with email varification

copy .env.example to .env and fill your local db creads and email creads

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=Your_email
MAIL_PASSWORD=Your_password
MAIL_ENCRYPTION=tls

php artisan migrate

php artisan serve

register your user
check email
login
