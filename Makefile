run :
	docker-compose up -d

build_run:
	docker-compose up -d --build

.PHONY: run build_run