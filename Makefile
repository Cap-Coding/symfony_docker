up:
	docker-compose up -d

down:
	docker-compose down

rebuild:
	docker-compose down -v --remove-orphans
	docker-compose rm -vsf
	docker-compose up -d --build

db:
	docker-compose exec php ./bin/console doctrine:database:drop --force
	docker-compose exec php ./bin/console doctrine:database:create
	docker-compose exec php ./bin/console doctrine:migrations:migrate -n

prod:
	docker-compose -f docker-compose_prod.yml up -d

prod_build:
	docker-compose -f docker-compose_prod.yml build
