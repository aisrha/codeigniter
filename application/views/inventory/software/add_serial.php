<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">

<h2>Add Serial Number</h2><br><br>

<div class="box" align="center">
	<form method="post">
		<table>
			<tr>
				<td class="rowTitle">Code</td>
				<td><input type="text" name="KODSOFTWARE" size="30" required/></td>
			</tr>
			<tr>
				<td class="rowTitle">Serial Number </td>
				<td><input type="text" name="NAME" size="30" required/></td>
			</tr>

			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input id="button" type="submit" name="Serial_save" value="SUBMIT"/></td>
			</tr>
		</table>
	</form>
</div>