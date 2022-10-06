<?php

namespace Pedrazzi\Ibge\Localidades;

use Pedrazzi\Ibge\Request;
use Pedrazzi\Ibge\Localidades\Config;
use Pedrazzi\Ibge\Localidades\Estados;
use Pedrazzi\Ibge\Localidades\Cidades;

class Localidades extends Request
{

	function __construct()
	{
		$this->module = new Request('Localidades', Config::VERSION);
	}

	public static function getEstados(): object
	{
		return new Estados();
	}

	public static function getCidades(string $id = null): object
	{
		return new Cidades($id);
	}
}
