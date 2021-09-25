# ead_php_alura_doctrine-heranca

> Projeto referente a [este](https://cursos.alura.com.br/course/php-doctrine-indices-heranca-sql-nativo) curso.

> Acesse `localhost:8989/teste.php` e depois `localhost:8989`

1. Crie os containers
```sh
docker-compose up -d
```
> Caso queira, ao final da configuração, pare os containers com ``docker-compose down``

2. Baixe as dependências do composer
```sh
docker-compose exec app composer install
```
## Execução local

- Caso recém tenha feito a **configuração inicial** e os containers continuem rodando, tudo certo. Pode acessar ``localhost:8989``
- Do contrário, suba os containers novamente:
```sh
docker-compose up
```
> Pare com <kbd>Ctrl</kbd><kbd>C</kbd>

> Caso modifique Dockerfile, rebuilde com ``docker-compose up --build``

## Anotações

```sh
docker-compose exec app bash
```

```sh
composer doctrine -- --help
```

```sh
composer doctrine orm:info
```

```sh
composer doctrine orm:mapping:describe Ator
```

```sh
composer doctrine orm:schema-tool:create -- --dump-sql
```

```sh
composer doctrine orm:schema-tool:create
```

```sh
composer doctrine orm:schema-tool:drop -- --force
```

```sh
composer doctrine orm:generate-proxies
```

> **Windows**:
> Warning: require(/tmp/__CG__AluraDoctrineEntityIdioma.php): failed to open stream: No such file or directory in /var/www/html/vendor/doctrine/common/lib/Doctrine/Common/Proxy/AbstractProxyFactory.php on line 187
>
> Fatal error: require(): Failed opening required '/tmp/__CG__AluraDoctrineEntityIdioma.php' (include_path='.:/usr/local/lib/php') in /var/www/html/vendor/doctrine/common/lib/Doctrine/Common/Proxy/AbstractProxyFactory.php on line 187

```sh
composer doctrine orm:generate-entities src/Entity
```

```sh
composer doctrine orm:convert-mapping src/Entity -- --from-database --namespace=Alura\Doctrine\Entity xml mapeamentos
```
