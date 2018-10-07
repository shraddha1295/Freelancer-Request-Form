<?php
include("menu.php");
?>
<div class="col-xs-9">
  <div class="tab-content">
    <div class="tab-pane active" id="home-v">
      <form action="submit_request.php" method="POST">
        <div class="clearfix">
            <div class="col-sm-3">
              Particulars:  <input type="text" name="part" value="" placeholder="" required> <br/>
              Descriptions: <input type="text" name="descript" value="" placeholder="" required><br/>
              Hour/Qty:  <input type="text" name="hq" value="" placeholder="" required> <br/>
            </div>
            <div class="col-sm-3">
              Unit Price:  <input type="text" name="unit" value="" placeholder="" required> <br/>
              Amount: <input type="text" name="amt" value="" placeholder="" required><br/>
            </div>
            <div class="col-sm-3">
              <?php
                if($_SESSION['admin'] == "No"){
              ?>
              <select name="head">
                <?php while($row1 =mysqli_fetch_array($head)):; ?>
                  <option value="<?php echo $row1['username']?>"><?php echo $row1['username']; ?></option>
                <?php endwhile;?>
              </select>
              <?php
                }
              ?>
            </div>
          </div>
          <div class="col-sm-3">
            <p><input type="Submit" name="submit" value="Submit"></p>
          </div>
        </form>
      </div>  
  </div>
</body>
</html>