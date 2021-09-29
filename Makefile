.PHONY: qa
qa: cs

.PHONY: cs
cs: vendor
	vendor/bin/ecs check --fix

vendor: composer.json composer.lock
	composer validate
	composer install
	composer normalize
