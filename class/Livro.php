<?php
/**
 * 
 */
class Livro extends Base
{

	private $tabela = 'tb_livro';
	private $id_livro;
	private $autor;
	private $editora;
	private $genero;
	private $isbn;
	private $imagem;

	public function livros(){
		$consulta = "SELECT * FROM `$this->tabela`";
		$resultado = Parent::pegar_dados($consulta);
		return $resultado;
	}

	public function busca($campo, $palavra){
		// $palavra = '"%'.$palavra.'%"';
		$consulta = "SELECT * FROM `$this->tabela` WHERE `$campo` LIKE '%$palavra%'";
		$resultado = Parent::pegar_dados($consulta);
		return $resultado;
	}

	public function filtro($campo, $palavra){
		// $palavra = '"%'.$palavra.'%"';
		$consulta = "SELECT * FROM `$this->tabela` WHERE `$campo` = '$palavra'";
		$resultado = Parent::pegar_dados($consulta);
		return $resultado;
	}
}
?>