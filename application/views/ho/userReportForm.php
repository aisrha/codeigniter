<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">

<br>
<div class="container">
	<br>
	<button id="buttonForm"><a href="http://localhost/codeigniter"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>COMPLAINT DETAIL</h2>
<div class="box" align="center">
	<form>
		<table>
			<tr>
				<td>Terminal ID</td>
				<td>:</td>
				<td>RTM-0001</td>
			</tr>
			<tr>
				<td>Asset ID</td>
				<td>:</td>
				<td>CE1533</td>
			</tr>
			<tr>
				<td>Type of Work</td>
				<td>:</td>
				<td>
					<select name="typeOfWork">
						<option>Please Select</option>
						<option value="Corrective Maintenance">Corrective Maintenance</option>
						<option value="Reinstall Application">Reinstall Application</option>
						<option value="Preventive Maintenance">Preventive Maintenance</option>
						<option value="New Installation">New Installation</option>
						<option value="Add On Equipments">Add On Equipments</option>
						<option value="Relocation">Relocation</option>
						<option value="Termination">Termination</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Time Received Call</td>
				<td>:</td>
				<td><input type="time" name="reportTime"></td>
			</tr>
			<tr>
				<td>Assignment Date</td>
				<td>:</td>
				<td>
					<table>
						<tr>
							<td>Start Date</td>
							<td></td>
							<td><input type="date" name="startReportDate"></td>
						</tr>
						<tr>
							<td>End Date</td>
							<td></td>
							<td><input type="date" name="endReportDate"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>Duration</td>
				<td>:</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3">CLIENT DETAILS</td>
			</tr>
			<tr>
				<td>Name of Client</td>
				<td>:</td>
				<td>Jabatan Penyiaran Malaysia</td>
			</tr>
			<tr>
				<td>Section/ Unit</td>
				<td>:</td>
				<td>KL FM</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td>Kementerian Komunikasi & Multimedia Malaysia, KL FM Aras 1, Bangunan IBC, Angkasapuri, 50614, Kuala Lumpur</td>
			</tr>
			<tr>
				<td>State</td>
				<td>:</td>
				<td>Bangunan IBC</td>
			</tr>
			<tr>
				<td>End User/ Contact Person</td>
				<td>:</td>
				<td>Puan Zima Shahriza Mazlan - Penerbit Rancangan</td>
			</tr>
			<tr>
				<td>Contact Duration</td>
				<td>:</td>
				<td>Start: 01-10-2014, End: 01-09-2019</td>
			</tr>
			<tr>
				<td>Problem Detail</td>
				<td>:</td>
				<td><textarea name="problemDetail" rows="5" cols="60"></textarea></td>
			</tr>
		</table>
		<br><br>
		<button id="buttonForm"><a href="">Insert</a></button>
		<button id="buttonForm"><a href="">Reset</a></button>
		<button id="buttonForm"><a href="">Knowledge Base</a></button>
	</form>
</div>