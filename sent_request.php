

<?php
include("menu.php");
?>
	

                        <div class="col-sm-6">
                          <table border="1" cellspacing="0" cellpadding="0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Request To</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                               
                                
                                $sql="SELECT * FROM requests  WHERE m_status = 'pending' and ru_id = '{$_SESSION['id']}' ";
                                
                                
                                 if($res = $con->query($sql))

                                 {
                                  if($res->num_rows > 0) {
                                        while($row2 = $res->fetch_assoc()) {
                                          ?>
                                            <tr>
                                                <td><?php echo $row2['manager']?></td>
                                                <td><?php echo $row2['m_status']?></td>
                                            </tr>
                                            <?php                                        }
                                    } 
                                  }
                                  else {
                                    ?>
                                        <tr><td colspan='5'><center>No Data Avaliable</center></td></tr>
                                        <?php
                                    }
                                  ?> 


                            </tbody>
                          </table>  
                        </div>    
              

          </div>  


</body>
</html>