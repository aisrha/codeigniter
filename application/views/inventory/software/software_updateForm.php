<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/home.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 

<br><br>
<button id="buttonForm"><a href="<?php echo base_url(); ?>addinventory/displaySoftwareTable"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>

<div class="column sideRight">
<h2>UPDATE SOFTWARE</h2><br>

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
				<td><input type="text" name="NAME" size="50" value="<?php echo $row->NAME; ?>"/></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2">
				<a href="#" class="Software_update" NAME="<?php echo $row->NAME; ?>"><input id="button" type="submit" name="software_updateButton" value="Update Software" size="30"></a></td>
			</tr>
		</table>
	</form>
	<script>  
      $(document).ready(function(){  
           $('.Software_update').click(function(){  
                var NAME = $(this).attr("NAME");  
                if(confirm("Are you sure you want to update this data?"))  
                {  
                     window.location="<?php echo base_url(); ?>addinventory/Software_update?NAME="+NAME;    
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
</div>
</div>
</div>