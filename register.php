<?php
    include "header.php" // Includes Login Script
?>
<section class="body-section">
<div class="main">
<div class="inner-main">
	<div class="social-icons">
		 <div class="col_1_of_f span_1_of_f"><a href="#">
		    <ul class='facebook'>
		    	<i class="fb"> </i>
		    	<li>Avec Facebook</li>
		    	<div class='clear'> </div>
		    </ul>
		    </a>
		 </div>	
		 <div class="col_1_of_f span_1_of_f"><a href="#">
		    <ul class='twitter'>
		      <i class="tw"> </i>
		      <li>Avec Twitter</li>
		      <div class='clear'> </div>
		    </ul>
		    </a>
		</div>
		<div class="clear"> </div>	
      </div>
      <h2>S'enregistrer</h2>
		<form action="registerbackend.php" method="post">
		   <div class="lable">
		        <div class="col_1_of_2 span_1_of_2">	
		        	<input type="text" class="text" value="Prenom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Prenom';}" id="active" name="prenom">
		        </div>
                <div class="col_1_of_2 span_1_of_2">
                	<input type="text" class="text" value="Nom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom';}" name="nom">
                </div>
                <div class="clear"> </div>
		   </div>
		   <div class="lable-2">
		        <input type="text" class="text" value="votre@email.com " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'votre@email.com ';}" name="email">
		        <input type="password" class="text" value="Mot de passe " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mot de passe ';}" name="password">
		        <input type="password" class="text" value="Mot de passe " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mot de passe ';}" name="confirmPassword">
		   </div>
		   <div class="col-md-12">
		   <h3>En vous enregistrant, vous acceptez nos <span class="term"><a href="#">Termes & Conditions</a></span></h3>
		   </div>
		   <div class="submit">
			  <input type="submit" value="Enregistrer" >
		   </div>
		   <div class="clear"> </div>
		</form>
		<!-----//end-inner-main---->
		</div>
		<!-----//end-main---->
		</div>
		 <!-----start-copyright---->
   		<div class="copy-right">
			<p>Template by <a href="http://w3layouts.com">w3layouts</a></p> 
		</div>
				<!-----//end-copyright---->
</section>

<?php include "footer.php"?>
