[![Build Status](https://travis-ci.org/adtechpotok/symfony-aware.svg?branch=master)](https://travis-ci.org/adtechpotok/symfony-aware)
[![License](http://img.shields.io/badge/license-mit-blue.svg?style=flat-square)](https://raw.githubusercontent.com/adtechpotok/symfony-aware/master/LICENSE)

# Aware

#### Пример использования

##### Сервис
```php
<?php

use Adtechpotok\Aware\Interfaces\EntityManagerAwareInterface;
use Adtechpotok\Aware\Traits\EntityManagerAwareTrait;

class SomeClass implements EntityManagerAwareInterface
{
    use EntityManagerAwareTrait;
    
    public function someMethod()
    {
        dump($this->em); // $em - дефолтный EntityManager, аналог '@doctrine.orm.default_entity_manager'
    }
}
``` 

##### Объявление сервиса
```yaml
services:
    some.service:
        class: SomeClass
        calls:
            - {method: setEntityManager, arguments: ['@doctrine.orm.default_entity_manager']}
```

##### Таблица соответствий 
| Aware                  | Service                                |
| ---------------------- | -------------------------------------- |
| ConnectionAware        | `@doctrine.dbal.default_connection`    |
| CacheAware             | `@cache.app`                           |
| ContainerAware         | `@service_container`                   |
| DoctrineAware          | `@doctrine`                            |
| EntityManagerAware     | `@doctrine.orm.default_entity_manager` |
| EventDispatcherAware   | `@debug.event_dispatcher`              |
| FilesystemAware        | `@filesystem`                          |
| FileLocatorAware       | `@file_locator`                        |
| FileLinkFormatterAware | `@debug.file_link_formatter`           |
| HttpKernelAware        | `@http_kernel`                         |
| KernelAware            | `@kernel`                              |
| LoggerAware            | `@monolog.logger`                      |
| PropertyAccessorAware  | `@property_accessor`                   |
| ReaderAware            | `@annotations.cached_reader`           |
| RequestStackAware      | `@request_stack`                       |
| StopwatchAware         | `@debug.stopwatch`                     |

##### Объявление сервиса в Symfony >= 3.3
```yaml
services:
    _defaults:
        autowire: true
        
    some.service:
        class: SomeClass
```
**Важно!** При объявлении сервисов, которые требуют использования тэгов - этот способ не подоходит, Symfony игнорирует тэги при `autowire`.
