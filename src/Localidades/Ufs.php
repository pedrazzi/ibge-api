<?php

declare(strict_types=1);

namespace Pedrazzi\Ibge\Localidades;

use Pedrazzi\Ibge\Request;

/**
 * API IBGE Ufs
 * 
 * @link https://servicodados.ibge.gov.br/api/docs/localidades#api-UFs
 * 
 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
 * @date 05/10/2022
 */
class Ufs extends Request
{

	protected $module;

	function __construct()
	{
		$this->module = new Request(Config::VERSION);
	}

	/**
	 * Get
	 *
	 * Obtém o conjunto de Unidades da Federação do Brasil a partir dos respectivos identificadores
	 * 
	 * Vazio retorna todas ufs.
	 * 
	 * @param string $id "35" or "33|35"
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function get(string $id = ''): void
	{
		$this->module->set(
			'Localidades\Ufs::get',
			"localidades/estados/$id"
		);
	}
}
