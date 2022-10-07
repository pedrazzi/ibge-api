# ibge-api

Biblioteca `PHP` para consulta dos dados da API oficial do IBGE.

>NOTA: a API faz apenas buscas por localidades: estados, cidades, regiões e países.
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

// retorna lista (array) das regiões do Brasil
$regioes = $local::getRegioes()->request();

// retorna lista (array) com todos os países
$paises = $local::getPaises()->request();

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

// 35 código do estado de São Paulo
$local = new Cidades(35);

$ufs = $local->request(); 
```

#### Usando a Classe Regioes

Retorna lista de regiões do Brasil.

```php
require 'vendor/autoload.php';

use Pedrazzi\Ibge\Localidades\Regioes;

$local = new Regioes();

$regioes = $local->request();
```

#### Usando a Classe Paises

Retorna lista de países.

```php
require 'vendor/autoload.php';

use Pedrazzi\Ibge\Localidades\Paises;

$local = new Paises();

$paises = $local->request();
```
