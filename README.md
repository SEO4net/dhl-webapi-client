# dhl-webapi-client

## Generate PHP classes from WSDL
To generate PHP classes from DHL WSDL file we used wsdl2phpgenerator package:
`https://github.com/wsdl2phpgenerator/wsdl2phpgenerator` 

Code to generate classes:
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$generator = new Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config([
        'inputFile' => 'https://dhl24.com.pl/webapi2.html',
        'outputDir' => 'src/Model',
        'namespaceName' => 'DHLClient\Model',
    ])
);
```
