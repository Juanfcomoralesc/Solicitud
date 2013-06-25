<?php

session_start();

$matricula=$_SESSION['matricula'];
$id=$_SESSION['id'];

if(isset($matricula) && isset($id) && is_numeric($matricula)){



echo "

<html>
<head>
<meta http-equiv='REFRESH' content='0 ; url=4.php'>
<script>

</script>

</head>
</html>


";

}
else{

echo "

<html>
<head>
<meta http-equiv='REFRESH' content='0 ; url=indexm.html'>
<script>
alert('Matricula incorrecta!');
</script>

</head>
</html>


";

}
?>