<?php
    $url = 'https://newsapi.org/v2/everything?q=bitcoin&apiKey=fb187692c30143dd9c4dffba2dd6d059'; //replace "CLIENT-ID"
    $json = file_get_contents($url);
  $data = $array = json_decode($json, true);

?>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>News</title>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="css/round-about.css" rel="stylesheet">
<style>

</style>
  </head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">News</a>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Our News</h2>
		  
        </div>
		
    <?php
		  foreach ($data['articles'] as $item) {
	?>
		
		<div class="col-lg-4 col-sm-6 text-center center mb-4"><span>
		 <img class="size rounded-circle" src="<?php print_r($item['urlToImage']);?>" alt="">
          <h3><?php print_r($item['source']['name']);?>
            <small><?php print_r($item['source']['id']);?></small>
          </h3>
          <p><?php print_r($item['publishedAt']);?></p>
           <p hidden><?php print_r($item['description']);?></p>
		  </a></span>
		  <hr/>
        </div>
	<?php
        }
	?>
    </div>

 </div>
    <!-- /.modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p><textarea id="txtfname" rows="12" cols="62" readonly></textarea></p>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
$('div span').on('click',function(){
    $("#myModal").modal("show");
    $("#txtfname").val($(this).closest('div').children()[0].textContent);
    $("#txtlname").val($(this).closest('p').children()[1].textContent);
});
</script>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
