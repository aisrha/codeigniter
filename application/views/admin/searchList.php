<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tableList.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/pagination.css">

<div align="center" class="post-list" id="postList">
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
        <?php if(!empty($posts)): foreach($posts as $post): ?>
            <tr>
                <td class="textLeft"><a href="javascript:void(0);"><?php echo $post['techsupportname']; ?></a></td>
                <td><a href="javascript:void(0);"><?php echo $post['username']; ?></a></td>
                <td><a href="javascript:void(0);"><?php echo $post['techsupportemail']; ?></a></td>
                <td><a href="javascript:void(0);"><?php echo $post['techsupportic']; ?></a></td>
                <td><a href="javascript:void(0);"><?php echo $post['techsupporttel']; ?></a></td>
                <td><a href="javascript:void(0);"><?php echo $post['techsupport_group']; ?></a></td>
                <td><button><a href='http://localhost/codeigniter/posts/updatedata?techsupportemail=<?php echo $post['techsupportemail']; ?>'>Update</a></button></td>
                <td><button><a href='http://localhost/codeigniter/posts/deletedata?username=<?php echo $post['username']; ?>'>Delete</a></button></td>
                <td><button><a href='http://localhost/codeigniter/posts/displayAtt/?techsupportemail=<?php echo $post['techsupportemail']; ?>'>View</a></button></td>
            </tr>
        <?php endforeach; else: ?>
        <tr>
            <td colspan="9">Post(s) not found</td>
        </tr>
<?php endif; ?>
    </table>
    <br><br>
    <div align="center">
        <?php echo $this->ajax_pagination->create_links(); ?>
    </div>
</div>