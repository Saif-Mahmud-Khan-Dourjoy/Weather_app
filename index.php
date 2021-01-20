<!DOCTYPE html>
<html>
<head>
	<title>Weather App</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background: maroon">

<div class="container">
	
<div class="text-warning text-center display-4  p-5" style="font-family:cursive;"> Weather App</div>
	
<div class="jumbotron">
  <h1 class="display-4 mb-4" style=" color: green" >Search for your result</h1>
 <form method="get" action="get.php" id="weatherform">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label font-weight-bold">Country</label>
    <div class="col-sm-10">
      <input type="text" class="form-control text-uppercase" id="country" name="country">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label font-weight-bold">City</label>
    <div class="col-sm-10">
      <input type="text" class="form-control text-uppercase" id="city" name="city">
    </div>
  </div>
  <div class="form-group row">
  	<label  class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-info btn-block">Search</button>
    </div>
  </div>
</form>
</div>
<footer class="footer">
	<p class="text-light">&copy; created by Saif Mahmud Khan Dourjoy</p>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- <script src="home.js"></script> -->
<script type="text/javascript">

	// $.getJSON(
	// 	"https://openweathermap.org/data/2.5/find?q=London&units=metric&appid=439d4b804bc8187953eb36d2a8c26a02",function(data){

 //        console.log(data);
	// });

	// $(document).ready(function(){
	// 	$('#weatherform').submit(function(e){
	// 		e.preventDefault();
	// 		var country=$('#country').val();
	//         var city=$('#city').val();
          

	// 	})
	// })

	
</script>
</body>
</html>


