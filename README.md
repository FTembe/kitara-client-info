# Getting The Client Information

This packet uses information from the User-Agent HTTP header sent by the client's browser to extract information about the browser, operating system,  device and other information used by the user to access the website.

The package may provide information such as browser name and version, operating system, device architecture, device type, and preferred language.


### Installation

To install this package no can use composer

```bash
composer require ftembe/client-info
```

### Usage
```php 
require('vendor/autoload.php');

use Kitara\Client;

$client = new Client;

echo $post_id;
echo $client->ip;
echo $client->browser;
echo $client->device;
echo $client->plataform;
echo $client->country['CountryName'];
echo $client->country['ContinentName'];
echo $client->country['Latitude'];
echo $client->country['Longitude'];
echo $client->country['Timezone'];

```

