<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">

<br>
<div class="container">
	<br>
	<button id="buttonForm"><a href="<?php echo base_url(); ?>client/Client_display"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>CLIENT DETAILS</h2>
<div class="box" align="center">
	<form method="post">
		<table>
			<tr>
				<td>Client</td>
				<td>:</td>
				<td>
					<select name="client">
						<option>Please choose a client....</option>
						<?php
						foreach($client as $row)
						{
						?>
							<option value="<?php echo $row->name; ?>"><?php echo $row->name; ?></option>
						<?php
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Terminal ID</td>
				<td>:</td>
				<td><input type="text" name="terminal_id"></td>
			</tr>
			<tr>
				<td>Asset ID</td>
				<td>:</td>
				<td><input type="text" name="asset_id"></td>
			</tr>
			<tr>
				<td>Remark</td>
				<td>:</td>
				<td><textarea name="remark" rows="5" cols="60"></textarea></td>
			</tr>
			<tr>
				<td>Contract Period</td>
				<td>:</td>
				<td>
					<table>
						<tr>
							<td>Start Date</td>
							<td></td>
							<td><input type="date" name="contract_start"></td>
						</tr>
						<tr>
							<td>End Date</td>
							<td></td>
							<td><input type="date" name="contract_end"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>Name of Client</td>
				<td>:</td>
				<td><input type="text" name="customer_name"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><textarea name="customer_address" rows="5" cols="60"></textarea></td>
			</tr>
			<tr>
				<td>State</td>
				<td>:</td>
				<td>
					<select name="state">
						<option>Please choose a state.....</option>
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
				<td><input type="text" name="units"></td>
			</tr>
			<tr>
				<td>End User/ Contact Person</td>
				<td>:</td>
				<td><input type="text" name="contact_person"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td>:</td>
				<td><input type="text" name="tel_no"></td>
			</tr>
			<tr>
				<td>Fax Number</td>
				<td>:</td>
				<td><input type="text" name="fax_no"></td>
			</tr>
			<tr>
				<td>Client ID FIS/ BEST</td>
				<td>:</td>
				<td><input type="text" name="assign_ip"></td>
			</tr>
			<tr>
				<td>User ID</td>
				<td>:</td>
				<td><input type="text" name="login"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password"></td>
			</tr>
		</table>
		<br><br>
		<input id="buttonForm" type="submit" name="Client_addDetailsButton" value="SUBMIT">
	</form>
</div>