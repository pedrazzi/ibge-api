<?php

namespace Pedrazzi\Ibge;

class Request
{

	function __construct(
		protected string $name = '',
		protected string $version = 'v1',
		protected string $api = "https://servicodados.ibge.gov.br/api",
		protected string $url  = ""
	) {
	}

	public function setUrl(string $url): void
	{
		$this->url = "$this->api/$this->version/$url";
	}

	/**
	 * Retorna resultado da pesquisa
	 *
	 * @author Fábio Pedrazzi <pedrazzi@hotmail.com>
	 * @date 05/10/2022
	 */
	public function request(): array
	{
		return json_decode(file_get_contents($this->modules->url));
	}
}
