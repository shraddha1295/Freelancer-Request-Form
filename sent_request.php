

<?php
include("menu.php");

$dquery="SELECT particulars, description FROM requests";
$res = $con->query($dquery);
// print_r($res);
// exit;

?>
<script>
$(document).ready(function(){
  $(".delete").click(function(evt){
    // console.log($(this).attr("id"));
    var i=$(this).attr("id");
    // console.log("value of i : ",i);
    $("#deleteModal").modal('show');
    $("#deleteModal").find('input[name="requestId"]').val(i);
  });
});
</script>
<div class="col-sm-8">
  <div class="table-responsive">
    <table class="table-bordered"  style="width:100%">
      <thead>
        <tr>
          <th>Request To</th>
          <th>Request Details</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql="SELECT * FROM requests  WHERE m_status = 'Pending' and ru_id = '{$_SESSION['id']}' ";
        if($res = $con->query($sql))
        {
          if($res->num_rows > 0) {
            while($row2 = $res->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $row2['manager']?></td>
          <td><strong><?php echo $row2['particulars']?></strong><br><?php echo $row2['description']?></td>
          <td><?php echo $row2['m_status']?></td>
          <td>  <button class="btn btn-danger glyphicon glyphicon-remove delete" id="<?php echo $row2['id']; ?>" type='button' data-toggle="modal" data-target="deleteModal"></button></td>
        </tr>
        <?php
            }
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
<div class="modal fade" id="deleteModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p>Do You to Proceed?</p>
      </div>
      <div class="modal-footer">
        <form action="delete.php" method="post">
          <input type="hidden" id="requestId" name="requestId" value="default">
          <input type="submit" class="btn btn-default" value="Yes" name="Yes">
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
