# ibge-api

Bibliote para consulta dos dados da API oficial do IBGE.

>NOTA: inicialmente a API só faz requisições de localidades (Estados e Municípios).
Em breve serão implantadas novas requisições.

## Instalação

Execute o seguinte comando para instalar esta biblioteca:

```bash
$ composer require pedrazzi/ibge-api
```

## Como utilizar

Você deve adicionar o autoload.php do composer no seu arquivo PHP.

```php
require 'vendor/autoload.php';
```

#### Usando a Classe Localidades
Nessa classe você pode instanciar tanto a classe `Estados`, quanto a classe `Cidades`.
```php
require 'vendor/autoload.php';

use Pedrazzi\Ibge\Localidades\Localidades;

$local = new Localidades();

// retorna lista (array) dos estados brasileiros
$ufs = $local::getEstados()->request(); 

// retorna lista (array) de cidades do estado de São Paulo (código 35)
$citys = $local::getCidades(35)->request(); 
```

#### Usando a Classe Estados
Retorna lista de estados.
```php
require 'vendor/autoload.php';

use Pedrazzi\Ibge\Localidades\Estados;

$local = new Estados();

$ufs = $local->request(); 
```

#### Usando a Classe Cidades
Retorna lista de cidades.
```php
require 'vendor/autoload.php';

use Pedrazzi\Ibge\Localidades\Cidades;

$local = new Cidades();

$ufs = $local->request(); 
```