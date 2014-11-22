<?php 
session_start();
//setcookie("feedback","Alguma coisa",time()+3600,"/");
include 'topo.php'; 
ini_set("upload_max_filesize ","50MB");
?>
<body>
	<?php include 'menu.php'; ?>	
      <div class="main">
      	 <div class="contact">
			<div class="wrap">
			<!---start-contact---->
			<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:0.85em">View Larger Map</a></small>
					   		</div>
      				</div>      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
				  		

				  	
					    <form method="post" action="actions/contact.php" enctype="multipart/form-data">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox" required="required"></span>
						    </div>
						    <div>
						    	<span><label>TELEFONE</label></span>
						    	<span><input name="telefone" type="text" class="textbox" required="required"></span>
						    </div>
						    <div>
						    	<span><label>ASSUNTO</label></span>
						    	<span>
						    		<select name="assunto"  required="required">
						    		    <option value="">Selecione</option>
						    			<option value="Dúvida">Dúvida</option>
						    			<option value="Crítica">Crítica</option>
						    			<option value="Sugestão">Sugestão</option>
						    			<option value="Quero trabalhar com vocês">Quero trabalhar com vocês</option>
						    			<option value="Outros">Outros</option>
						    		</select>
						    	</span>
						    </div>
						    <div>
						    	<span><label>SEXO</label></span>
						    	<span>
						    		<input type="radio" name="sexo" value="M" required="required"/> Masculino 
						    		<input type="radio" name="sexo" value="F"/> Feminino 
						    	</span>
						    </div>
						    <div>
						    	<span><label>MELHOR HORÁRIO ENTRARMOS EM CONTATO:</label></span>
						    	<span>
						    		<input type="checkbox" name="melhorHorario[]" value="Manhã"/> Manhã 
						    		<input type="checkbox" name="melhorHorario[]" value="Tarde"/> Tarde 
						    		<input type="checkbox" name="melhorHorario[]" value="Noite"/> Noite 
						    	</span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="email" class="textbox" required="required"></span>
						    </div>	
						    <div>
						    	<span><label>Foto de perfil</label></span>
						    	<span><input name="foto" type="file" class="textbox" required="required"></span>
						    </div>
						    <div>
						    	<span><label>Curriculum</label></span>
						    	<span><input name="curriculum" type="file" class="textbox" required="required"></span>
						    </div>			
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg" required="required"></textarea></span>
						    </div>
						   <div>
						   		<span>
						   			<input type="submit" class="mybutton" value="Submit">
						   		</span>
						  </div>
					    </form>
					    
					    

				    </div>
  				</div>				
			  </div>
			  </div>
			<!---End-contact---->
			<div class="clear"> </div>
		</div>
    </div>
      <div class="footer">
			<div class="wrap">
			  <p class="address"><img src="images/location.png" alt="" /> 22-56-2-9 Sit Amet,USA</p> <p class="phone"><img src="images/phone.png" alt="" /> Call Us Now: <span>(000)1234-5678</span></p>
		      <div class="clear"></div>
		</div>	
	  </div>
     <div class="copy-right">
			<div class="wrap">
			     <p>Company Name © All Rights Reseverd | Design by  <a href="http://w3layouts.com">W3Layouts</a></p>
		      <div class="clear"></div>
		</div>	
	</div>
</body>
</html>

