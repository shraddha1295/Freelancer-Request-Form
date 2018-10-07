
<?php
include("menu.php");
?>
<?php

function getName($selectedId,$con)
{
  $mquery="SELECT username FROM users  WHERE id = '$selectedId'";
  $mres = $con->query($mquery);
  $out=mysqli_fetch_array($mres);
  echo($out['username']);
}

if($_POST=="")
{

}
?>

<script>
  $(document).ready(function(){
    $(".accept").click(function(evt){
      // console.log($(this).attr("id"));
      var i=$(this).attr("id");
      // console.log("value of i : ",i);
      $("#myModal").modal('show');
      $("#myModal").find('input[name="requestId"]').val(i);
    });
  });

  $(document).ready(function(){
    $(".reject").click(function(evt){
      // console.log($(this).attr("id"));
      var i=$(this).attr("id");
      // console.log("value of i : ",i);
      $("#myModal1").modal('show');
      $("#myModal1").find('input[name="requestId"]').val(i);
    });
  });
</script>
<div class="col-xs-9">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Received Requests</a></li>
    <li><a data-toggle="tab" href="#menu1">Approved Requests</a></li>
    <li><a data-toggle="tab" href="#menu2">Rejected Requests</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="col-sm-6">
        <table border="1" cellspacing="0" cellpadding="0" style="width:100%">
          <thead>
            <tr>
              <th>Request from</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql="SELECT * FROM requests  WHERE m_status = 'pending' and manager= '{$_SESSION['username']}' ";
            $res = $con->query($sql);
                                          // print_r($res);
                                          // exit;

            if($res = $con->query($sql))
            {
              if($res->num_rows > 0) {
                while($row2 = $res->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php getName($row2['ru_id'],$con) ?></td>
                    <td><?php echo $row2['m_status']?></td>
                    <td>
                      <button class="btn btn-success accept" id="<?php echo $row2['id']; ?>" type='button' data-toggle="modal" data-target="myModal" >Accept</button>
                      <button class="btn btn-danger reject" id="<?php echo $row2['id']; ?>" type='button' data-toggle="modal" data-target="myModal1" >Reject</button>
                    </td>
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

        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">        
              <div class="modal-body">
                <p>Do You to Proceed?</p>
              </div>
              <div class="modal-footer">
                <form action="accept.php" method="post">
                  <input type="hidden" id="requestId" name="requestId" value="default">
                  <input type="submit" class="btn btn-default" value="Yes" name="yes">
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myModal1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">        
              <div class="modal-body">
                <p>Do You to Proceed?</p>
              </div>
              <div class="modal-footer">
                <form action="reject.php" method="post">
                  <input type="hidden" id="requestId" name="requestId" value="default">
                  <input type="submit" class="btn btn-default" value="Yes" name="Yes">
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>     
    </div>
    <div id="menu1" class="tab-pane fade">

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


            $sql="SELECT * FROM requests  WHERE m_status = 'approved' and manager= '{$_SESSION['username']}' ";;


            if($res = $con->query($sql))

            {
              if($res->num_rows > 0) {
                while($row2 = $res->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php getName($row2['ru_id'],$con) ?></td>
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
    <div id="menu2" class="tab-pane fade">

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


            $sql="SELECT * FROM requests  WHERE m_status = 'rejected' and manager= '{$_SESSION['username']}' ";;


            if($res = $con->query($sql))

            {
              if($res->num_rows > 0) {
                while($row2 = $res->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php getName($row2['ru_id'],$con) ?></td>
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