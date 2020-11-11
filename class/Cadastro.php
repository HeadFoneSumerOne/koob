<?php
/**
 * 
 */
class Cadastro extends Base
{

	private $tabela = 'tb_cadastro';
	private $id;
	private $nome;
	private $sobrenome;
	private $email;
	private $senha;

	public function usuarios(){
		$consulta = "SELECT * FROM `$this->tabela`";
		$resultado = Parent::pegar_dados($consulta);
		return $resultado;
	}

	public function cadastrar($nome, $sobrenome, $email, $senha){
		$consulta = "INSERT INTO `$this->tabela` VALUES(null,?,?,?,?)";
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->email = $email;
		$this->senha = $senha;
		$par = [$this->nome, $this->sobrenome, $this->email, $this->senha];
		$resultado = Parent::novos_dados($consulta,$par);
	}
}
?>