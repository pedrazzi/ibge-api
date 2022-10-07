<?php

namespace Pedrazzi\Ibge\Localidades;

use Pedrazzi\Ibge\Request;
use Pedrazzi\Ibge\Localidades\Config;

/**
 * Retorna lista de paises da API IBGE
 *
 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
 * @date 05/10/2022
 */
class Paises extends Request
{

	protected $modules;

	function __construct()
	{
		$this->modules = new Request('LocalidadesPaises', Config::VERSION);
		$this->modules->setUrl('localidades/paises?orderBy=nome');
	}
}
