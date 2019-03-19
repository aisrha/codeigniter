<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tableList.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/pagination.css">

<div class="container">
	<h2>LIST OF CLIENTS</h2>

	<div align="center" class="buttonNavGroup">
		<button class="buttonNav"><a href="http://localhost/codeigniter/client/Client_addClient">ADD CLIENT</a></button>
		<button class="buttonNav"><a href="http://localhost/codeigniter/client/Client_addForm">ADD CLIENT DETAILS</a></button>
	</div>

	<br><br><br><br><br>

	<!-- render pagination links -->
	<div align="center">
	    <div class="pagination">
	        <?php echo $this->pagination->create_links(); ?>
	    </div>
	</div>

	<br>
	<table align="center">
		<tr>
			<th>Terminal ID</th>
			<th>Client</th>
			<th>Client Name</th>
			<th>Address</th>
			<th>Contact Person</th>
			<th>Phone Number</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<?php
	    $i=1;
	    if(!empty($posts)): foreach($posts as $post): ?>
	    <tr>
	        <td><?php echo $post['terminal_id']; ?></td>
	        <td><?php echo $post['client']; ?></td>
	        <td class="textLeft"><?php echo $post['customer_name']; ?></td>
	        <td class="textLeft"><?php echo $post['customer_address']; ?></td>
	        <td class="textLeft"><?php echo $post['contact_person']; ?></td>
	        <td><?php echo $post['tel_no']; ?></td>

	        <td><button><a href='http://localhost/codeigniter/client/Client_update?terminal_id=<?php echo $post['terminal_id']; ?>'>Update</a></button></td>
	        <td><button><a href='http://localhost/codeigniter/client/Client_delete?terminal_id=<?php echo $post['terminal_id']; ?>'>Delete</a></button></td>
	    </tr>
	    <?php $i++; ?>
	    <?php endforeach; else: ?>
	    <tr><td colspan="10">Post(s) not found</td></tr>
	    <?php endif; ?>
	</table>
</div>