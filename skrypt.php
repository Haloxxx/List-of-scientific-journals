<?php
    
	
set_time_limit(0);
	


function sending($stmt, $layout) {
	
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	
	$number = $stmt->rowCount();
	
	if ($number == 0) echo 293;
	else{
		
	$noPages = intval($number/$layout);
	if($number%$layout) $noPages++;
	
	$i = 0;
		
	if(isSet($_GET['page'])) {
		$page = intval($_GET['page']);
	}
	else $page = 0;
		
	if($page < 1) {
		$page = 0;
	}
		
	if($page >= $noPages) {
		$page = $noPages-1;
		echo $page;
	}
		
	else {
		
	$loop = $layout;
	if($page == $noPages-1) $loop = $number%$layout;
		
	$end = $layout*($page+1);
	if ($page == $noPages-1) $end = $number;
		
	echo "<table align=center style='border: solid 1px black;'>";
	echo "<tr><th>Id</th><th>Tytuł</th><th>ISSN</th><th>e-ISSN</th><th>Tytuł2</th><th>ISSN2</th><th>e-ISSN2</th><th>Punkty</th></tr>";
		
		
	for ($i = 0; $i <$end; $i++){
			
		
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetch())) as $k=>$v)
		{
			if ($i <$layout*$page) continue;
			echo $v;
			if ($i >=$end) break;
		}
		echo "</tr>";
	}
		
	}	}
}
	
	
	
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}
	$points = 0;
	
	$servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=projekt", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully"; 
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
	
	$counter = 0;
	$layout = 100;
	
	
	$stmtstring = "SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE ";
	
	if(isSet($_GET['101']))
	{
		$counter++;
		$stmtstring = $stmtstring." `101` = ?";
	}

	
	if(isSet($_GET['102']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`102` = ?";
	}
	
	if(isSet($_GET['103']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `103` = ?";
	}

	
	if(isSet($_GET['104']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`104` = ?";
	}
	
	if(isSet($_GET['105']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `105` = ?";
	}

	
	if(isSet($_GET['106']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`106` = ?";
	}
	
	if(isSet($_GET['201']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `201` = ?";
	}

	
	if(isSet($_GET['202']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`202` = ?";
	}
	
	if(isSet($_GET['203']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `203` = ?";
	}

	
	if(isSet($_GET['204']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`204` = ?";
	}
	
	if(isSet($_GET['205']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `205` = ?";
	}

	
	if(isSet($_GET['206']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`206` = ?";
	}
	
	if(isSet($_GET['207']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`207` = ?";
	}
	
	if(isSet($_GET['208']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `208` = ?";
	}

	
	if(isSet($_GET['209']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`209` = ?";
	}
	
	if(isSet($_GET['301']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `301` = ?";
	}

	
	if(isSet($_GET['302']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`302` = ?";
	}
	
	if(isSet($_GET['303']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `303` = ?";
	}

	
	if(isSet($_GET['304']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`304` = ?";
	}
	
	if(isSet($_GET['401']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `401` = ?";
	}

	
	if(isSet($_GET['402']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`402` = ?";
	}
	
	if(isSet($_GET['403']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `403` = ?";
	}

	
	if(isSet($_GET['404']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`404` = ?";
	}
	
	if(isSet($_GET['405']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `405` = ?";
	}
	
	if(isSet($_GET['501']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `501` = ?";
	}

	
	if(isSet($_GET['502']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`502` = ?";
	}
	
	if(isSet($_GET['503']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `503` = ?";
	}

	
	if(isSet($_GET['504']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`504` = ?";
	}
	
	if(isSet($_GET['505']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `505` = ?";
	}

	
	if(isSet($_GET['506']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`506` = ?";
	}
	
	if(isSet($_GET['507']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`507` = ?";
	}
	
	if(isSet($_GET['508']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `508` = ?";
	}

	
	if(isSet($_GET['509']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`509` = ?";
	}
	
	if(isSet($_GET['510']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `510` = ?";
	}

	
	if(isSet($_GET['511']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`511` = ?";
	}
	
	if(isSet($_GET['601']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `601` = ?";
	}

	
	if(isSet($_GET['602']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`602` = ?";
	}
	
	if(isSet($_GET['603']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `603` = ?";
	}

	
	if(isSet($_GET['604']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`604` = ?";
	}
	
	if(isSet($_GET['605']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring." `605` = ?";
	}

	
	if(isSet($_GET['606']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`606` = ?";
	}
	
	if(isSet($_GET['607']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`607` = ?";
	}
	
	if(isSet($_GET['701']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		$stmtstring = $stmtstring."`701` = ?";
	}
	
	if(isSet($_GET['points']))
	{
		$points =  $_GET['points'];
	}
	
	if($counter)
	{
		
		if(isSet($_GET['title']) && $_GET['title']!="") {	
			
			if ($points)
			{
				$counter++;
			}
			
			
			$big_array = array_fill(0, $counter+1, 'x');
			$title = $_GET['title'];
			$title = '%'.$title.'%';
			$big_array[$counter]=$title;
			
			if ($points)
			{
				$big_array[$counter-1]=$points;
				$stmtstring = $stmtstring." and points > ?";
			}
			
			$stmtstring = $stmtstring." and title like ?";
			
            $stmt = $conn->prepare($stmtstring);
		    $stmt->bindValue($counter, $title);
			
			$stmt->execute($big_array);
			
			
			sending($stmt, $layout);
			
		}
		
		else if (isSet($_GET['title2']) && $_GET['title2']!="") {
			
			if ($points)
			{
				$counter++;
			}
			
			$big_array = array_fill(0, $counter+1, 'x');
			$title2 = $_GET['title2'];
			$title2 = '%'.$title2.'%';
			$big_array[$counter]=$title2;
			
			if ($points)
			{
				$big_array[$counter-1]=$points;
				$stmtstring = $stmtstring." and points > ?";
			}
			
			$stmtstring = $stmtstring." and title2 like ?";
			
            $stmt = $conn->prepare($stmtstring);
			$stmt->bindValue($counter, $title2);
		    $stmt->execute($big_array);
			
			sending($stmt, $layout);
			
		}
		
		else {
			
			if ($points)
			{
				$counter++;
			}
			
			$my_array = array_fill(0, $counter, 'x');
			
			if ($points)
			{
				$my_array[$counter-1]=$points;
				$stmtstring = $stmtstring." and points > ?";
			}
			
		
			$stmt = $conn->prepare($stmtstring);
			$stmt->execute($my_array);
		
			sending($stmt, $layout);
		}	
	}
	else
	
	
	if(isSet($_GET['id']) && $_GET['id']!=""){ 
		
		$stmt = $conn->prepare($stmtstring." id = ?");
		$stmt->execute(array($_GET['id']));
		
		sending($stmt, $layout);
	}
	else 
		
	if(isSet($_GET['issn']) && $_GET['issn']!=""){ 
		
		$stmt = $conn->prepare($stmtstring." issn = ?");
		$stmt->execute(array($_GET['issn']));
		
		sending($stmt, $layout);
	}
	
	else 
		
	if(isSet($_GET['issn2']) && $_GET['issn2']!=""){ 
		
		$stmt = $conn->prepare($stmtstring." issn2 = ?");
		$stmt->execute(array($_GET['issn2']));
		
		sending($stmt, $layout);
	}
	
	
	else 
		
	if(isSet($_GET['eissn']) && $_GET['eissn']!=""){ 
		
		$stmt = $conn->prepare($stmtstring." eissn = ?");
		$stmt->execute(array($_GET['eissn']));
		
		sending($stmt, $layout);
	}
	
	else 
		
	if(isSet($_GET['eissn2']) && $_GET['eissn2']!=""){ 
	
		$stmt = $conn->prepare($stmtstring." eissn2 = ?");
		$stmt->execute(array($_GET['eissn2']));
		
		sending($stmt, $layout);
	}
	
	else 
		
	if(isSet($_GET['title']) && $_GET['title']!=""){ 
		
		if ($points) {
			$stmtstring = $stmtstring." points > :points and";
		}
		
		$stmtstring = $stmtstring." title like :title";
		$stmt = $conn->prepare($stmtstring);
		
		if ($points) {
			$stmt->bindParam(':points', $points);
		}
		
		
		$title = "%".$_GET['title']."%";
		$stmt->bindParam(':title', $title);
		$stmt->execute();
		
		sending($stmt, $layout);
	}
	
	else 
		
	if(isSet($_GET['title2']) && $_GET['title2']!=""){ 
		
		
		if ($points) {
			$stmtstring = $stmtstring." points > :points and";
		}
		
		$stmtstring = $stmtstring." title like :title2";
		$stmt = $conn->prepare($stmtstring);
		
		if ($points) {
			$stmt->bindParam(':points', $points);
		}
		
		$title2 = "%".$_GET['title2']."%";
		$stmt->bindParam(':title2', $title2); 
		$stmt->execute();
	
		sending($stmt, $layout);
	}
	
	
	else{
	
		if ($points) {
			$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE points > ?");
			$stmt->execute(array($points));
		}
		else {
			$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista");
			$stmt->execute();	
		}
		
		sending($stmt, $layout);	
	}
	
    
?>