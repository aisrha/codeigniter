<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--------------------------------------- ICON --------------------------------------------->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!---------------------------------------- CSS --------------------------------------------->
<link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/css/headerNavigation.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

<!---------------------------------------- END --------------------------------------------->

<body>
<ul class="topnav">
    <li><a href="<?php echo base_url(); ?>">
        <i class='fas fa-home' id="icon"></i>&nbsp
        <span class="navTitle">HOME</span>
    </a></li>
    <li><a href="<?php echo base_url(); ?>posts">
        <i class='fas fa-user' id="icon"></i>&nbsp
        <span class="navTitle">ADMIN</span>
    </a></li>
    <li><a href="<?php echo base_url(); ?>addinventory">
        <i class='fas fa-truck' id="icon"></i>&nbsp
        <span class="navTitle">INVENTORY</span>
    </a></li>
    <li><a href="<?php echo base_url(); ?>terminal">
        <i class='fas fa-map-marker-alt' id="icon"></i>&nbsp
        <span class="navTitle">TERMINAL</span>
    </a></li>
    <li><a href="http://localhost/codeigniter/client/Client_display">
        <i class='fas fa-users' id="icon"></i>&nbsp
        <span class="navTitle">CLIENT</span>
    </a></li>
    <li class="right"><a href="<?php echo base_url(); ?>hardware">
        <i class='fas fa-power-off' id="icon"></i>&nbsp
        <span class="navTitle">LOGOUT</span>
    </a></li>
</ul>