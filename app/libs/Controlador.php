<?php
/**
 * 
 */
class Controlador
{

//esta funcion nos dice que carpeta vamos a requerir en este caso nos llama a lo que esta en modelo
//Y nos manda el valor como una direccion
public function modelo($modelo)
{
	require_once("../app/Model/".$modelo.".php");
	return new $modelo();
}

//Esta funcion nos manda a una pagina de acuerdo a los datos y a la vista
public function vista($vista,$data=[])
{
	if (file_exists("../app/View/Brigada/".$vista.".php"))
	{
		require_once("../app/View/Brigada/".$vista.".php");
	}
	else
	{
		die("La vista no existe");
	}
}
}
class Brande
{

//esta funcion nos dice que carpeta vamos a requerir en este caso nos llama a lo que esta en modelo
//Y nos manda el valor como una direccion
public function modelbran($modelo)
{
	require_once("../app/Model/".$modelo.".php");
	return new $modelo();
}

//Esta funcion nos manda a una pagina de acuerdo a los datos y a la vista
public function vistabran($vista,$data=[])
{
	if (file_exists("../app/View/Brigada/brand/".$vista.".php"))
	{
		require_once("../app/View/Brigada/brand/".$vista.".php");
	}
	else
	{
		die("La vista no existe");
	}
}
}
?>