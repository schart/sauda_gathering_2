<div id="footer">
 <div class="container">
   <footer><p>
				<img src="images/copyright3.png"></p>
				<div class="contact-container">
		      	<a href="#" data-toggle="modal" data-target="#myModal" class="footerlink"><button class="btn btn-danger footerbutton">Send en email til Sauda Gathering &raquo;</button></a>
		      	<a href="vaktirc.php" class="footerlink"><button class="footerbutton btn btn-danger">Sauda Gathering vakt IRC &raquo;</button></a>	
					<!-- Link te Saudahallen på google maps -->
		      	<a href="https://www.google.no/maps/place/Saudahallen/@59.6514241,6.3548458,17z/data=!3m1!4b1!4m2!3m1!1s0x463bffaf6a9b8c37:0x1dfe14db92e1a885" class="footerlink" target="_blank"><button class="btn btn-danger footerbutton">Hvor finner du oss? &raquo;</button></a>
		      </div>
	<table style="color: #fff;" class="kontakt">	
		<tr class="contactform">
			<td>
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Send en email</h4>
				      </div>
				      <div class="modal-body">
				        <form class="form-horizontal" role="form" method="post" action="mailto.php">
						    <div class="form-group">
						        <label for="email" class="col-sm-2 control-label">Email</label>
						        <div class="col-sm-10">
						            <input type="email" class="form-control" id="email" name="email" placeholder="Dinemail@eksempel.com" value="">
						        </div>
						    </div>
						     <div class="form-group">
						        <label for="email" class="col-sm-2 control-label">Navn</label>
						        <div class="col-sm-10">
						            <input type="text" class="form-control" id="sender" name="sender" placeholder="Skriv inn ditt navn her" value="">
						        </div>
						    </div>
						    <div class="form-group">
						        <label for="email" class="col-sm-2 control-label">Emne</label>
						        <div class="col-sm-10">
						            <input type="text" class="form-control" id="emne" name="emne" placeholder="Skriv inn ditt emne her" value="">
						        </div>
						    </div>
						    <div class="form-group">
						        <label for="message" class="col-sm-2 control-label">Melding</label>
						        <div class="col-sm-10">
						            <textarea class="form-control" rows="4" id="melding" name="melding"></textarea>
						        </div>
						    </div>
						    <div class="form-group">
						        <div class="col-sm-10 col-sm-offset-2">
						            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						        </div>
						    </div>
						</form>
				      </div>
				    </div>
				  </div>
				</div>
			</td>
		</tr>
    </table>
   </footer>
 </div>
</div>
</body>
</html>