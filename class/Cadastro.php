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

	private $compara_senha = false;
	private $compara_email = false;

	public function usuarios(){
		$consulta = "SELECT * FROM `$this->tabela`";
		$resultado = Parent::pegar_dados($consulta);
		return $resultado;
	}

	public function usuario_logado($email){
		$consulta = "SELECT * FROM `$this->tabela` WHERE email = ?";
		$par = [$email];
		$resultado = Parent::pegar_dados($consulta,$par);
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

	public function login($email, $senha){
		$consulta = "SELECT nome, email, senha FROM `$this->tabela` WHERE email = ?";
		$par = [$email];
		$resultado = Parent::pegar_um($consulta, $par);
		if($resultado){
			$this->compara_email = true;
			if($senha === $resultado['senha']){
				$this->compara_senha = true;
				$_SESSION['login']=true;
				$_SESSION['nome']=$resultado['nome'];
			}
		}
		$resultado = self::resultado_login();
		return $resultado;
		die();
	}

	public function sair(){
		session_destroy();
	}

	private function resultado_login(){
		if($this->compara_senha && $this->compara_email)
			return true;
		else
			return false;
	}
}
?>
