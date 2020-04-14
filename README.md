# PubProxyRand PHP

Get random public proxy fo free from [PubProxy](http://pubproxy.com)
**homework. was made in learning purposes**





## Known Limitations

As free user, there is only 50 request a day. So we advise you to cache responses.





## Installation

Install this package via [Composer](https://getcomposer.org/).
```bash
composer require "ozyab/pubproxy-rand:^1.0"
```





## Usage

### Get Proxy
```php
require_once ('vendor/autoload.php');
use \Ozyab\PubProxyRand;

$proxy = new PubProxyRand;
echo $proxy->fetch();
```