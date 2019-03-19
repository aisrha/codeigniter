<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/heading.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tableList.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/pagination.css">

<script>
function searchFilter(page_num) {
    page_num = page_num?page_num:0;
    var keywords = $('#keywords').val();
    var sortBy = $('#sortBy').val();
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>posts/ajaxPaginationDataSearch/'+page_num,
        data:'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy,
        beforeSend: function () {
            $('.loading').show();
        },
        success: function (html) {
            $('#postList').html(html);
            $('.loading').fadeOut("slow");
        }
    });
}
</script>


<h2>SEARCH STAFF DETAILS</h2>
<br><br>
<div class="container">
    <div align="center" class="post-search-panel">
        <input class="searchValueBox" type="text" id="keywords" placeholder="Type the username to filter posts" onkeyup="searchFilter()"/>
        <select class="selectBox" id="sortBy" onchange="searchFilter()">
            <option value="">Sort By</option>
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
        </select>
    </div>

    <br><br>

    <div align="center" class="post-list" id="postList">
    	<table align="center">
		    <tr>
		        <th>Name</th>
		        <th>Username</th>
		        <th>E-mail</th>
		        <th>Identification Card Number</th>
		        <th>Phone Number</th>
		        <th>Group</th>
		        <th>Update</th>
		        <th>Delete</th>
		        <th>Attendance</th>
		    </tr>
            <?php if(!empty($posts)): foreach($posts as $post): ?>
                <tr>
                	<td class="textLeft"><a href="javascript:void(0);"><?php echo $post['techsupportname']; ?></a></td>
                	<td><a href="javascript:void(0);"><?php echo $post['username']; ?></a></td>
                	<td><a href="javascript:void(0);"><?php echo $post['techsupportemail']; ?></a></td>
                	<td><a href="javascript:void(0);"><?php echo $post['techsupportic']; ?></a></td>
                	<td><a href="javascript:void(0);"><?php echo $post['techsupporttel']; ?></a></td>
                	<td><a href="javascript:void(0);"><?php echo $post['techsupport_group']; ?></a></td>
                	<td><button><a href='http://localhost/codeigniter/posts/updatedata?techsupportemail=<?php echo $post['techsupportemail']; ?>'>Update</a></button></td>
			        <td><button><a href='http://localhost/codeigniter/posts/deletedata?username=<?php echo $post['username']; ?>'>Delete</a></button></td>
			        <td><button><a href='http://localhost/codeigniter/posts/displayAtt/?techsupportemail=<?php echo $post['techsupportemail']; ?>'>View</a></button></td>
                </tr>
            <?php endforeach; else: ?>
			<tr>
		        <td colspan="9">Post(s) not found</td>
		    </tr>
    <?php endif; ?>
        </table>
        <br><br>
        <div align="center">
        	<?php echo $this->ajax_pagination->create_links(); ?>
        </div>
    </div>
</div>