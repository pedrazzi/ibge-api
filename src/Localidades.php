<?php

declare(strict_types=1);

namespace Pedrazzi\Ibge;

use Pedrazzi\Ibge\Localidades\{Config, Municipios, Paises, Regioes, Ufs};

/**
 * Localidades
 *
 * @link https://servicodados.ibge.gov.br/api/docs/localidades
 * 
 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
 * @date 06/10/2022
 * 
 */
class Localidades extends Request
{
	protected $module;

	function __construct()
	{
		$this->module = new Request(Config::VERSION);
	}

	public static function Ufs(): object
	{
		return new Ufs();
	}

	public static function Municipios(): object
	{
		return new Municipios();
	}

	public static function Paises(): object
	{
		return new Paises();
	}

	public static function Regioes(): object
	{
		return new Regioes();
	}
}
