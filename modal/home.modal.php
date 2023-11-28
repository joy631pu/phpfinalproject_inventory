<?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
               <tr>
                <input type="hidden" name="update_id"  value="<?php echo $row['id'];?>">
                <td><input type="text" name="update_name"  value="<?php echo $row['name'];?>"></td>
                <td><input type="text" name="update_des"  value="<?php echo $row['des'];?>"></td>
                <td><input type="number" name="update_unit"  value="<?php echo $row['unit'];?>"></td>
                <td><input type="number" name="update_unitprice"  value="<?php echo $row['unitprice'];?>"></td>
                <td><button type="submit" class="btn btn-primary" name="update_btn">update</button></td>
                <td><a  class="btn btn-primary" href="home.php?remove=<?php echo $row['id']; ?>">delete</a></td>
                </tr>
                </form>
                <?php }
        } else {
            echo "0 results";
        }
        ?>