<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to append elements or documents to the dom using javascript | jquery</title>

<!--  font awesome -->

<script src="https://kit.fontawesome.com/d663acac4f.js" crossorigin="anonymous"></script>
<!--  font awesome -->

<!--  google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
<!--  google fonts -->


<!--  css-->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap5.min.css">

   
</head>
<body>
   

<div class="container-fluid">
<div class="row bg-light justify-content-center">
<div class="col-lg-12 col-sm-12">
<form action="" method="post" enctype="">

<fieldset>                  
<br>
<h5 class="ml-2">An example of appending documents to the dom using javascript:</h5>
<div >
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<tr >
<th>Source of income </th>
<th>Amount</th> 
<th>Type of House you Live</th>   
<th>Number of Houses you own</th>     
<th>More Fields</th>
</tr>
</thead>
<tbody id="dynamic_field3">
<tr> 
<td> <input  type="text" class="col-sm-12" name="source[]" placeholder="i.e business, savings e.t.c" required="true" ></td>
<td><input type="number" required="true" class="col-sm-12" placeholder="e.g 1000,10000 e.t.c" min="0" step="0.01" name="amount[]"></td> 
<td><input type="text" required="true" class="col-sm-12" placeholder="e.g mud, stoned e.t.c" name="house[]"></td> 
<td><input type="number" required="true" class="col-sm-12" min="0"  placeholder="e.g 10,100 e.t.c" name="no[]"></td> 

<td><button type="button" name="add" id="add3" class="btn btn-success"><i class="fa fa-plus"></i></button></td>

</tr>

</tbody>
</table>
</div>

</div>
<br>
<div class="form-row "><br>

<div class="col float-start mx-4">
<a href="#" class="btn btn-primary  mb-4 ">Back</a>
</div>

<div class="col float-end mx-4">
<button type="submit" id='submit' name="submit" class="btn btn-primary">Save the form data</button>
</div>

</div>
<br>
</fieldset>
</form>
</div>

</div>

</div>


</div>


<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-top float-end"><i class="fa fa-arrow-up"></i></a>


<!--- scripts -->
<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function () {
var i = 1;

$('#add3').click(function () {
i++;
$('#dynamic_field3').append('<tr id="row3' + i + '"><td> <input  type="text" class="col-sm-12" name="source[]" placeholder="i.e business, savings e.t.c" required="true" ></td><td><input type="number" required="true" class="col-sm-12" placeholder="e.g 1000,10000 e.t.c" min="0" step="0.01" name="amount[]"></td> <td><input type="text" required="true" class="col-sm-12" placeholder="e.g mud, stoned e.t.c" name="house[]"></td> <td><input type="number" required="true" class="col-sm-12" min="0"  placeholder="e.g 10,100 e.t.c" name="no[]"></td> <td><button type="button" name="add"  class="btn btn-danger btn_remove3" id="' + i + '"><i class="fa fa fa-trash"></i></button></td></tr>');
});
$(document).on('click', '.btn_remove3', function () {
var button_id = $(this).attr("id");

$('#row3' + button_id + '').remove();

});


});
</script>
</body>
</html>

<?php


?>