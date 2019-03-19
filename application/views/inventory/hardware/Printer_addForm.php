<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">

<br>
<div class="container">
	<br>
	<button id="buttonForm"><a href="<?php echo base_url(); ?>addinventory/displayPrinter"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>ADD PRINTER</h2><br>
<div class="box" align="center">
	<form method="post">
		<table>
			<tr>
				<td class="rowTitle">Name</td><br>
				<td><input type="text" name="name" size="30" required/></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input id="button" type="submit" name="Printer_saveButton" value="SUBMIT" required/></td>
			</tr>
		</table>
	</form>
</div>