<?php 

abstract class Producto {

	protected $codigo;
	protected $precio;


	public function __construct($data) {
		$this->codigo = $data['codigo'];
		$this->precio = $data['precio'];
	} 

	public function getPrecio() {
		return $this->precio;
	}

	public function __get($name) {

		switch ($name) {

			case 'Codigo':
				return $this->codigo;
				break;
			case 'Precio':
				return $this->precio;
		}
	}
}

class TV extends Producto {
	
	private $pulgadas;
	private $tecnologia;

	public function __construct($data) {

		parent::__construct($data); // Llamo al constructor padre
		$this->pulgadas = $data['pulgadas'];
		$this->tecnologia = 'Oled';
	}

	public function __get($name) {

		switch ($name) {

			case 'Pulgadas':
				return $this->pulgadas;
				break;
			case 'Tecnologia':
				return $this->tecnologia;
				break;
			default :
				return parent::__get($name);
		}
	}
}

$data = ["codigo" => 1, "precio" => 123, "pulgadas" => 12, "tecnologia" => "Oled"];
$tv = new TV($data);
echo $tv->Codigo . '<br>';
$tv->Codigo = 5;
echo $tv->Codigo;

echo '<br>' . get_parent_class($tv);
echo '<br>' . is_subclass_of($tv, 'Producto');
?>