<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">

<br>
<div class="container">
	<br>
	<button id="buttonForm"><a href="http://localhost/codeigniter"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>COMPLAINT DETAIL</h2>
<?php $i = 1; ?>
<div class="box" align="center">
	<form>
		<table>
			<tr>
				<td>Complaint ID</td>
				<td>:</td>
				<td>131313</td>
			</tr>
			<tr>
				<td>Terminal ID</td>
				<td>:</td>
				<td>AF1998</td>
			</tr>
			<tr>
				<td>Type of Work</td>
				<td>:</td>
				<td>Corrective Maintenance</td>
			</tr>
			<tr>
				<td>Asset ID</td>
				<td>:</td>
				<td>NULL</td>
			</tr>
			<tr>
				<td>Assignment Date</td>
				<td>:</td>
				<td>22-01-2019 / 10:12</td>
			</tr>
			<tr>
				<td>Complaint Date</td>
				<td>:</td>
				<td>23-01-2019 / 8:00</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td>GAGASAN BUMIPUTERA SDN. BHD.</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td>Wisma BERNAMA</td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td>:</td>
				<td>gagasa@gmail.com</td>
			</tr>
			<tr>
				<td>Contact Person Name</td>
				<td>:</td>
				<td>Ali bin Abu</td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td>:</td>
				<td>0123456789</td>
			</tr>
			<tr>
				<td>Fax Number</td>
				<td>:</td>
				<td></td>
			</tr>
			<tr>
				<td>Install Date</td>
				<td>:</td>
				<td>--</td>
			</tr>
			<tr>
				<td>Expiry Date</td>
				<td>:</td>
				<td>--</td>
			</tr>
			<tr>
				<td>Client ID FIS/ BEST</td>
				<td>:</td>
				<td>mee-1998</td>
			</tr>
			<tr>
				<td>User ID</td>
				<td>:</td>
				<td>gabu01</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>GABU01</td>
			</tr>
			<tr>
				<td>IP Value/ Internet</td>
				<td>:</td>
				<td>
					<table>
						<tr>
							<td>IP Value</td>
							<td>Username</td>
							<td>Password</td>
						</tr>
						<tr>
							<td>IP Value</td>
							<td>Username</td>
							<td>Password</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>Complaint Detail</td>
				<td>:</td>
				<td>Some</td>
			</tr>
			<tr>
				<td>Remark 1</td>
				<td>:</td>
				<td></td>
			</tr>
			<tr>
				<td>Remark 2</td>
				<td>:</td>
				<td></td>
			</tr>
		</table>

		<h3>CLIENT INVENTORY LIST</h3>
		<table border="1" style="border-collapse: collapse;">
			<tr>
				<td>No.</td>
				<td>Description</td>
				<td>Serial Number</td>
				<td>Product Key</td>
				<td>Installed By</td>
			</tr>
			<?php
			echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>";
			?>
		</table>

		<h3>TECHNICAL</h3>
		<table border="1" style="border-collapse: collapse;">
			<tr>
				<td>Feedback</td>
				<td>:</td>
				<td>
					<table>
						<tr>
							<td>Comment By:</td>
							<td>Example</td>
						</tr>
						<tr>
							<td>Date/ Time:</td>
							<td>Example</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>Corrective</td>
				<td>:</td>
				<td>
					<table>
						<tr>
							<td>Comment By:</td>
							<td>Example</td>
						</tr>
						<tr>
							<td>Date/ Time:</td>
							<td>Example</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		<h3>MANAGER</h3>
		<table>
			<tr>
				<td>Comment</td>
				<td>:</td>
				<td>
					<textarea name="problemDetail" rows="5" cols="60"></textarea>
					<table>
						<tr>
							<td>Comment By:</td>
							<td>Example</td>
						</tr>
						<tr>
							<td>Date/ Time:</td>
							<td>Example</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<br><br>
		<button id="buttonForm"><a href="">Assign Technical Person</a></button>
		<button id="buttonForm"><a href="">Update</a></button>
		<button id="buttonForm"><a href="">Finish</a></button>
		<button id="buttonForm"><a href="">Delete</a></button>
		<?php $i++; ?>
	</form>
</div>