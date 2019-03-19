<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tableList.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<div class="container">
	<br>
	<button id="buttonForm"><a href="<?php echo base_url(); ?>addinventory/displaySoftwareTable"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>LIST OF SERIAL NUMBER</h2><br>

<div class='container'>
<div align="center" class="buttonSwGroup">
    <button class="buttonSw"><a href="<?php echo base_url(); ?>addinventory/save_serial">&nbsp ADD Serial Number</a></button>
  </div>
  <br><br><br><br>

  <table align="center">
    <tr>
      <th>No.</th>
      <th>Code</th>
      <th>Name</th>
      <th>Delete</th>
      <th>Update</th>
    </tr>
    <?php
      $i=1;
      foreach($data as $row)
      {
      echo "<tr>";
      echo "<td>".$i."</td>";
      echo "<td>".$row->KODSOFTWARE."</td>";
      echo "<td>".$row->NAME."</td>";
      ?>

      <td><button><a href="#" class="deleteSerial" NAME="<?php echo $row->NAME; ?>">Delete</a></button></td>

      <?php  
      echo "<td><button><a href='http://localhost/codeigniter/addinventory/updatedata?NAME=".$row->NAME."'>Update</a></button></td>";
      echo "</tr>";
      $i++;
      }
    ?>
  </table>
  <script>  
      $(document).ready(function(){  
           $('.deleteSerial').click(function(){  
                var NAME = $(this).attr("NAME");  
                if(confirm("Are you sure you want to delete?"))  
                {  
                     window.location="<?php echo base_url(); ?>addinventory/deleteSerial?NAME="+NAME;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
</script>
</div>