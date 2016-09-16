<html>
<body>

<?php
// No funciona cuando se envia un valor no numerico!!!
$num = 0;
if(is_numeric($_GET["num"]) && $_GET["num"] > 0){
	$num = $_GET["num"];
}else{
	echo "Debe insertar un num";
	$num = 0;
}
?>

<br>

<table border="1">
	<?php
	for ($x=0;$x<$num;$x++) {
		echo "<tr>

	    <td>Jill</td>
	    <td>Smith</td>
	  	</tr>";
	}
	?>
</table>

</body>
</html>