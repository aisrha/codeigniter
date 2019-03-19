<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<br><br><br>
<h2 align="center">UPLOAD FILE</h2><br><br>
<div class="box" align="center">
    <form action="index.php/upload/do_upload" method="post" enctype="multipart/form-data">
        <input type="file" name="userFile"/>
        <input type="submit"/>
    </form>
</div>