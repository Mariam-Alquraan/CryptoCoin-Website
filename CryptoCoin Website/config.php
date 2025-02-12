<?php

define('LOCALHOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','e_business');


$conn = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DBNAME) or die("connection to DB failed");

function connection(){
	
	global $conn;
	return $conn;
	
}
function getReview(){
	
global $conn;
$q = mysqli_query($conn,"select * from review order by Rev_seq desc");

return $q;
	
	
}

function getServices(){
	
global $conn;
$q = mysqli_query($conn,"select * from service");
return $q;
	
}
function getServicesT(){
	global $conn;
	$query = "select * from service";
	$results = mysqli_query($conn,$query);
	$item = "";
	while($row = mysqli_fetch_array($results)){
		$serID = $row["ser_id"];
		$serName = $row["ser_name"];
		$item .= "<option>$serID -- $serName</option>";
	}
	return $item;

}

function updateUtil($itemid, $qty){
	global $conn;
	$query = "update utilities set uti_qty = (uti_qty - $qty) where util_id = $itemid";
	$results = mysqli_query($conn, $query);
}


function getItemsBySerID($i){
	
global $conn;
if($i == 1)
	$q = mysqli_query($conn,"select * from utilities where uti_qty >0");
else
	$q = mysqli_query($conn,"select * from utilities where ser_util_id = $i and uti_qty >0");
return $q;
	
}


function getItem($i){
	
global $conn;
$q = mysqli_query($conn,"select * from utilities where util_id = $i");
return $q;
	
}


function getItems(){
	
global $conn;
$q = mysqli_query($conn,"select * from utilities where uti_qty >0");
return $q;
	
}


function query($str){
	
global $conn;
$q = mysqli_query($conn,$str);
return $q;
	
}

function check($res){

	global $conn;
	if(!$res)
		echo mysqli_error($conn);
}
function getAllTrans1(){
	global $conn;
	$query = "select * from transaction order by TransDateTime desc LIMIT 10";
	$results = mysqli_query($conn,$query);
	$item = "";
	while($row = mysqli_fetch_array($results)){
		$dateToday = getdate($row["TransDateTime"]);
		$day = $dateToday["mday"];
		$month = $dateToday["mon"];
		$year = $dateToday["year"];
		
		$dateFormat = "$day/$month/$year";

			$item .= <<<DELIMETER
		<tr>
			<td>$row[ID]</td>
			<td>$row[currency]</td>
			<td>$row[amount]</td>
			<td>$dateFormat</td>
		</tr>
		DELIMETER;
	}

		
	return $item;

}
function getAllTrans(){
	global $conn;
	$query = "select * from transaction order by TransDateTime desc";
	$results = mysqli_query($conn,$query);
	$item = "";
	while($row = mysqli_fetch_array($results)){
		$prods = explode("<br/>",$row['items']);
		$AllItemNames = "";
		foreach($prods as $k => $v){
			if(strlen(trim($v)) < 1) continue;
			$i = explode(":",$v);
			$prodID = substr($i[0],5);
			$q = "select util_name from utilities where util_id = $prodID";
			$res = mysqli_query($conn, $q);
			$prodName = mysqli_fetch_array($res)[0];
			$AllItemNames .= "<a href=..\item.php?itemid=$prodID>" . $prodName . "</a>:" . $i[1] . "<br/>";
		}
		$dateToday = getdate($row["TransDateTime"]);
		$day = $dateToday["mday"];
		$month = $dateToday["mon"];
		$year = $dateToday["year"];
		
		$dateFormat = "$day/$month/$year";

			$item .= <<<DELIMETER
		<tr>
			<td>$row[ID]</td>
			<td>$row[username]</td>
			<td>$row[amount]</td>
			<td>$row[status]</td>
			<td>$row[trans]</td>
			<td>$row[currency]</td>
			<td>$dateFormat</td>
			<td>$AllItemNames</td>
		</tr>
		DELIMETER;
	}

		
	return $item;

}

function getTranlNo(){
	global $conn;
	$query = "select * from transaction";
	$results = mysqli_query($conn,$query);
	$count = mysqli_num_rows($results);
	return $count;

}
function getSerNo(){
	global $conn;
	$query = "select * from service";
	$results = mysqli_query($conn,$query);
	$count = mysqli_num_rows($results);
	return $count;

}
function getUtilNo(){
	global $conn;
	$query = "select * from utilities";
	$results = mysqli_query($conn,$query);
	$count = mysqli_num_rows($results);
	return $count;

}

function getAllUsers(){
	global $conn;
	$query = "select * from users";
	return mysqli_query($conn, $query);
	
}
function getAllServices(){
	global $conn;
	$query = "select * from service";
	$results = mysqli_query($conn,$query);
	$item = "";
	while($row = mysqli_fetch_array($results)){
		$catID = $row["ser_id"];
		$catName = $row["ser_name"];
		$item .= <<<DELIMETER
		<tr>
		<td>$catID</td>
		<td>$catName</td>
		</tr>
		DELIMETER;
	}
	return $item;

}
function getAllItemsFromDB(){
	global $conn;
	$query = "select a.util_name, a.util_desc, a.util_pri, b.ser_name, a.uti_qty from utilities a, service b where a.uti_qty > 0 and a.ser_util_id = b.ser_id";
	$results = mysqli_query($conn, $query);
	$items = "";
	while($row = mysqli_fetch_array($results)){
		$desc = substr($row["util_desc"],0,70) . "...";
	$items .= <<<DELIMETER
      <tr>
            <td>$row[util_name]</td>
            <td>$desc</td>
            <td>$row[util_pri]</td>
            <td>$row[ser_name]</td>
            <td>$row[uti_qty]</td>
        </tr>
DELIMETER;
	
	}
	return $items;
}
function getAllItemsFromDB1(){
	global $conn;
	$query = "select a.util_name, a.util_desc, a.util_pri, b.ser_name, a.uti_qty from utilities a, service b where a.uti_qty > 0 and a.ser_util_id = b.ser_id";
	$results = mysqli_query($conn, $query);
	$items = "";
	while($row = mysqli_fetch_array($results)){
		$desc = substr($row["util_desc"],0,70) . "...";
	$items .= <<<DELIMETER
      <tr>
            <td>$row[util_name]</td>
            <td>$row[util_pri]</td>
            <td>$row[ser_name]</td>
            <td>$row[uti_qty]</td>
        </tr>
DELIMETER;
	
	}
	return $items;
}

?>