<?php

declare(strict_types=1);

namespace Pedrazzi\Ibge;

class Request
{

	const URL_BASE = "https://servicodados.ibge.gov.br/api";

	protected string $name = '';

	protected string $url = '';

	protected array $params = [];

	function __construct(private string $version = '')
	{
	}

	/**
	 * Atualiza a instancia
	 *
	 * @param string $name
	 * @param string $url
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function set(string $name, string $url): void
	{
		$this->name = $name;
		$this->url = self::URL_BASE . "/$this->version/$url";
	}

	/**
	 * Ordena requisição por nome
	 *
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function setOrderName(): void
	{
		$this->module->params['orderBy'] = "name";
	}

	/**
	 * Remove ordem por nome
	 *
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function removeOrderName(): void
	{
		unset($this->module->params['orderBy']);
	}

	/**
	 * Nivela hierarquia JSON da requisição
	 *
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function setNivelado(): void
	{
		$this->module->params['view'] = "nivelado";
	}

	/**
	 * Remove o nivelamento da hierarquia JSON da requisição
	 *
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 07/10/2022
	 */
	public function removeNivelado(): void
	{
		unset($this->module->params['view']);
	}

	/**
	 * Retorna resultado da pesquisa
	 *
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 05/10/2022
	 */
	public function request(): array|object
	{
		$params = empty($this->module->params) ? '' : '?' . http_build_query($this->module->params);
		try {
			$url = $this->module->url . $params;
			return json_decode(file_get_contents($url));
		} catch (\Exception $th) {
			return $th;
		}
	}
}
