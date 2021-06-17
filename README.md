# airms

1) get into api folder
- copy env file to .env
- set your next CONSTS
  - MAIL_DRIVER=smtp
  - MAIL_HOST=smtp.gmail.com
  - MAIL_PORT=465
  - MAIL_USERNAME=
  - MAIL_PASSWORD=
  - MAIL_ENCRYPTION=ssl
- type: cd api
- then type: docker-composer up
- then open new terminal and type: docker-composer exec app bash
- then run: php artisan migrate --seed

2) get into web
- cd web
- ng serve

3) You can log in with the next credentials:
- username: slobodan.aleksic.biz@gmail.com
- password: Password123