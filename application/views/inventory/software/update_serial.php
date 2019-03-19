<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 


<br>
<div align="right" class="buttonBackGroup">
  <button class="buttonBack"><a href="<?php echo base_url(); ?>addinventory/displaySoftwareTable"><img src='http://localhost/codeigniter/images/back.png' height='30' width='30' align='center'>&nbsp Back</a></button>
</div>
   
<h2>UPDATE SERIAL NUMBER</h2><br>

<?php
$i=1;
foreach($data as $row)
{
?>
<div class="box" align="center">
	<form method="post">
		<table>
			<tr>
				<td class="rowTitle">Code</td>
				<td><input type="text" name="KODSOFTWARE" size="50" value="<?php echo $row->KODSOFTWARE; ?>" ></td>
			</tr>
			<tr>
				<td class="rowTitle">Serial Number</td>
				<td><input type="text" name="NAME" size="50" value="<?php echo $row->NAME; ?>"/></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2">
				<a href="#" class="updatedata" NAME="<?php echo $row->NAME; ?>"><input id="button" type="submit" name="serial_updateButton" value="Update Serial Number" size="30"></a></td>
			</tr>
		</table>
	</form>
	<script>  
      $(document).ready(function(){  
           $('.updatedata').click(function(){  
                var NAME = $(this).attr("NAME");  
                if(confirm("Are you sure you want to update this data?"))  
                {  
                     window.location="<?php echo base_url(); ?>addinventory/updatedata?NAME="+NAME;    
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