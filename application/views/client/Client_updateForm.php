<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">

<br>
<div class="container">
	<br>
	<button id="buttonForm"><a href="<?php echo base_url(); ?>client/Client_display"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>UPDATE CLIENT</h2><br>

<?php
$i=1;
foreach($data as $row)
{
?>

<div class="box" align="center">
	<form method="post">
		<table>
			<tr>
				<td>Client</td>
				<td>:</td>
				<td>
					<select class="inputRow" name="client">
						<option value="<?php echo $row->client; ?>"><?php echo $row->client; ?></option>
						<?php
						foreach($client as $rows)
						{
						?>
							<option value="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></option>
						<?php
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Terminal ID</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="terminal_id" value="<?php echo $row->terminal_id; ?>"></td>
			</tr>
			<tr>
				<td>Asset ID</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="asset_id" value="<?php echo $row->asset_id; ?>"></td>
			</tr>
			<tr>
				<td>Remark</td>
				<td>:</td>
				<td><textarea name="remark" rows="5" cols="60" value="<?php echo $row->remark; ?>"><?php echo $row->remark; ?></textarea></td>
			</tr>
			<tr>
				<td>Contract Period</td>
				<td>:</td>
				<td>
					<table>
						<tr>
							<td>Start Date</td>
							<td></td>
							<td><input type="date" name="contract_start" value="<?php echo $row->contract_start; ?>"></td>
						</tr>
						<tr>
							<td>End Date</td>
							<td></td>
							<td><input type="date" name="contract_end" value="<?php echo $row->contract_end; ?>"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>Name of Client</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="customer_name" value="<?php echo $row->customer_name; ?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><textarea rows="5" cols="60" name="customer_address"><?php echo $row->customer_address; ?></textarea></td>
			</tr>
			<tr>
				<td>State</td>
				<td>:</td>
				<td>
					<select name="state" value="<?php echo $row->state; ?>">
						<option value="<?php echo $row->state; ?>"><?php echo $row->state; ?></option>
						<option value="Kuala Lumpur">Kuala Lumpur</option>
						<option value="Negeri Sembilan">Negeri Sembilan</option>
						<option value="Melaka">Melaka</option>
						<option value="Johor">Johor</option>
						<option value="Pahang">Pahang</option>
						<option value="Terengganu">Terengganu</option>
						<option value="Kelantan">Kelantan</option>
						<option value="Perak">Perak</option>
						<option value="Pulau Pinang">Pulau Pinang</option>
						<option value="Kedah">Kedah</option>
						<option value="Perlis">Perlis</option>
						<option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
						<option value="Sabah">Sabah</option>
						<option value="Sarawak">Sarawak</option>
						<option value="Selangor">Selangor</option>
						<option value="Wisma Berita">Wisma Berita</option>
						<option value="Wisma TV">Wisma TV</option>
						<option value="Wisma Radio">Wisma Radio</option>
						<option value="Bangunan IBC">Bangunan IBC</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Section/ Unit</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="units" value="<?php echo $row->units; ?>"></td>
			</tr>
			<tr>
				<td>End User/ Contact Person</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="contact_person" value="<?php echo $row->contact_person; ?>"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="email" value="<?php echo $row->email; ?>"></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="tel_no" value="<?php echo $row->tel_no; ?>"></td>
			</tr>
			<tr>
				<td>Fax Number</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="fax_no" value="<?php echo $row->fax_no; ?>"></td>
			</tr>
			<tr>
				<td>Client ID FIS/ BEST</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="assign_ip" value="<?php echo $row->assign_ip; ?>"></td>
			</tr>
			<tr>
				<td>User ID</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="login" value="<?php echo $row->login; ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input class="inputRow" type="text" name="password" value="<?php echo $row->password; ?>"></td>
			</tr>
		</table>
		<br><br>
		<input id="buttonForm" type="submit" name="Client_updateButton" value="UPDATE"/>
	</form>
</div>
<?php } ?>