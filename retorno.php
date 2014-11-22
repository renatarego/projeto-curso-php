<?php 
session_start();
include 'topo.php'; ?>
<body>
      <?php include 'menu.php'; ?>	
      <div class="main">
      	 <div class="services">
      	   <div class="wrap">
	      	   <div class="error-page">
				<?php 
			  		if(isset($_SESSION["feedback"])){
			  			echo $_SESSION["feedback"];
			  			unset($_SESSION["feedback"]);
			  		}
			  		
			  		$sql = "SELECT * FROM contato WHERE idColuna = ".$_GET["id"];
			  		$resultado = mysql_query($sql);
			  		//var_dump($resultado);
			  		
			  		$linha = mysql_fetch_assoc($resultado);
			  		
			  		foreach($linha as $coluna => $valor){
						echo strtoupper($coluna). " : ". $valor. "<br/>";
					}
		  		?>
			</div>		 	   
	     </div>
	   </div>
    </div>
	<?php include 'rodape.php'; ?>
</body>
</html>

