<?php
		namespace MultipleChoice;
		require_once __DIR__ . '/../vendor/autoload.php';
		use Symfony\Component\Yaml\Yaml;
	class generador{
		protected $cantPreguntas;
		protected $preguntas;
			public function __construct($cantPreguntas = 12){
			public function __construct($file){
				$this->preguntas = Yaml::parseFile($file);	
		    	}

		   	public function getCantPreguntas(){
			return count($this->preguntas);
		    	}

			public function Tomarpreguntas(){
        		$this->preguntas = $this->mezclar($this->preguntas['preguntas'],$this->getCantPreguntas());
    			}

    		public function mezclar($array, $cant){
        		shuffle($array);
        		for($i = count($array);$i>$cant;$i--){
            		array_pop($array);
       			}
        		return $array;
   			 }
}
