<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 

<br>
<div class="container">
	<br>
	<button id="buttonForm"><a href="<?php echo base_url(); ?>addinventory/displayPrinter"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>UPDATE PRINTER</h2><br>

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
				<td><input type="text" name="name" size="50" value="<?php echo $row->name; ?>"/></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2">
				<a href="#" class="Printer_update" name="<?php echo $row->name; ?>"><input id="button" type="submit" name="Printer_updateButton" value="Update Printer" size="30"></a></td>
			</tr>
		</table>
	</form>
	<script>  
      $(document).ready(function(){  
           $('.Printer_update').click(function(){  
                var name = $(this).attr("name");  
                if(confirm("Are you sure you want to update this data?"))  
                {  
                     window.location="<?php echo base_url(); ?>addinventory/displayPrinter?name="+name;    
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