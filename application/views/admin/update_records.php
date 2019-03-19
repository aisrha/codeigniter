<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 

<br>
<div class="container">
	<br>
	<button id="buttonForm"><a href="<?php echo base_url(); ?>posts"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>UPDATE FORM</h2><br>
<?php
$i=1;
foreach($data as $row)
{
?>
<div class="box" align="center">
	<form method="post">
		<table>
			<tr>
				<td class="rowTitle">Name</td>
				<td><input type="text" name="name" size="30"  value="<?php echo $row->techsupportname; ?>"/></td>
			</tr>
			<tr>
				<td class="rowTitle">Username</td>
				<td><input type="text" name="username" size="30"  value="<?php echo $row->username; ?>"/></td>
			</tr>
			<tr>
				<td class="rowTitle">Old Password</td>
				<td><input type="password" name="oldPassword" size="30"  value="<?php echo $row->techsupport_password; ?>"/></td>
			</tr>
			<tr>
				<td class="rowTitle">New Password</td>
				<td><input type="password" name="password" size="30"/></td>
			</tr>
			<tr>
				<td class="rowTitle">E-mail</td>
				<td><input type="text" name="email" size="30"  value="<?php echo $row->techsupportemail; ?>"/></td>
			</tr>
			<tr>
				<td class="rowTitle">Identification Card Number</td>
				<td><input type="integer" name="ic" size="30"  value="<?php echo $row->techsupportic; ?>"/></td>
			</tr>
			<tr>
				<td class="rowTitle">Phone Number</td>
				<td><input type="text" name="tel" size="30"  value="<?php echo $row->techsupporttel; ?>"/></td>
			</tr>
			<tr>
				<td class="rowTitle">Technical Support Group </td>
				<td>
					<select name="group" value="<?php echo $row->techsupport_group;?>">
					    <option value="MANAGER">MANAGER</option>
					    <option value="TECHNICAL">TECHNICAL</option>
					    <option value="MOE">MOE</option>
						<option value="RTM">RTM</option>
					    <option value="UNIMAS">UNIMAS</option>
					</select>
				</td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2">
				<a href="#" class="updatedata" techsupportemail="<?php echo $row->techsupportemail; ?>"><input id="button" type="submit" name="update" value="Update" size="30"></a></td>
			</tr>
		</table>
	</form>
	<script>  
      $(document).ready(function(){  
           $('.updatedata').click(function(){  
                var techsupportemail = $(this).attr("techsupportemail");  
                if(confirm("Are you sure you want to update this data?"))  
                {  
                     window.location="<?php echo base_url(); ?>addinventory/index?techsupportemail="+techsupportemail;    
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
</script>
</div>
<?php } ?>