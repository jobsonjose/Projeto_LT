<?php 
	
	include 'conexao_db';

	function delete($pdo, $id){
		$delete = ("DELETE FROM USUARIO WHERE ID = '$id'");
		return $delete;
	}
	
	delete($pdo, $id);


?>