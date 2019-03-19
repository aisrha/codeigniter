<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tableList.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/pagination.css">

<div align="center">
<table align="center">
    <tr>
        <th>Terminal ID</th>
        <th>Client</th>
        <th>Customer Name</th>
        <th>Customer Address</th>
        <th>Username</th>
        <th>Contact Number</th>
    </tr>
    <?php if(!empty($posts)): foreach($posts as $post): ?>
    <tr>
        <td><a href="javascript:void(0);"><?php echo $post['terminal_id']; ?></a></td>
        <td><a href="javascript:void(0);"><?php echo $post['client']; ?></a></td>
        <td class="textLeft"><a href="javascript:void(0);"><?php echo $post['customer_name']; ?></a></td>
        <td class="textLeft"><a href="javascript:void(0);"><?php echo $post['customer_address']; ?></a></td>
        <td class="textLeft"><a href="javascript:void(0);"><?php echo $post['contact_person']; ?></a></td>
        <td><a href="javascript:void(0);"><?php echo $post['tel_no']; ?></a></td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="6">Post(s) not found</td>
    </tr>
    <?php endif; ?>
</table>
<br><br>
<div align="center">
    <?php echo $this->ajax_pagination->create_links(); ?>
</div>
</div>