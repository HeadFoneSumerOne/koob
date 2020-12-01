<?php
/**
 * 
 */
class Base extends Conexao
{
	public function pegar_dados($consulta,$par = null){
		$sql=Parent::conectar()->prepare($consulta);
		if(is_null($par))
			$sql->execute();
		else 
			$sql->execute($par);
		if($sql->rowCount() > 0)
			return $sql->fetchAll(PDO::FETCH_ASSOC);
	}

	public function novos_dados($consulta,$par = null){
		$sql=Parent::conectar()->prepare($consulta);
		if(is_null($par))
			$sql->execute();
		else 
			$sql->execute($par);
		return $sql;
	}

	public function pegar_um($consulta,$par = null){
		$sql=Parent::conectar()->prepare($consulta);
		if(is_null($par))
			$sql->execute();
		else 
			$sql->execute($par);
		if($sql->rowCount() == 1)
			return $sql->fetch(PDO::FETCH_ASSOC);
		else
			return false;
	}
}
?>
