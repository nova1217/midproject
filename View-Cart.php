<html>
        <head>
	  <style>
			       #p1{
					   background-color:white; 
					   color:violet;
					   text-align:center;
					   font-size:25px;
					   border:5px solid MediumVioletRed;
                       margin:auto;
                       width:25%;
					   height:20%;
                       border-radius:10px;
                       margin-top:15%;
                       padding:20px;
					   }
				  
				  #header
                      {
                       height:30px;
                       background-color:violet;
                       position: fixed;
                       width:100%;
                       top:0;
                       left:0;
                       color:white;
                       text-align:center;
                      }
                  #footer{
                       height:30px;
                       background-color:violet;
                       position:fixed;
                       bottom:0;
                       left:0;
                       width:100%;
                       color:white;
                       text-align:center;
                       }

				   </head>
				   </style>
      <body>
	        <form action="Confirm-Order.php" method="">
			<div id="header" class="font-mine">Panda Delivery</p>
</div>
<br><br>
				 
		 <p id ="p1">	
	   <span><select><option>Add to cart</option>
					 <?php 
					 for($i=1;$i<=31;$i++)
					 {
						 echo "<option>$i</option>";
					 }
					 ?>
					 
					 
					 </select>
					 </span><br><br>
					 
					 <span>Payment by:</span>
	       <select name="Payment by">
							<option>Bikas</option>
							<option>Nogod</option>
							<option>Cash on Delivery</option>
						</select>
						<br>
						<br>
						
						<span align="center" colspan="2"><input type="submit" value="Confirm Order"></span>
						</p>
						  
				  <div id="footer" class="font-mine">Panda Delivery</p>
</div>
	        
						</form>
		   		 
	  </body>

</html>