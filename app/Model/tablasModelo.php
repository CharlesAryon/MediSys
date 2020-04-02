<?php
	/**
	 * 
	 */
	class tablasModelo
	{
		private $db;

		function __construct()
		{
			//Llama a la conexion sin necesidad de instanciarla
			$this->db = new MySQLdb();
		}
		//Tomamos los datos de la tabla
		public function getData()
		{
			$data = $this->db->querySelect("SELECT * FROM items");
			return $data;
		}

		public function getDat($id)
		{
			$data = $this->db->querySelect("SELECT * FROM items WHERE item_id=".$id);
			return $data;
		}
		public function insertarMed($codigo,$nombre,$imagen,$presentacion,$contenido,$marca)
		{
			var_dump($codigo,$nombre,$imagen,$presentacion,$contenido,$marca);
			$sql="INSERT INTO items VALUES (0,'".$codigo."','".$nombre."','".$imagen."','".$presentacion."','".$contenido."','".$marca."')";
			if ($this->db->queryNoSelect($sql)) 
			{
				header("location:".RUTA_APP."tablas");
				exit();
			} else 
			{
				exit("Error al Insertar carnal");
			}
			
		}
		public function modificarMed($id,$codigo,$nombre,$imagen,$presentacion,$contenido,$marca)
		{
			var_dump($id,$codigo,$nombre,$imagen,$presentacion,$contenido,$marca);
			$sql="UPDATE items SET item_code = '".$codigo."',item_name = '".$nombre."',item_picture = '".$imagen."',presentation_id = '".$presentacion."',item_content = '".$contenido."',brand_id = '".$marca."' WHERE item_id=".$id;
			if ($this->db->queryNoSelect($sql))
			{
				header("location:".RUTA_APP."tablas");
				exit();
			} else 
			{
				exit("Error al Modificar carnal");
			}
			
		}
		public function borrarMed($id)
		{
			$sql="DELETE FROM items WHERE item_id=".$id;
			if ($this->db->queryNoSelect($sql)) 
			{
				header("location:".RUTA_APP."tablas");
				exit();
			} else 
			{
				exit("Error al Borrar carnal");
			}
			
		}
	}

	class tablasbrand
	{
		private $db;

		function __construct()
		{
			//Llama a la conexion sin necesidad de instanciarla
			$this->db = new MySQLdb();
		}
		//Tomamos los datos de la tabla
		public function getBrands()
		{
			$data = $this->db->querySelect("SELECT * FROM brand");
			return $data;
		}

		public function getBrand($id)
		{
			$data = $this->db->querySelect("SELECT * FROM Brand WHERE item_id=".$id);
			return $data;
		}
		public function insertarMarca($codigo,$nombre,$imagen,$presentacion,$contenido,$marca)
		{
			var_dump($codigo,$nombre,$imagen,$presentacion,$contenido,$marca);
			$sql="INSERT INTO items VALUES (0,'".$codigo."','".$nombre."','".$imagen."','".$presentacion."','".$contenido."','".$marca."')";
			if ($this->db->queryNoSelect($sql)) 
			{
				header("location:".RUTA_APP."tablas");
				exit();
			} else 
			{
				exit("Error al Insertar carnal");
			}
			
		}
		public function modificarMarca($id,$codigo,$nombre,$imagen,$presentacion,$contenido,$marca)
		{
			var_dump($id,$codigo,$nombre,$imagen,$presentacion,$contenido,$marca);
			$sql="UPDATE items SET item_code = '".$codigo."',item_name = '".$nombre."',item_picture = '".$imagen."',presentation_id = '".$presentacion."',item_content = '".$contenido."',brand_id = '".$marca."' WHERE item_id=".$id;
			if ($this->db->queryNoSelect($sql))
			{
				header("location:".RUTA_APP."tablas");
				exit();
			} else 
			{
				exit("Error al Modificar carnal");
			}
			
		}
		public function borrarLibros($id)
		{
			$sql="DELETE FROM items WHERE item_id=".$id;
			if ($this->db->queryNoSelect($sql)) 
			{
				header("location:".RUTA_APP."tablas");
				exit();
			} else 
			{
				exit("Error al Borrar carnal");
			}
			
		}
	}

?>