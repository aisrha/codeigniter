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
        url: '<?php echo base_url(); ?>terminal/ajaxPaginationDataTerminal/'+page_num,
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


<h2>SEARCH TERMINAL</h2>
<br><br>
<div class="container">
    <div align="center" class="post-search-panel">
        <input class="searchValueBox" type="text" id="keywords" placeholder="Type keywords to filter posts" onkeyup="searchFilter()"/>
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
		        <th>Terminal ID</th>
		        <th>Client</th>
		        <th>Customer Name</th>
		        <th>Customer Address</th>
		        <th>Username</th>
		        <th>Contact Number</th>
		    </tr>
            <?php if(!empty($posts)): foreach($posts as $post): ?>
                <tr>
                	<td><a href="javascript:void(0);"><?php echo $post['terminal_id']; ?></a></td>
                	<td><a href="javascript:void(0);"><?php echo $post['client']; ?></a></td>
                	<td class="textLeft"><a href="javascript:void(0);"><?php echo $post['customer_name']; ?></a></td>
			    	<td class="textLeft"><a href="javascript:void(0);"><?php echo $post['customer_address']; ?></a></td>
			    	<td class="textLeft"><a href="javascript:void(0);"><?php echo $post['contact_person']; ?></a></td>
                	<td><a href="javascript:void(0);"><?php echo $post['tel_no']; ?></a></td>
                </tr>
            <?php endforeach; else: ?>
			<tr>
		        <td colspan="6">Post(s) not found</td>
		    </tr>
    <?php endif; ?>
        </table>
        <br><br>
        <div align="center">
        	<?php echo $this->ajax_pagination->create_links(); ?>
        </div>
    </div>
</div>