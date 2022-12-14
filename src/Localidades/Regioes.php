<?php

declare(strict_types=1);

namespace Pedrazzi\Ibge\Localidades;

use Pedrazzi\Ibge\Request;

/**
 * API IBGE Regiões
 *
 * @link https://servicodados.ibge.gov.br/api/docs/localidades#api-Regioes
 * 
 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
 * @date 05/10/2022
 */
class Regioes extends Request
{

	protected $module;

	function __construct()
	{
		$this->module = new Request(Config::VERSION);
	}

	/**
	 * Get
	 *
	 * Obtém o conjunto de regiões a partir dos respectivos identificadores
	 * 
	 * Vazio retorna todas regiões.
	 * 
	 * @param string $id "3" or "3|4"
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function get(string $id = ''): void
	{
		$this->module->set(
			'Localidades\Regioes::get',
			"localidades/regioes/$id"
		);
	}
}
