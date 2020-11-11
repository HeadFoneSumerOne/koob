<?php
/**
 * 
 */
class User
{
	public $teste;
	function __construct($titulo, $ano)
	{
		$this->teste = $titulo;
	}

	public function julia($arg){
		if($arg = 1){
			echo $this->teste;	
		} else {
			echo "Argumento Errado.";
		}
		
	}
}
?>