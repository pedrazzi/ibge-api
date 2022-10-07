<?php

declare(strict_types=1);

namespace Pedrazzi\Ibge\Localidades;

use Pedrazzi\Ibge\Request;

/**
 * API IBGE Países
 * 
 * @link https://servicodados.ibge.gov.br/api/docs/localidades#api-Paises-paisesGet
 * 
 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
 * @date 05/10/2022
 */
class Paises extends Request
{

	protected $module;

	function __construct()
	{
		$this->module = new Request(Config::VERSION);
	}

	/**
	 * Get
	 *
	 * Obtém o conjunto de países a partir dos respectivos identificadores
	 * 
	 * Vazio retorna todos paises.
	 * 
	 * @param string $id "76" or "32|76"
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function get(string $id = ''): void
	{
		$this->module->set(
			'Localidades\Paises::get',
			"localidades/paises/$id"
		);
	}
}
