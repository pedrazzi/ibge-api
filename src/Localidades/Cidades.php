<?php

namespace Pedrazzi\Ibge\Localidades;

use Pedrazzi\Ibge\Request;
use Pedrazzi\Ibge\Localidades\Config;

/**
 * Retorna lista de cidades da API IBGE
 * 
 * @param string $id da estado
 * 
 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
 * @date 05/10/2022
 */
class Cidades extends Request
{

	protected $modules;

	function __construct(string $id = null)
	{
		$this->modules = new Request('LocalidadesCidades', Config::VERSION);
		$this->modules->setUrl("localidades/estados/$id/municipios");
	}
}
