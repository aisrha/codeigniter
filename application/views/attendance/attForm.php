<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tableList.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/button.css">

<br>
<div class="container">
<br>
  <button id="buttonForm"><a href="<?php echo base_url(); ?>posts/index"><i class='fas fa-backward' id="icon"></i>&nbsp</a></button>
</div>

<h2>ATTENDANCE LIST</h2><br><br>

<table align="center">
    <tr>
        <th>Date</th>
        <th>Email</th>
        <th>Time In</th>
        <th>IP In</th>
        <th>Hostname In</th>
        <th>Remark In</th>
        <th>Time Out</th>
        <th>Hostname Out</th>
        <th>Remark Out</th>
    </tr>
    <?php
        foreach($data as $rows)
        {
            
            echo "<tr>";
            echo "<td>".$rows->date."</td>";
            echo "<td>".$rows->email."</td>";
            echo "<td>".$rows->time_in."</td>";
            echo "<td>".$rows->ip_in."</td>";
            echo "<td>".$rows->hostname_in."</td>";
            echo "<td>".$rows->remark_in."</td>";
            echo "<td>".$rows->time_out."</td>";
            echo "<td>".$rows->hostname_out."</td>";
            echo "<td>".$rows->remark_out."</td>";
            echo "</tr>";
        }
    ?>
</table>