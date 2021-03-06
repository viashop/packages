<?php
/**
 * @brief	Biblioteca Correios
 * @details	Classes e interfaces para integração com a API do Correios
 * @package Correios\Calculos\Ect
 */

namespace Correios\Calculos\Ect;
use Correios\Calculos\Http\HTTPConnection as HTTPConnection;
use Correios\Calculos\Http\HTTPCookieManager as HTTPCookieManager;

/**
 * @brief	Interface para APIs dos Correios (ECT)
 */

abstract class EctAPI {
	/**
	 * @var	ECT
	 */
	protected $ect;

	/**
	 * @var	HTTPConnection
	 */
	protected $httpConnection;

	/**
	 * @brief	Constroi o objeto que representa uma API do Correios
	 * @param	ECT $ect
	 */
	public function __construct( ECT $ect ) {
		$this->ect = $ect;
		$this->httpConnection = $ect->getHTTPConnection();
		$this->httpConnection->initialize( $this->getTargetHost() );
	}

	/**
	 * @brief	Recupera o host onde serão feitas as requisições
	 * @return	string
	 */
	public abstract function getTargetHost();
}