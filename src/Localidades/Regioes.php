<?php

namespace Pedrazzi\Ibge\Localidades;

use Pedrazzi\Ibge\Request;
use Pedrazzi\Ibge\Localidades\Config;

/**
 * Retorna lista de regios da API IBGE
 *
 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
 * @date 05/10/2022
 */
class Regioes extends Request
{

	protected $modules;

	function __construct()
	{
		$this->modules = new Request('LocalidadesPaises', Config::VERSION);
		$this->modules->setUrl('localidades/regioes?orderBy=nome');
	}
}
