<?php
/**
 * 
 */
class Control
{
	protected $controlador="tablas";
	protected $metodo = "index";
	protected $parametros = [];

	function __construct()
	{
		$url = $this-> separarURL();
		//var_dump($url);
		if ($url!= "" && file_exists("../app/Controller/".ucwords($url[0]).".php")) 
		{
			$this->controlador=ucwords($url[0]);
			unset($url[0]);
		}

		require_once("../app/Controller/".ucwords($this->controlador).".php");
		$this->controlador = new $this->controlador;

		//Iniciamos el Metodo
		if (isset($url[1]))
		{
			if (method_exists($this->controlador,$url[1]))
			{
				$this->metodo=$url[1];
				unset($url[1]);
			}
		}

		$this->parametros = $url ? array_values($url) : [];

		call_user_func_array([$this->controlador, $this->metodo], $this->parametros);
	}

	private function separarURL()
	{
		$url="";
		if (isset($_GET["url"]))
		{
			//Eliminar la ultima diagonal /
			$url = rtrim($_GET["url"],"/");
			//Limpiamos la direccion de caracteres ajenos a la URL
			$url = filter_var($url, FILTER_SANITIZE_URL);
			//Separamos en un arreglo
			$url = explode("/", $url);
		}
		return $url;
	}
}
?>