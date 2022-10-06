<?php 
	include('config.php');
	include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<style type="text/css">
		body{
  padding:20px 20px;
}

.results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}
	</style>
</head>
<body>

<center><h1><b>Welcome</b> <u><?php echo $login_session; ?></u></h1><br>
<h2><b>Lost Product Details</b></h2>
</center>
<div class="form-group pull-left">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<b><span class="counter pull-left"></span></b>
<div class="form-group pull-right">
	<h2 class="search form-control"><a href = "logout.php">Sign Out</a></h2>
</div>

<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>#</th>
      <th class="col-md-2 col-xs-2">Product Name & Company</th>
      <th class="col-md-2 col-xs-2">Product Model No. & IMEI no.</th>
      <th class="col-md-3 col-xs-3">Employee Name & No.</th>
	  <th class="col-md-2 col-xs-2">State & City</th>
	  <th class="col-md-3 col-xs-3">Police Station</th>
	  <th class="col-md-3 col-xs-3">Found Request</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <?php 
  error_reporting(0);
	$sql = "select * from items";
	$output = mysqli_query($con,$sql);
		if(sql1 == TRUE){
  ?>
  <tbody>
  <?php while ( $data = mysqli_fetch_assoc($output)) { ?>
    <tr>
      <th scope="row"><?php echo $data['sno'];?></th>
      <td><?php echo $data['product_name'].'&nbsp;&nbsp;'.'('. $data['product_company'].')';?></td>
      <td><?php echo $data['product_id'];?></td>
      <td><?php echo $data['employee_name'].'&nbsp;&nbsp;'.'(<a href="tel:'. $data['employee_no'].'">'.$data['employee_no'].'</a>)';?></td>
	  <td><?php echo $data['state'].'&nbsp;&nbsp;'.'('. $data['city'].')';?></td>
      <td><?php echo $data['police_station'];?></td>
	  <td><button>Send</button></td>
    </tr>
  <?php } ?>
  </tbody>
  <?php } ?>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
});
</script>

</body>
</html>