<?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
             <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               <tr>
               <input type="hidden" name="id"  value="<?php echo $row['id'];?>">
                <input type="hidden" name="name"  value="<?php echo $row['name'];?>">
                <input type="hidden" name="des"  value="<?php echo $row['des'];?>">
               <input type="hidden" name="unit"  value="<?php echo $row['unit'];?>">
                <input type="hidden" name="unitprice"  value="<?php echo $row['unitprice'];?>">
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['des'];?></td>
                <td><?php echo $row['unit'];?></td>
                <td><?php echo $row['unitprice'];?></td>
                <td><div class="mb-3">
                    <input type="number" name="unitsale" class="form-control" id="exampleInputUnit" value="required">
               </div></td>
                <td><button type="submit" class="btn btn-primary" name="submit">Sell Now</button></td>
                </tr>
                </form>
                <?php }
        } else {
            echo "0 results";
        }
        ?>