<?php
   if(isset($_POST['submit']))
   {
          
  $t=0;
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                    $t=$t+$row["totalprice"];

              ?>
    <tr>

      <td><?php echo $row["name"] ?></td>
      <td><?php echo $row["sellunit"] ?></td>
      <td><?php echo $row["totalprice"] ?></td>
    </tr>
    <?php 

    }

        } 
        else 
            echo "0 results";

    }
        ?>