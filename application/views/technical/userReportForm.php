<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">

<br>
<div class="container">
	<br>
	<button id="buttonForm"><a href="http://localhost/codeigniter"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>JOB ORDER</h2>
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
				<td>Contact Period</td>
				<td>:</td>
				<td>
					<table>
						<tr>
							<td>Start Date</td>
							<td>:</td>
							<td>00-00-0000</td>
						</tr>
						<tr>
							<td>End Date</td>
							<td>:</td>
							<td>00-00-0000</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>Remark</td>
				<td>:</td>
				<td></td>
			</tr>
		</table>

		<h3>EQUIPMENT INFO</h3>
		<table border="1" style="border-collapse: collapse;">
			<tr>
				<td>No.</td>
				<td>Description</td>
				<td>Serial Number</td>
				<td>Product Key</td>
				<td>Remark</td>
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

		<h3>SOFTWARE INFO</h3>
		<table border="1" style="border-collapse: collapse;">
			<tr>
				<td>No.</td>
				<td>Software Name</td>
				<td>Product Key</td>
			</tr>
			<?php
			echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>";
			?>
		</table><br>
		<?php $i++; ?>

		<table>
			<tr>
				<td>Remark</td>
				<td>:</td>
				<td>xx</td>
			</tr>
			<tr>
				<td>Complaint Date</td>
				<td>:</td>
				<td>00-00-0000 / 8:00</td>
			</tr>
			<tr>
				<td>Client ID FIS/ IPVALUE</td>
				<td>:</td>
				<td>mee-1998</td>
			</tr>
			<tr>
				<td>User ID</td>
				<td>:</td>
				<td>xx</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>xx</td>
			</tr>
			<tr>
				<td>IP Value/ Internet</td>
				<td>:</td>
				<td>xx</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>xx</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>xx</td>
			</tr>
			<tr>
				<td>Date Start</td>
				<td>:</td>
				<td><input type="date" name="dateStartWork"></td>
			</tr>
			<tr>
				<td>Time Start</td>
				<td>:</td>
				<td><input type="time" name="timeStartWork"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<input type="radio" name="status" value="Finish">Finish<br>
					<input type="radio" name="status" value="Pending">Pending<br>
					<input type="radio" name="status" value="To Repair">To Repair<br>
					<input type="radio" name="status" value="Waiting Part">Waiting Part<br>
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<td>Complaint Detail</td>
				<td>:</td>
				<td>Some</td>
			</tr>
			<tr>
				<td>HO</td>
				<td>:</td>
				<td></td>
			</tr>
			<tr>
				<td>HO Comment</td>
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
				<td>Technical Manager</td>
				<td>:</td>
				<td>MOHD IZAQ FAHMI BIN BAHARUDDIN</td>
			</tr>
			<tr>
				<td>Comment</td>
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

		<h3>TECHNICAL</h3>
		<table>
			<tr>
				<td>Feedback</td>
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
			<tr>
				<td>Corrective</td>
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

		<table>
			<tr>
				<td>Equipment Status</td>
				<td>:</td>
				<td><textarea name="equipmentStatus" rows="5" cols="60"></textarea></td>
			</tr>
			<tr>
				<td>Service Report Number</td>
				<td>:</td>
				<td><textarea name="serviceReportNumber" rows="5" cols="60"></textarea></td>
			</tr>
			<tr>
				<td>Date Finished</td>
				<td>:</td>
				<td><input type="date" name="dateFinish"></td>
			</tr>
			<tr>
				<td>Time Finished</td>
				<td>:</td>
				<td><input type="date" name="timeFinish"></td>
			</tr>
		</table><br><br>
		<button id="buttonForm"><a href="">Acknowledge</a></button>
		<button id="buttonForm"><a href="">Print</a></button>
		<?php $i++; ?>
	</form>
</div>