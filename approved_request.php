

<?php
// include("menu.php");
include("accept.php");

$dquery="SELECT particulars, description FROM requests";
$res = $con->query($dquery);
?>
	

                        <div class="col-sm-8">
                          <div class="table-responsive">
                                <table class="table-bordered"  style="width:100%">
                                  <thead>
                                      <tr>
                                          <th>Request To</th>
                                          <th>Request Details</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                     
                                      
                                      $sql="SELECT * FROM requests  WHERE m_status = 'Approved' and ru_id = '{$_SESSION['id']}' ";
                                      
                                      
                                       if($res = $con->query($sql))

                                       {
                                        if($res->num_rows > 0) {
                                              while($row2 = $res->fetch_assoc()) {
                                                ?>
                                                  <tr>
                                                      <td><?php echo $row2['manager']?></td>
                                                      <td><strong><?php echo $row2['particulars']?></strong><br>
                                                      <?php echo $row2['description']?></td>
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
              

          </div>  


</body>
</html>