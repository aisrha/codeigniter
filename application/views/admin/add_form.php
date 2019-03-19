<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/headerNavigation.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">

<br>
<div class="container">
	<br>
	<button id="buttonForm"><a href="http://localhost/codeigniter/posts"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>ADD TECHNICAL STAFF</h2><br><br>

<div class="box" align="center">
	<form method="post">
		<table>
			<tr>
				<td class="rowTitle">Name</td>
				<td><input type="text" name="name" size="30" required/></td>
			</tr>
			<tr>
				<td class="rowTitle">Username </td>
				<td><input type="text" name="username" size="30" required/></td>
			</tr>
			<tr>
				<td class="rowTitle">Password </td>
				<td><input type="password" name="password" size="30" required/></td>
			</tr>
			<tr>
				<td class="rowTitle">E-mail </td>
				<td><input type="email" name="email" size="30" required/></td>
			</tr>
			<tr>
				<td class="rowTitle">Identification Card Number</td>
				<td><input type="integer" name="ic" size="30" required/></td>
			</tr>
			<tr>
				<td class="rowTitle">Phone Number </td>
				<td><input width="100px" type="text" name="tel" size="30" required/></td>
			</tr>
			<tr>
				<td class="rowTitle">Technical Support Group </td>
				<td>
					<select name="group" required>
					    <option <?php echo "Select Group";?>></option>
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
				<td colspan="2"><input id="button" type="submit" name="save" value="SUBMIT"/></td>
			</tr>
		</table>
	</form>
</div>