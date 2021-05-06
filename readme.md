# Alice-bundle bug reproducer

This repository reproduces bug with relation One-to-One with abstract entity in [hautelook/AliceBundle](https://github.com/hautelook/AliceBundle)

## Install
```bash
composer install
```
Configure DB-connection in file `.env`

Create DB:
```bash
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
```

## Bug
Lunch test:
```bash
php bin/phpunit
```
You'll see `null` - it is dump of related entity with One-to-One relation

Open file `tests/ServiceTest.php` and comment out line `use ReloadDatabaseTrait;`. Then run test again - you'll see dump of entity:
```
App\Entity\Oauth2AccessType {#4539
  -id: 1
  -name: "test"
  -service: App\Entity\Service {#5283
    -id: 1
    -name: "Twitter"
    -accessType: App\Entity\Oauth2AccessType {#4539}
  }
}
```