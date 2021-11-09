<!DOCTYPE html>
<html>
<head>
	<title>Gestor de Tarefas</title>
</head>
<body>
	<center>
		<form method="get">
			<h3>Gestor de Tarefas</h3>
			Nome da Tarefa: <input type="text" placeholder="Nome de Tafera" name="tarefa" required="">
			
			<!--
			Descricao da Tarefa: <input type="textarea" placeholder="Descrisao" name=""><br>
			Prazo da Tarefa: <input type="date" placeholder="" name=""><br>
			Baixa<input type="radio" name="prioridade">
			Media<input type="radio" name="prioridade">
			Alta<input type="radio" name="prioridade"><br>


			Sim<input type="radio" name="prioridade">
			Nao<input type="radio" name="prioridade"><br>
			-->

			<input type="submit" name="cadastrar" value="Registar tarefa">
		</form>

		<?php 
			if (isset($_GET['cadastrar'])) {
				//$tarefa = $_GET['tarefa'];

				//Criar um array
				$lista_tarefa = array();

				//atribuimos valores no array atraves do que sera inserido
				$lista_tarefa[] = $_GET['tarefa'];

				//Fechando o PHP e criando uma tabela usando HTML
				?>
				<!--Criando a tabela em HTML-->
				<table border="1">
					<tr>
						<th>Tarefas</th>
					</tr>
					<!--Abrindo o PHP-->
					<?php foreach ($lista_tarefa as $tarefa) {?> 
					<tr>
						<td><?php echo "$tarefa"; ?></td>
					</tr>
					<?php } //Fim foreach  
				} //Fim IF
				?>
				</table>		
	</center>

</body>
</html>
<!-- 
	1 - nome da tarefa - tipo text
	2 - descricao - tipo textarea
	3 - prazo da tarefa - tipo date - dia final
	4 - prioridade - tipo radio - BAIXA, MEDIA, ALTA
	5 - conclusao - tipo radio - SIM ou NAO

-->