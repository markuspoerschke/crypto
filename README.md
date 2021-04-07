# Rot 13

Encrypts strings with rot 13.

## Getting Started

### Installation

```
composer require markuspoerschke/crypto
```

### Usage

```php
<?php

$algorithm = new \Mlssr\Crypto\Rot13();
echo $algorithm->encrypt('Hallo Welt!');
// outputs "Unyyb Jryg!"
```
