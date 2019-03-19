<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tableList.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/headerNavigation.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">

<br>
<div class="container">
	<br>
	<button id="buttonForm"><a href="http://localhost/codeigniter/client/Client_addClient"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<div class="container">
	<h2>LIST OF CLIENTS</h2>

	<table align="center">
		<tr>
			<th>No</th>
			<th>Client</th>
			<th>Delete</th>
		</tr>
		<?php
		$i = 1;
		foreach($data as $row)
		{
			echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$row->name."</td>";
				echo "<td><button><a href='http://localhost/codeigniter/client/Client_deleteClient?name=".$row->name."'>Delete</a></button></td>";
			echo "</tr>";
			$i++;
		}
		?>
	</table>
</div>