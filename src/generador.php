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
			
			}
			
		
}
