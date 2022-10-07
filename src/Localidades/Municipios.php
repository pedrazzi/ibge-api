<?php

declare(strict_types=1);

namespace Pedrazzi\Ibge\Localidades;

use Pedrazzi\Ibge\Request;

/**
 * API IBGE Municípios
 * 
 * @link https://servicodados.ibge.gov.br/api/docs/localidades#api-Municipios
 * 
 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
 * @date 05/10/2022
 */
class Municipios extends Request
{

	const NAME = 'Localidades\Municipios::';

	protected object $module;

	protected string $name;

	function __construct()
	{
		$this->module = new Request(Config::VERSION);
	}

	/**
	 * Municípios por UF
	 *
	 * Obtém o conjunto de municípios do Brasil a partir da $id das Unidades da Federação
	 * 
	 * @param string $id "35" or "35|12"
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function uf(string $id = '35'): void
	{
		$this->module->set(
			self::NAME . 'uf',
			"localidades/estados/$id/municipios"
		);
	}

	/**
	 * Municípios
	 * 
	 * Obtém o conjunto de municípios do Brasil.
	 * 
	 * Vazio retorna todos municípios.
	 * 
	 * @param string $id "", "1600303" or "1600303|3201209"
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function municipios(string $id = ''): void
	{
		$this->module->set(
			self::NAME . 'municipios',
			"localidades/municipios/$id"
		);
	}

	/**
	 * Municípios por mesorregião
	 *
	 * Obtém o conjunto de municípios do Brasil a partir das $id das mesorregiões
	 * 
	 * @param string $id "3301" or "3301|3302"
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function mesorregioes(string $id = '3301'): void
	{
		$this->module->set(
			self::NAME . 'mesorregioes',
			"localidades/mesorregioes/$id/municipios"
		);
	}

	/**
	 * Municípios por microrregião
	 *
	 * Obtém o conjunto de municípios do Brasil a partir das $id das microrregiões
	 * 
	 * @param string $id "33001" or "33001|33005"
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */	public function microrregioes(string $id = '33001'): void
	{
		$this->module->set(
			self::NAME . 'microrregioes',
			"localidades/microrregioes/$id/municipios"
		);
	}

	/**
	 * Municípios por região imediata
	 *
	 * Obtém o conjunto de municípios do Brasil a partir das $id das regiões imediatas
	 * 
	 * @param string $id "320005", "320005|320007"
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */	public function regioesImediatas(string $id = '320005'): void
	{
		$this->module->set(
			self::NAME . 'regioesImediatas',
			"localidades/regioes-imediatas/$id/municipios"
		);
	}

	/**
	 * Municípios por região intermediária
	 *
	 * Obtém o conjunto de municípios do Brasil a partir das $id das regiões intermediárias
	 * 
	 * @param string $id "5206", "5206|5105"
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */	public function regioesIntermediarias(string $id = '5206'): void
	{
		$this->module->set(
			self::NAME . 'regioesIntermediarias',
			"localidades/regioes-intermediarias/$id/municipios"
		);
	}

	/**
	 * Municípios por região
	 *
	 * Obtém o conjunto de municípios do Brasil a partir das $id das regiões
	 * 
	 * @param string $id "3", "3|4"
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */	public function regioes(string $id = '3'): void
	{
		$this->module->set(
			self::NAME . 'regioes',
			"localidades/regioes/$id/municipios"
		);
	}
}
