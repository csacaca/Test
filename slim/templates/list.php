<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <label>Email</label>
    <input type="text" name="txtSearch">
    <input type="button" name="btnSearch" value="Search">
    <a href="search">Search</a>
    <br>
    <br>
    <a href="nuevo">Nuevo</a>
    <br>
    <br>
	<table border='1'>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Detalle</th>
    </tr>
	<?php for ($i=0; $i < count($name); $i++) {
        $vname = $name[$i]['name'];
        $vemail = $name[$i]['email'];
        $vphone =  $name[$i]['phone'];
        $vaddress = $name[$i]['address'];
        $vposition = $name[$i]['position'];
        $vsalary = $name[$i]['salary'];
        $vskills = $name[$i]['skills'];
        $cskills = "";
        for ($j=0; $j < count($vskills); $j++) {
            $cskills .= $vskills[$j]['skill'].",";
        }
        $cskills = substr($cskills, 0, strlen($cskills)-1);
    ?>
    <tr>
    <td><?php echo $name[$i]['name']?></td>
    <td><?php echo $name[$i]['email']?></td>
    <td><?php echo $name[$i]['position']?></td>
    <td><?php echo $name[$i]['salary']?></td>
    <td><a href="detalle/<?php echo $vname ?>/<?php echo $vemail ?>/<?php echo $vphone ?>/<?php echo $vaddress ?>/<?php echo $vposition ?>/<?php echo $vsalary ?>/<?php echo $cskills ?>">Detalle</td>
    </tr>
    <?php } ?>

</table>
</body>
</html>