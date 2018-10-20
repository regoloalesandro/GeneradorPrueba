<?php
		namespace GeneradorPrueba;
		require_once __DIR__ . '/../vendor/autoload.php';
		use Symfony\Component\Yaml\Yaml;
	class generador{
	 protected $preguntasYaml;
  	 protected $yaml;
     protected $lecturaYaml;
     protected $preguntas = [];
     public function __construct($archivo){
   		$this->yaml = new Parser();
    	$this->value = $this->yaml->parse(file_get_contents('/home/ignaciopetru/Descargas/preguntas.yml'));
    	$this->preguntasYaml = $this->value['preguntas'];
  		}
  	public function crearPreguntas(){
    	$cantPreguntas = count($this->preguntasYaml);
   		for ($i=0; $i < $cantPreguntas; $i++) {
      		$this->preguntas[$i] = new Pregunta ($this->preguntasYaml[$i]);
    	}
    	echo var_dump( $this->preguntas);
  	}

	
	public function mezclar(){
       		shuffle($this->preguntas);
	}
