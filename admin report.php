<?php  
$con=mysqli_connect("localhost","root","","raga");
?>
<form id="admin" action="admin.php" method="post">
                   
            <div class="container-fluid" id="dmid">    
                <div class="row">
                  <div class="col-sm-12">
                    
                      
                         <font style="color:white; font-family: Verdana;  font-size:20px;">
                <p align="justify"><?php echo "Welcome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Administration Cell </b>"?></p> </font>
                  </div>
                 </div>    
             </div-->
          
             <div class="container">
                    <ul class="nav nav-tabs" >  
                     <li>  <input type="text" id="searchtb" name="searchtb" placeholder="Search" class="form-control" 
                           style="margin-top:5px;margin-left:250px;width:300px;"></li>
                    </ul>
                    <div class="tab-content">
                       <div id="category" class="tab-pane fade in active">
                         
                          
                           <?php
	

		$rs1 = mysqli_query($con,"select * from admin");
		
           
                echo '<table class="table table-striped" id="tblData">';
                echo "<thead>";
                echo "<tr>";
                echo "<th>ano</th>";
                echo "<th>aname</th>";
                echo "<th>passward</th>";
                echo "<th>email</th>";
				//echo "<th>Email</th>";
				//echo "<th>address</th>";
				//echo "<th>contact</th>";
                echo "<tr>";
                echo "</thead>";
                echo "<tbody>";
				
		while($ar= mysqli_fetch_array($rs1))
                {
               echo "<tr>";
              
               echo "<td><a href='viewform.php?id=".$ar[0]."'>" . $ar[0] . "</a></td>";
                echo "<td>" . $ar[1] . "</td>";
                echo "<td>" . $ar[2] . "</td>";
                echo "<td>" . $ar[3] . "</td>";
               // echo "<td>" . $ar[4] . "</td>";
				//echo "<td>" . $ar[5] . "</td>";
				
                //echo "<td>" . $ar[6] . "</td>";
                
                // echo "<td> <a href='adminac.php?id=".$ar[0]."'>
                    // <input type='button' value='Card' name='adcard' class='toggle btn btn-primary'> </a></td>";
              
                
               //echo "<td> 
                   
             //<a href='appr.php?id=".$ar[0]."'> <button class='add_field_button'  style='background-color:transparent;border:none;' 
                   //name='appr' id='appr' >
                    //<img src='./images/Tick.png' width='20px'></img></button> </a> </td>";
                
                // echo "<td> <button class='add_field_button'  id='disapp' style='background-color:transparent;border:none;' name='disapp' >
                     //<img src='./images/cross.png' width='20px'></img>
                //</button> </td>";
                 //echo "</tr>";
               //  echo "<td> <a href='adminac.php?id=".$ar[0]."'><input type='button' value='Admit Card' name='adcard' class='toggle btn btn-primary'> </a></td>";
              //echo "</tr>";
		}
                
                //echo "<td> <a href='viewform.php?id=".$ar[0]."'>
                //<input type='button' value='View' name='view' class='toggle btn btn-primary'> </a></td>";
                
                
                
                
                echo "</tbody>";
                echo "</table>";
	?>

             </div>

                        
             
          <!--?php
		
		$rs2 = mysqli_query($con,"select * from login");
		
           
                echo '<table class="table table-striped">';
                echo "<thead>";
                echo "<tr>";
                echo "<th>uno</th>";
                echo "<th>uname</th>";
                echo "<th>passward</th>";
				 echo "<th>cpassward</th>";
				 echo "<th>cpassward</th>";
				 
				echo "<th>email</th>";
				 
				
				
                
                echo "<tr>";
                echo "</thead>";
                echo "<tbody>";
		while($ar = mysqli_fetch_array($rs2))
		{               echo "<tr>";
                        echo "<td>" . $ar[0] . "</td>";
			            echo "<td>" . $ar[1] . "</td>";
                        echo "<td>" . $ar[2] . "</td>";
						echo "<td>" . $ar[3] . "</td>";
						echo "<td>" . $ar[4] . "</td>";
                        echo "<td>" . $ar[5] . "</td>";

			
                      echo "</tr>";
		}
                
                echo "</tbody>";
                echo "</table>";
	?>
                   


                            <input type="hidden" id="txtid"  name="txtid" >
                           <input type="hidden" id="txtpwd" name="txtpwd">

                           
                                </div>
                                </div>    
                            </div>
                        </div>
                  </div>    
             </form>                 
    </body>
</html>
