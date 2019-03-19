<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tableList.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/pagination.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<h2>LIST OF KEYBOARD</h2>
<div class='container'>
  <div align="center" class="buttonSwGroup">
    <button class="buttonsw"><a href="<?php echo base_url(); ?>addinventory/Keyboard_save">ADD KEYBOARD</a></button>
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
      <th>Timestamp</th>
      <th>Code</th>
      <th>Name</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
    <?php
    $i=1;
    if(!empty($posts)): foreach($posts as $post): ?>
    <tr>
        <td><?php echo $post['timestamp']; ?></td>
        <td><?php echo $post['id']; ?></td>
        <td class="textLeft"><?php echo $post['name']; ?></td>

        <td><button><a href='http://localhost/codeigniter/addinventory/Keyboard_update?id=<?php echo $post['id']; ?>'>Update</a></button></td>
        <td><button><a href="#" class="Keyboard_delete" id="<?php echo $post['id']; ?>">Delete</a></button></td>

    </tr>
    <?php $i++; ?>
    <?php endforeach; else: ?>
    <tr><td colspan="10">Post(s) not found</td></tr>
    <?php endif; ?>
  </table>
  <script>  
      $(document).ready(function(){  
           $('.Keyboard_delete').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Are you sure you want to delete this?"))  
                {  
                     window.location="<?php echo base_url(); ?>addinventory/Keyboard_delete?id="+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
</script>
</div>