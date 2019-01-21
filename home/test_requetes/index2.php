<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php
require 'pdo.php';

// require 'requete.php';
// require 'test.php';

?>

<form method="post" name="myform" action="recherche.php">
<!-- <input type="text" name="motCle" maxlength="80" size="30"> -->
<input type="text" name="cle">
<!-- <br>
Tous<input type="checkbox" name="tous" value="tous">
A<input type="checkbox" name="A" value="A">
B<input type="checkbox" name="B" value="B">
C<input type="checkbox" name="C" value="C">
D<input type="checkbox" name="D" value="D">
D1<input type="checkbox" name="D1" value="D1">
D2<input type="checkbox" name="D2" value="D2">
<br> -->
<input type="submit" value="Submit" >
</form>

<?php

if (isset($cle)) {
    require 'recherche.php';
}
// require 'recherche.php';





































?>

<!---old




<!-- script test pour jquery
<input type="text" value="1978">
<p></p>


<script>
$("input")
.keyup(function() {
    var value = $ (this).val();
    $("p").text(value);
    
    console.log(value);
    
})
.keyup();
</script> -->