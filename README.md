## How to Run

- Install Docker Engine & Docker Compose.

- Cloning This repository

- Copy environment file

  ```shell
  cp ./project/.env.example ./project/.env
  ```

- Run the docker-compose file

  ```shell
  docker-compose up -d
  ```

- Database migration

  ```shell
  docker-compose exec myapp php artisan migrate  
  ```

  ```shell
  docker-compose exec myapp php artisan db:seed
  ```

- Generate key

  ```shell
  docker-compose exec myapp php artisan key:generate
  ```

- Open browser http://localhost:8000

## Login Credentials

admin
- email: admin@valas.id
- password: admin

super admin
- email: super_admin@valas.id
- password: super_admin
