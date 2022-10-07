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

	public function set(string $name, string $url): void
	{
		$this->name = $name;
		$this->url = self::URL_BASE . "/$this->version/$url";
	}

	public function setOrderName(): void
	{
		$this->module->params['orderBy'] = "name";
	}

	public function setNivelado(): void
	{
		$this->module->params['view'] = "nivelado";
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
