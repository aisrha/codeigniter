<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tableList.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/pagination.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<h2>LIST OF SOFTWARE</h2>
<div class='container'>
  <div align="center" class="buttonSwGroup">
    <button class="buttonSw"><a href="<?php echo base_url(); ?>addinventory/Software_save">ADD SOFTWARE</a></button>
  </div>

  <br><br><br><br>

  <!-- render pagination links -->
  <div align="center">
      <div class="pagination">
          <?php echo $this->pagination->create_links(); ?>
      </div>
  </div>

  <br>
  <table align="center">
    <tr>
      <th>Code</th>
      <th>Name</th>   
      <th>Update</th>
      <th>Delete</th>
      <th>View</th>

   
    </tr>
    <?php
    $i=1;
    if(!empty($posts)): foreach($posts as $post): ?>
    <tr>
        <td><?php echo $post['KOD']; ?></td>
        <td class="textLeft"><?php echo $post['NAME']; ?></td>
        <td><button><a href='http://localhost/codeigniter/addinventory/Software_update?KOD=<?php echo $post['KOD']; ?>'>Update</a></button></td>
        <td><button><a href="#" class="deleteSoftware" KOD="<?php echo $post['KOD']; ?>">Delete</a></button></td>
        <td><button><a href='http://localhost/codeigniter/addinventory/displaySerialTable?<?php echo $post['KOD']; ?>'>View</a></button></td>
        
    </tr>
    <?php $i++; ?>
    <?php endforeach; else: ?>
    <tr><td colspan="10">Post(s) not found</td></tr>
    <?php endif; ?>
  </table>
  <script>  
      $(document).ready(function(){  
           $('.deleteSoftware').click(function(){  
                var KOD = $(this).attr("KOD");  
                if(confirm("Are you sure you want to delete this?"))  
                {  
                     window.location="<?php echo base_url(); ?>addinventory/deleteSoftware?KOD="+KOD;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
</script>
</div>