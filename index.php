<?php
require_once("menu.php");
?>
<div class="col-xs-9">
  <div class="tab-content">
    <div class="tab-pane active" id="home-v">
      <form action="submit_request.php" method="POST">
        
        <div class="clearfix">
            <div class="col-sm-5">
              <div class="form-group">
                <label>Particulars: </label> 
                  <input class="form-control" type="text" name="part" value="" placeholder="" required> 
              </div>
              <div class="form-group">    
                <label>  Descriptions: </label>
                  <textarea rows="5" class="form-control" type="text" name="descript" value="" placeholder="" required></textarea>
              </div>    
                 
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label>  Hour/Qty: </label> 
                  <input class="form-control" type="text" name="hq" value="" placeholder="" required> 
              </div> 
              <div class="form-group">
                <label>  Unit Price: </label> 
                  <input class="form-control" type="text" name="unit" value="" placeholder="" required>
              </div>
              <div class="form-group">       
                <label>  Amount: </label>
                  <input class="form-control" type="text" name="amt" value="" placeholder="" required>
              </div>    
              
            </div>
          
          <div class="col-sm-3">
          
                
              <?php
                if($_SESSION['admin'] == "No"){
              ?>
              <label>Manager Name:</label>
              <select class="form-control" name="head">
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
              <input class="btn btn-default" type="submit" name="submit" value="Submit">
            </div>
         <!--  <div class="col-sm-3">
-            <p><input type="submit" name="submit" value="Submit"></p>
-          </div> -->
          </div>
        
        </form>
      </div>  
  </div>
</body>
</html>