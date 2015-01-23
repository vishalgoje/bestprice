          <?php

                                        $con = mysqli_connect("localhost","root","","bestprice");
                                        if (mysqli_connect_errno())
                                        {
                                            $error = "!* MySQLi Connection was not established *!";
                                        //echo "MySQLi Connection was not established: " . mysqli_connect_error();
                                        }
                                        // checking the user
                                        if(isset($_POST['submit']))
                                        {
                                            $email = mysqli_real_escape_string($con,$_POST['submit']);
                                            
                                            $sel_user = "select * from addtocart where email='$email'";
                                            $ses_sql = mysqli_query($con, $sel_user);

                                                 echo "<table class="."table table-items".">
                                                <thead>
                                                <tr>
                                                <th colspan="."2".">Item</th>
                                                <th><div class="."align-center".">Quantity</div></th>
                                                <th><div class="."align-right".">Price</div></th>
                                                </tr>
                                                </thead>
                                                <tbody>";


                                                while($row = mysqli_fetch_assoc($ses_sql))
                                                    {

                                                            $item = $row['item'];
                                                            $rs = $row['rs'];
                                                            $pname = $row['pname'];
                                                           
                                                           echo $item."<br>";
                                                           echo $rs."<br>";
                                                           echo $pname."<br>";
                                                           echo "closed <br>"; 

                                                            echo "<tr>".
                                                        "<td class="."image"."><img src=".$item." width="."124"." height="."124"."/></td>"
                                                        


                							        	. "<td>".$pname ."&nbsp; <a title="."Remove Item"." href="."#"."></a></td>".

                							        	 "<td class="."qty".">
                							        	    <input type="."text"." class="."tiny-size"." value="."1".">
                					            	    </td>".
                							        	"<td class="."price".">
                							        	   ₹ ".$rs."
                							        	</td>"
                                                                
                    							        ."</tr>";
                                                    }


                                                       echo " </tbody>
                                                    </table>";

                                         }

							         ?>