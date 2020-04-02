<?php
/**
 * 
 */
class tablas extends Controlador
{
	//Esta variable realiza
	private $modelo;
	
	//El constructor asigna el valor de libros llamando a la funcion modelo en el codigo del libs/Controlador.php
	function __construct()
	{
		$this->modelo = $this->modelo("tablasModelo");
	}

	//La funcion index nos recolecta los datos y nos manda a la pagina
	public function index()
	{
		//nos asigna los valores de la taba con la funcion que esta en model/librosmodelo
		$data = $this->modelo->getData();
		//Llamamos a la vista
		$this->vista("MedicamentosVista",$data);
	}

	public function modificar($id="")
	{

		if ($_SERVER['REQUEST_METHOD']=="POST") 
		{
			$id = isset($_POST['item_id'])?$_POST['item_id']:"";
			$codigo = isset($_POST['code'])?$_POST['code']:"";
			$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
			$imagen = isset($_POST['imagen'])?$_POST['imagen']:"";
			$presentacion = isset($_POST['presentacion'])?$_POST['presentacion']:"";
			$contenido = isset($_POST['contenido'])?$_POST['contenido']:"";
			$marca = isset($_POST['marca'])?$_POST['marca']:"";
			$this->modelo->modificarMed($id,$codigo,$nombre,$imagen,$presentacion,$contenido,$marca);
		}
		else
		{
			$data = $this->modelo->getDat($id);
			$datos = [
				"item_id"=>$id,"item_code" => $data[0]["item_code"],"item_name" => $data[0]["item_name"], "item_picture" => $data[0]["item_picture"],"presentation_id" => $data[0]["presentation_id"],"item_content" => $data[0]["item_content"],"brand_id" => $data[0]["brand_id"]
			];
			$this->vista("MedicamentosModificar",$datos);
		}
	}

	public function borrar($id="")
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") 
		{
			$id = isset($_POST['item_id'])?$_POST['item_id']:"";
			$this->modelo->borrarMed($id);
			
		}
		else
		{
			$data = $this->modelo->getDat($id);
			$datos = [
				"item_id"=>$id,"item_code" => $data[0]["item_code"],"item_name" => $data[0]["item_name"], "item_picture" => $data[0]["item_picture"],"presentation_id" => $data[0]["presentation_id"],"item_content" => $data[0]["item_content"],"brand_id" => $data[0]["brand_id"]
			];
			$this->vista("MedicamentosBorrar",$datos);
		}
	}

	public function alta()
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") 
		{
			$codigo = isset($_POST['code'])?$_POST['code']:"";
			$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
			$imagen = isset($_POST['imagen'])?$_POST['imagen']:"";
			$presentacion = isset($_POST['presentacion'])?$_POST['presentacion']:"";
			$contenido = isset($_POST['contenido'])?$_POST['contenido']:"";
			$marca = isset($_POST['marca'])?$_POST['marca']:"";
			$this->modelo->insertarMed($codigo,$nombre,$imagen,$presentacion,$contenido,$marca);
		}
		else
		{
			$this->vista("MedicamentosAlta");
		}
	}
}

class brand extends Brande
{
	//Esta variable realiza
	private $modelo;
	
	//El constructor asigna el valor de libros llamando a la funcion modelo en el codigo del libs/Controlador.php
	function __construct()
	{
		$this->modelo = $this->modelbran("tablasbrand");
	}

	//La funcion index nos recolecta los datos y nos manda a la pagina
	public function index2()
	{
		//nos asigna los valores de la taba con la funcion que esta en model/librosmodelo
		$data = $this->modelo->getBrands();
		//Llamamos a la vista
		$this->vistabrand("BrandVista",$data);
	}

	public function modificar($id="")
	{

		if ($_SERVER['REQUEST_METHOD']=="POST") 
		{
			$id = isset($_POST['brand_id'])?$_POST['brand_id']:"";
			$marca = isset($_POST['brand_name'])?$_POST['brand_name']:"";
			$this->modelo->modificarMarca($id,$marca);
		}
		else
		{
			$data = $this->modelo->getBrand($id);
			$datos = [
				"brand_id"=>$id,
				"brand_name" => $data[0]["brand_name"]
			];
			$this->vistabrand("brandModificar",$datos);
		}
	}

	public function borrar($id="")
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") 
		{
			$id = isset($_POST['brand_id'])?$_POST['brand_id']:"";
			$this->modelo->borrarLibros($id);
			
		}
		else
		{
			$data = $this->modelo->getBrand($id);
			$datos = [
				"brand_id"=>$id,
				"brand_name" => $data[0]["brand_name"]
			];
			$this->vistabrand("BrandBorrar",$datos);
		}
	}

	public function alta()
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") 
		{
			$codigo = isset($_POST['code'])?$_POST['code']:"";
			$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
			$imagen = isset($_POST['imagen'])?$_POST['imagen']:"";
			$presentacion = isset($_POST['presentacion'])?$_POST['presentacion']:"";
			$contenido = isset($_POST['contenido'])?$_POST['contenido']:"";
			$marca = isset($_POST['marca'])?$_POST['marca']:"";
			$this->modelo->insertarMarca($codigo,$nombre,$imagen,$presentacion,$contenido,$marca);
		}
		else
		{
			$this->vistabrand("BrandAlta");
		}
	}
}

?>