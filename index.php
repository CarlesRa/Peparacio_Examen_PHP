<?php 

	#Preparación para el examen de php
	

	#Mostrar información de la versión instalada
	phpinfo();

	#Funciones relacionadas con tipos de datos
	gettype($variable); //-> devuelve el tipo de dato
  	settype($variable, 'nuevo tipo'); //-> cambia el tipo
	isset($variable); //-> Dice si la variable esta definida
	unset($variable); //-> Destruye la variable

	#Constantes
	define("PI", 3.141592); //-> Puden ser (integer, float, string, boolean, null)
	define("ANIMALES", array('perro', 'gato')); //-> Array de constantes

	#Saber si una variable esta vacia
	empty($variable);

	#Fechas y horas (utilizamos la función date())
		#Establecer la zona horaria
			date_default_timezone_set('UTC');

	date($formato, $fechahora); //-> Segundo parámetro es opcional,si no indica la actual

	#Caracteres utilizados par el formateo de fechas
	/*
	d 	Día del mes, 2 dígitos con ceros iniciales 	01 a 31
	D 	Una representación textual de un día, tres letras 	Mon hasta Sun
	j 	Día del mes sin ceros iniciales 	1 a 31
	l ('L' minúscula) 	Una representación textual completa del día de la semana 	Sunday hasta Saturday
	N 	Representación numérica ISO-8601 del día de la semana (añadido en PHP 5.1.0) 	1 (para lunes) hasta 7 (para domingo)
	S 	Sufijo ordinal inglés para el día del mes, 2 caracteres 	st, nd, rd o th. Funciona bien con j
	w 	Representación numérica del día de la semana 	0 (para domingo) hasta 6 (para sábado)
	z 	El día del año (comenzando por 0) 	0 hasta 365
	Semana 	--- 	---
	W 	Número de la semana del año ISO-8601, las semanas comienzan en lunes 	Ejemplo: 42 (la 42ª semana del año)
	Mes 	--- 	---
	F 	Una representación textual completa de un mes, como January o March 	January hasta December
	m 	Representación numérica de un mes, con ceros iniciales 	01 hasta 12
	M 	Una representación textual corta de un mes, tres letras 	Jan hasta Dec
	n 	Representación numérica de un mes, sin ceros iniciales 	1 hasta 12
	t 	Número de días del mes dado 	28 hasta 31
	Año 	--- 	---
	L 	Si es un año bisiesto 	1 si es bisiesto, 0 si no.
	o 	Año según el número de la semana ISO-8601. Esto tiene el mismo valor que Y, excepto que si el número de la semana ISO (W) pertenece al año anterior o siguiente, se usa ese año en su lugar. (añadido en PHP 5.1.0) 	Ejemplos: 1999 o 2003
	Y 	Una representación numérica completa de un año, 4 dígitos 	Ejemplos: 1999 o 2003
	y 	Una representación de dos dígitos de un año 	Ejemplos: 99 o 03
	Hora 	--- 	---
	a 	Ante meridiem y Post meridiem en minúsculas 	am o pm
	A 	Ante meridiem y Post meridiem en mayúsculas 	AM o PM
	B 	Hora Internet 	000 hasta 999
	g 	Formato de 12 horas de una hora sin ceros iniciales 	1 hasta 12
	G 	Formato de 24 horas de una hora sin ceros iniciales 	0 hasta 23
	h 	Formato de 12 horas de una hora con ceros iniciales 	01 hasta 12
	H 	Formato de 24 horas de una hora con ceros iniciales 	00 hasta 23
	i 	Minutos con ceros iniciales 	00 hasta 59
	s 	Segundos con ceros iniciales 	00 hasta 59
	u 	Microsegundos (añadido en PHP 5.2.2). Observe que date() siempre generará 000000 ya que toma un parámetro de tipo integer, mientras que DateTime::format() admite microsegundos si DateTime fue creado con microsegundos. 	Ejemplo: 654321
	v 	Milisegundos (añadido en PHP 7.0.0). La misma observación se aplica para u. 	Example: 654
	Zona Horaria 	--- 	---
	e 	Identificador de zona horaria (añadido en PHP 5.1.0) 	Ejemplos: UTC, GMT, Atlantic/Azores
	I (i mayúscula) 	Si la fecha está en horario de verano o no 	1 si está en horario de verano, 0 si no.
	O 	Diferencia de la hora de Greenwich (GMT) sin colon entre horas y minutos 	Ejemplo: +0200
	P 	Diferencia con la hora de Greenwich (GMT) con dos puntos entre horas y minutos (añadido en PHP 5.1.3) 	Ejemplo: +02:00
	T 	Abreviatura de la zona horaria 	Ejemplos: EST, MDT ...
	Z 	Índice de la zona horaria en segundos. El índice para zonas horarias al oeste de UTC siempre es negativo,
	 		y para aquellas al este de UTC es siempre positivo. 	-43200 hasta 50400
	Fecha/Hora Completa 	--- 	---
	c 	Fecha ISO 8601 (añadido en PHP 5) 	2004-02-12T15:19:21+00:00
	r 	Fecha con formato » RFC 2822 	Ejemplo: Thu, 21 Dec 2000 16:01:07 +0200
	U 	Segundos desde la Época Unix (1 de Enero del 1970 00:00:00 GMT) 	Vea también time()
	*/

	//getdate('CLAVE'); -> Devuelve un array con información sobre la fecha y hora actuales
		#Posibles claves:
		/*
		"seconds" 	Representacion numérica de los segundos 	0 a 59
		"minutes" 	Representacion numérica de los minutos 	0 a 59
		"hours" 	Representacion numérica de las horas 	0 a 23
		"mday" 	Representacion numérica del día del mes 	1 a 31
		"wday" 	Representacion numérica del día de la semana 	0 (para Domingo) hasta 6 (para Sábado)
		"mon" 	Representacion numérica de un mes 	1 hasta 12
		"year" 	Una representacion numérica completa de una año, 4 dígitos 	Ejemplos: 1999 o 2003
		"yday" 	Representacion numérica del día del año 	0 hasta 365
		"weekday" 	Una representación textual completa del día de la semana 	Sunday hasta Saturday
		"month" 	Una representación textual completa de un mes, como January o March 	January hasta December
		0 	Los segundos desde la Época Unix, similar a los valores devueltos por time() y usados por date(). 	Dependiente del Sistema, típicamente -2147483648 hasta 2147483647. 
		*/

	# Variables especiales (superglobals)

	$_SERVER['PHP_SELF']; //guión que se está ejecutando actualmente.
	$_SERVER['SERVER_ADDR']; //dirección IP del servidor web.
	$_SERVER['SERVER_NAME']; //nombre del servidor
	$_SERVER['DOCUMENT_ROOT']; //directorio raíz bajo el que se ejecuta el guión actual.
	$_SERVER['REMOTE_ADDR']; //dirección IP del cliente
	$_SERVER['REQUEST_METHOD']; //método utilizado para acceder a la página ('GET','POST','HEAD','PUT')

	# Funciones (pasar valor por referencia)
	function nombre_funcion(&$nombre_valor){}

	#Arrays
	$semana = array('Lunes','Martes');
	$semana = ['Lunes', 'Martes'];

		#Array numérico
		$modulos = array(0 => "Programación", 1 => "Bases de datos");
		#Array Asociativo
		$modulos = array("PR" => "Programación", "BD" => "Bases de datos"); 
				/*acceder*/ $modulos["BD"];
		#Arrays multidimensionales
		$amigos = array(array('Alejandro',20), array('Cesar', 32));

			#Array multidimensional asociativo
			$cilos = array("DAM" => array("PR" => "Programación", "BD" => "Bases de datos"),
										 "DAW" => array("PR" => "Programación", "BD" => "Bases de datos"));

		#Recorrer Arrays (foreach) se puede recorrer elementos o elementos-valores Clave

			#Solo elementos
				foreach($modulos as $modulo) {
					
				}
			#elementos y clave
				foreach($modulos as $key => $value) {

				}

		#Recorrer Arrays (otras formas)
		$resultado = reset($array); //situa el puntero interne al comienzo del array.
		$resultado = next($array); //Avanza el putero una posición.
		$resultado = prev($array); //Retrocede el puntero una posición.
		$resultado = end($array); //Situa el puntero al final del array.
		$resultado = current($array); //Devuelve el puntero en la posicion actual.
		$resultado = key($array); //Devuelve la clave en la posición actual.

		#Funciones relacionadas con arrays
		print_r($array); //imprime el array como un string
		unset($array[2]); //Elimina el elemento del array
		$nuevo_array = array_values($array); //Devuelve una copia del array sin alterar los índices numéricos.
		is_array($array); //Comprueba si el parámetro es un array
		count($array); //Devuelve el numero de elementos (equivalente a .length())
		in_array($elemento_a_buscar, $array); //Busca un elemento concreto dentro de un array. 
		array_search($elemento_a_buscar, $array); //Lo mismo que in_array pero devuelve la clave y false si lo encuentra.
		sort($array); //Ordena los elementos del array alfabéticamente
		sort($array); //Ordena los elementos del array alfabéticamente en orden inverso
		asort($array); //Ordena un array asociativo manteniendo la correlación de los indices.
		
	#Formularios

		#Ejemplo formulario 

		#html side
	?>
		<form action="" method="post">

      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" placeholder="Escriba su nombre" 
        value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']?>">
        <?php  
          if (isset($_POST['enviar']) && empty($_POST['nombre'])) {
            echo"<span style='color:red;'> Debe introducir un nombre!</span>";
          }
        ?>
      <br/>

      <label for="comidas">Comidas preferentes:</label>

      <label for="carne">Carne</label>
      <input type="checkbox" name="comidas[]" id="carne" value="Carne" 
      <?php 
        if ($_POST['comidas']) 
          if (in_array('Carne', $_POST['comidas'])) echo 'checked'  
      ?>>

      <label for="verdura">Verdura</label>
      <input type="checkbox" name="comidas[]" id="verdura" value="Verdura" 
      <?php 
        if ($_POST['comidas']) 
          if (in_array('Verdura', $_POST['comidas'])) echo 'checked'  
      ?>>

      <label for="legumbres">Legumbres</label>
      <input type="checkbox" name="comidas[]" value="Legumbres"
      <?php 
        if ($_POST['comidas']) 
          if (in_array('Legumbres', $_POST['comidas'])) echo 'checked'  
      ?>><br/>
      <?php 

        if (isset($_POST['enviar']) && empty($_POST['comidas'])) {
          echo"<span style='color:red;'>Debe marcar alguna opción!<br/></span>";
        }
      
      ?>

      <label for="motivo">¿Por que le gustaría viajar a Marte?</label><br>
      <textarea name="motivo" cols="30" rows="5" placeholder="Explique el motivo...">
        <?php 
          if(strlen(trim($_POST['motivo']))) {
            echo $_POST['motivo'];
          } 
        ?>
      </textarea>
      <?php 
        if (isset($_POST['enviar']) && !strlen(trim($_POST['motivo']))) {
          echo"<span style='color:red;'> Debe introducir un motivo!</span>";
        }
      ?>
      <br>

      <div class="boton">
        <input name="enviar" type="submit" value="Enviar">
      </div>
		</form>
	<?php	

		#Recoger valores del formulario

		#POST
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];

		#GET
		
		$nombre = $_GET['nombre'];
		$apellidos = $_GET['apellidos'];
		

		#Inputs con varios elementos (checkboxes) html side
		?>
		<input type="checkbox" name="optativas[]" value="log" checked>lógica
		<input type="checkbox" name="optativas[]" value="fra">francés 
		<input type="checkbox" name="optativas[]" value="inf">informática 
		<?php

		#Input button

		#html side
		?>
		<input type="button" name="actualizar" value="actualizar datos">
		<?php
		#php side
		
		if(isset($_POST['actualizar'])) {
			echo "se ha pulsado el botón actualizar";
		}

		

		#Select simple

		#html side
		
		?>
		calificación: <select name="calificacion">
										<optionvalue="nopresentado" selected>no presentado</option>
										<optionvalue="noapto">no apto</option>
										<optionvalue="apto">apto</option>
									</select>
		<?php
		#php side
		
		$calificacion= $_POST['calificacion'];
		echo $calificacion;
		

		#Select multiple

		#html side
		?>
		<select multiple size="4" name="idiomas[]">
			<option value="valenciano" selected>valenciano</option>
			<option value="frances">francés</option>
			<option value="ingles">ingles</option>
		</select>
		<?php
		#php side
		
		$idiomas = $_POST['idiomas'];
		foreach($idiomas as $idioma)
			echo '$idioma<br>';
		

		#Introducir los valores que son correctos en los inputs
		?>
		Nombre del alumno:<input type="text" name="nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']; ?>" />
		
		#Poner check en los checkbox elegidos 
		<input type="checkbox" name="modulos[]" value="DWES" <?php if(in_array("DWES", $_POST['modulos'])) echo "checked";?>/>
		<?php

	#POO

		#Definición de clases
		
		
		class Producto {
			
			private $codigo; //No se puede acceder de fuera de la clase
			public $nombre; //Se puede acceder
			public $pvp; //se puede acceder
		}
		

		# Creacción de objeto y Acceder atributos
		
		$producto = new Producto($atributos);
		$producto->nombre; //retorna el nombre
		

		#Imprimir objetos
		echo $objeto_a_imprimir;

		#getters y setters básicos

		
		function setCodigo($codigo) {
			$this->codigo = $codigo;
		}

		function getCodigo($codigo) {
			return $this->$codigo;
		}

		#getters y setters mágicos

		class Producto {

			private $precio;
			private $descripcion;

			function __set($name, $value) {
			
				switch ($name) {
	
					case 'Precio':
						$this->precio = $value;
						break;
					case 'Descripcion':
						$this->descripcion = $value;
						break;
				}
			}

			function __get($name) {

				switch ($name) {

					case 'Precio':
						return $this->precio;
						break;
					case 'Descripcion':
						return $this->descripcion;
						break;
				}
			}
		}

		$p = new Producto();
		$p->Precio = 23; //Setea el precio a 23
		$precio = $p->precio; //Devuelve el precio


		
		

		#Contastes de clases

		
		class Producto {

			const REFERENCIA_BASE = 'prod-';
		}
		

		#Atributos estáticos

		
		class Producto {

			public static $precio = 1.20;
		}

		if (Producto::$precio < 1.50) {}
		

		#Métodos estáticos
		
		class Producto {

			private static $precio = 12;

			public static function saluda() {
				return self::$precio;
			}
		}

		echo Producto::saluda();
		

		#Constructores
		
		class Producto {

			private static $num_productos = 0;
			private $codigo;

			public function __construct() {
				self::$num_productos++; 
			}
		}

		class Producto {

			private static $num_productos = 0;
			private $codigo;

			public function __construct($codigo) {
				self::$num_productos++; 
				$this->codigo = $codigo;
			}
		}
		
		#Destructores
		
		class Producto {

			private static $num_productos = 0;
			private $codigo;

			public function __construct($codigo) {
				self::$num_productos++; 
				$this->codigo = $codigo;
			}

			public function __destruct() {
				self::$num_productos--;
			}
		}
		

		#Funciones útiles para el desarrollo POO

		if ($p instanceof Producto){} //Determina si p es un Producto
		get_class($objeto); //devuelve el nombre de la clase
		class_exists('Producto'); // Devuelve si la clase esta definida :boolean
		get_declared_classes(); // Devuelve un array con el nombre de las clases.
		class_alias('Producto', 'Articulo'); // Crea un alias para una clase.
		get_class_methods('Producto'); //Devuelve un array con los métodos de la clase.
		get_object_vars('Producto'); //Devuelve un array con el nombre de los atributos de una clase.

		#Copiar objetos (clone)

		$p = new Producto();
		$a = clone($p);

		#Sobrescribir el método clone en la Clase

		class Agenda {

			private $contactos;

			public function __clone() {
				foreach ($this->contactos as $key => $contacto) {
				 $this->contactos[$key] = clone $contacto;
				}
			}

		}

		#Comparar objetos

		$p = new Producto();
		$a = clone($p);

		if ($p == $a){} //true
		if ($p === $a){} //false porque no apunta a la misma dirección de memoria.

		#Herencia

		abstract class Producto {

			protected $codigo;
			protected $precio;
		
		
			protected function __construct($data) {
				$this->codigo = $data['codigo'];
				$this->precio = $data['precio'];
			} 
		
			protected function __get($name) {
		
				switch ($name) {
		
					case 'Codigo':
						return $this->codigo;
						break;
					case 'Precio':
						return $this->precio;
				}
			}

			protected function __set($name, $value) {
		
				switch ($name) {
		
					case 'Codigo':
						$this->codigo = $value;
						break;
					case 'Precio':
						$this->precio = $value;
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

			public function __set($name, $value) {
		
				parent::__set($name, $value);
				switch ($name) {
		
					case 'Pulgadas':
						$this->pulgadas = $value;
						break;
					case 'Tecnologia':
						$this->tecnologia = $value;
						break;
				}
			}
		}
		
		$data = ["codigo" => 1, "precio" => 123, "pulgadas" => 12, "tecnologia" => "Oled"]; 
		$tv = new TV($data); //Le pasamos array asociativo con el nombre de los atributos.
		echo $tv->Codigo; //Utilizo el get
		$tv->Codigo = 5; //Utilizo el set
		echo $tv->Codigo; //Utilizo el get

		#Metodos Herencia

		get_parent_class($objeto); //Devuelve el nombre de la clase Padre
		is_subclass_of($objeto, 'Nombre_Clase_Padre'); //Devuelve true si es hijo o false si no.

	
		#Interfaces

		//Se puede utilizar para herencia multiple
		interface iProducto {
			//Todos los métodos deben ser públicos
			public function muestraProducto();
		}
	
		class Tv extends Producto implements iMuestra {

			//Al implementar la interfaz estamos obligados a sobreescribir los métodos
		}

		#Herencia de interfaces

		interface iA {
			public function foo();
		}

		interface iB extends iA {
			public function baz(Baz $baz);
		}
?>