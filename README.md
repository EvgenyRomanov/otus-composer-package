# Процессор строк

Краткое описание

## Требования
- PHP 7.4
## Установка

```bash
$ composer require evgeny-romanov/otus-composer-package
```

## Использование

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use EvgenyRomanov\OtusComposerPackage\StringProcessor;

$stringProcessor = new StringProcessor();
echo $stringProcessor->getLength("Вася"); // 4
```
