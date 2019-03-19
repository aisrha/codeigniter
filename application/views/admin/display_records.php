<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tableList.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/pagination.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 

  <!-- render pagination links -->
  <div align="center">
      <div class="pagination">
          <?php echo $this->pagination->create_links(); ?>
      </div>
  </div>

  <br>

<table align="center">
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>E-mail</th>
        <th>Identification Card Number</th>
        <th>Phone Number</th>
        <th>Group</th>
        <th>Update</th>
        <th>Delete</th>
        <th>Attendance</th>
    </tr>
    <?php
    $i=1;
    if(!empty($posts)): foreach($posts as $post): ?>
    <tr>
        <td class="textLeft"><?php echo $post['techsupportname']; ?></td>
        <td><?php echo $post['username']; ?></td>
        <td><?php echo $post['techsupportemail']; ?></td>
        <td><?php echo $post['techsupportic']; ?></td>
        <td><?php echo $post['techsupporttel']; ?></td>
        <td><?php echo $post['techsupport_group']; ?></td>
        <td><button><a href='http://localhost/codeigniter/posts/updatedata?techsupportemail=<?php echo $post['techsupportemail']; ?>'>Update</a></button></td>
        <td><button><a href="#" class="deletedata" username="<?php echo $post['username']; ?>">Delete</a></button></td>
        <td><button><a href='http://localhost/codeigniter/posts/displayAtt/?techsupportemail=<?php echo $post['techsupportemail']; ?>'>View</a></button></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="10">Post(s) not found</td>
    </tr>
    <?php endif; ?>
</table>
<script>  
      $(document).ready(function(){  
           $('.deletedata').click(function(){  
                var username = $(this).attr("username");  
                if(confirm("Are you sure you want to delete this?"))  
                {  
                     window.location="<?php echo base_url(); ?>posts/deletedata?username="+username;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
</script>
<br><br>