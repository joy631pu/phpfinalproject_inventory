<?php
 if(isset($_POST['submit']))
 {
          if (mysqli_num_rows($res) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($res)) {
                $t=$t+($row['unit']*$row['unitprice']);
              ?>
               <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['unit'];?></td>
                <td><?php echo $row['unit']*$row['unitprice'];?></td>

                </tr>
                </form>
                <?php
                 }
        } 
        else 
        {
            echo "0 results";
        }
    }
        ?>