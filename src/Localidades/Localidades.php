<?php

namespace Pedrazzi\Ibge\Localidades;

use Pedrazzi\Ibge\Request;
use Pedrazzi\Ibge\Localidades\{Config, Estados, Cidades, Paises, Regioes};

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

	public static function getCidades(string $id = 35): object
	{
		return new Cidades($id);
	}

	public static function getPaises(): object
	{
		return new Paises();
	}

	public static function Regioes(): object
	{
		return new Regioes();
	}
}
