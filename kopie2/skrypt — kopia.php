<?php
    
	
set_time_limit(0);
	

	
	
	
	
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
	/*
	$input = array(
	
		"101" => "",
		"102" => "",
		"103" => "",
		"104" => "",
		"105" => "",
		"106" => "",
		"107" => "",
		"201" => "",
		"202" => "",
		"203" => "",
		"204" => "",
		"205" => "",
		"206" => "",
		"207" => "",
		"208" => "",
		"209" => "",
		"301" => "",
		"302" => "",
		"303" => "",
		"304" => "",
		"401" => "",
		"402" => "",
		"403" => "",
		"404" => "",
		"405" => "",
		"501" => "",
		"502" => "",
		"503" => "",
		"504" => "",
		"505" => "",
		"506" => "",
		"507" => "",
		"508" => "",
		"509" => "",
		"510" => "",
		"511" => "",
		"601" => "",
		"602" => "",
		"603" => "",
		"604" => "",
		"605" => "",
		"606" => "",
		"607" => "",
		"701" => "",
	
	);
	*/
	
	
	
	$stmtstring = "SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE ";
	if(isSet($_GET['101']))
	{
		$counter++;
		//$input["101"] = "x";
		$stmtstring = $stmtstring." `101` = ?";
	}

	
	if(isSet($_GET['102']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["102"] = "x";
		$stmtstring = $stmtstring."`102` = ?";
	}
	
	if(isSet($_GET['103']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["103"] = "x";
		$stmtstring = $stmtstring." `103` = ?";
	}

	
	if(isSet($_GET['104']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["104"] = "x";
		$stmtstring = $stmtstring."`104` = ?";
	}
	
	if(isSet($_GET['105']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["105"] = "x";
		$stmtstring = $stmtstring." `105` = ?";
	}

	
	if(isSet($_GET['106']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["106"] = "x";
		$stmtstring = $stmtstring."`106` = ?";
	}
	
	if(isSet($_GET['201']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["201"] = "x";
		$stmtstring = $stmtstring." `201` = ?";
	}

	
	if(isSet($_GET['202']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["202"] = "x";
		$stmtstring = $stmtstring."`202` = ?";
	}
	
	if(isSet($_GET['203']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["203"] = "x";
		$stmtstring = $stmtstring." `203` = ?";
	}

	
	if(isSet($_GET['204']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["204"] = "x";
		$stmtstring = $stmtstring."`204` = ?";
	}
	
	if(isSet($_GET['205']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["205"] = "x";
		$stmtstring = $stmtstring." `205` = ?";
	}

	
	if(isSet($_GET['206']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["206"] = "x";
		$stmtstring = $stmtstring."`206` = ?";
	}
	
	if(isSet($_GET['207']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["207"] = "x";
		$stmtstring = $stmtstring."`207` = ?";
	}
	
	if(isSet($_GET['208']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["208"] = "x";
		$stmtstring = $stmtstring." `208` = ?";
	}

	
	if(isSet($_GET['209']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["209"] = "x";
		$stmtstring = $stmtstring."`209` = ?";
	}
	
	if(isSet($_GET['301']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["301"] = "x";
		$stmtstring = $stmtstring." `301` = ?";
	}

	
	if(isSet($_GET['302']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["302"] = "x";
		$stmtstring = $stmtstring."`302` = ?";
	}
	
	if(isSet($_GET['303']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["303"] = "x";
		$stmtstring = $stmtstring." `303` = ?";
	}

	
	if(isSet($_GET['304']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["304"] = "x";
		$stmtstring = $stmtstring."`304` = ?";
	}
	
	if(isSet($_GET['401']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["401"] = "x";
		$stmtstring = $stmtstring." `401` = ?";
	}

	
	if(isSet($_GET['402']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["402"] = "x";
		$stmtstring = $stmtstring."`402` = ?";
	}
	
	if(isSet($_GET['403']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["403"] = "x";
		$stmtstring = $stmtstring." `403` = ?";
	}

	
	if(isSet($_GET['404']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["404"] = "x";
		$stmtstring = $stmtstring."`404` = ?";
	}
	
	if(isSet($_GET['405']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["405"] = "x";
		$stmtstring = $stmtstring." `405` = ?";
	}
	
	if(isSet($_GET['501']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["501"] = "x";
		$stmtstring = $stmtstring." `501` = ?";
	}

	
	if(isSet($_GET['502']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["502"] = "x";
		$stmtstring = $stmtstring."`502` = ?";
	}
	
	if(isSet($_GET['503']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["503"] = "x";
		$stmtstring = $stmtstring." `503` = ?";
	}

	
	if(isSet($_GET['504']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["504"] = "x";
		$stmtstring = $stmtstring."`504` = ?";
	}
	
	if(isSet($_GET['505']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["505"] = "x";
		$stmtstring = $stmtstring." `505` = ?";
	}

	
	if(isSet($_GET['506']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["506"] = "x";
		$stmtstring = $stmtstring."`506` = ?";
	}
	
	if(isSet($_GET['507']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["507"] = "x";
		$stmtstring = $stmtstring."`507` = ?";
	}
	
	if(isSet($_GET['508']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["508"] = "x";
		$stmtstring = $stmtstring." `508` = ?";
	}

	
	if(isSet($_GET['509']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["509"] = "x";
		$stmtstring = $stmtstring."`509` = ?";
	}
	
	if(isSet($_GET['510']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["510"] = "x";
		$stmtstring = $stmtstring." `510` = ?";
	}

	
	if(isSet($_GET['511']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["511"] = "x";
		$stmtstring = $stmtstring."`511` = ?";
	}
	
	if(isSet($_GET['601']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["601"] = "x";
		$stmtstring = $stmtstring." `601` = ?";
	}

	
	if(isSet($_GET['602']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["602"] = "x";
		$stmtstring = $stmtstring."`602` = ?";
	}
	
	if(isSet($_GET['603']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["603"] = "x";
		$stmtstring = $stmtstring." `603` = ?";
	}

	
	if(isSet($_GET['604']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["604"] = "x";
		$stmtstring = $stmtstring."`604` = ?";
	}
	
	if(isSet($_GET['605']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["605"] = "x";
		$stmtstring = $stmtstring." `605` = ?";
	}

	
	if(isSet($_GET['606']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["606"] = "x";
		$stmtstring = $stmtstring."`606` = ?";
	}
	
	if(isSet($_GET['607']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["607"] = "x";
		$stmtstring = $stmtstring."`607` = ?";
	}
	
	if(isSet($_GET['701']))
	{
		if($counter) $stmtstring = $stmtstring." and ";
		$counter++;
		//$input["701"] = "x";
		$stmtstring = $stmtstring."`701` = ?";
	}
	
	
	//echo var_dump($input);
	
	$my_array = array_fill(0, $counter, 'x');
	
	//echo var_dump($my_array);
	
	//echo $stmtstring;
	//$stmtstring = "SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE `101` = ? and `102` and ?";
	
	
	if($counter)
	{
		
		if(isSet($_GET['title']) && $_GET['title']!="") {
			
			$big_array = array_fill(0, $counter+1, 'x');
			$title = $_GET['title'];
			$title = '%'.$title.'%';
			$big_array[$counter]=$title;
			
			$stmtstring = $stmtstring." and title like ?";//'%GREEK%'".$title;
			
            $stmt = $conn->prepare($stmtstring);
		    $stmt->bindValue($counter, $title);
			
			$stmt->execute($big_array);
			
			$number = $stmt->rowCount();
		
		$noPages = intval($number/$layout);
		if($number%$layout) $noPages++;
		
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
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
		
		}
			
		}
		
		else if (isSet($_GET['title2']) && $_GET['title2']!="") {
			
			$title2 = $_GET['title2'];
			$title2 = '%'.$title2.'%';
			$big_array[$counter]=$title2;
			
			$stmtstring = $stmtstring." and title2 like ?";
			
            $stmt = $conn->prepare($stmtstring);
			$stmt->bindValue($counter, $title2);
		    $stmt->execute($big_array_array); //array($_GET['101'],$_GET['102'])
			
			$number = $stmt->rowCount();
		
		$noPages = intval($number/$layout);
		if($number%$layout) $noPages++;
		
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
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
		
		}
		}
		
		else {
		
			$stmt = $conn->prepare($stmtstring);
			$stmt->execute($my_array); //array($_GET['101'],$_GET['102'])
			$number = $stmt->rowCount();
		
		$noPages = intval($number/$layout);
		if($number%$layout) $noPages++;
		
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
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
			if($page != 0) {
				echo $page;
			}
			else echo -2;
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
		
		}
		
		}	
	}
	else
	
	
	if(isSet($_GET['id']) && $_GET['id']!=""){ 
		$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE id = ?");
		$stmt->execute(array($_GET['id']));
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table align=center style='border: solid 1px black;'>";
		echo "<tr><th>Id</th><th>Tytuł</th><th>ISSN</th><th>e-ISSN</th><th>Tytuł2</th><th>ISSN2</th><th>e-ISSN2</th><th>Punkty</th></tr>";
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo $v;
		}
	}
	else 
		
	if(isSet($_GET['issn']) && $_GET['issn']!=""){ 
		$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE issn = ?");
		$stmt->execute(array($_GET['issn']));
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table align=center style='border: solid 1px black;'>";
		echo "<tr><th>Id</th><th>Tytuł</th><th>ISSN</th><th>e-ISSN</th><th>Tytuł2</th><th>ISSN2</th><th>e-ISSN2</th><th>Punkty</th></tr>";
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo $v;
		}
	}
	
	else 
		
	if(isSet($_GET['issn2']) && $_GET['issn2']!=""){ 
		$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE issn2 = ?");
		$stmt->execute(array($_GET['issn2']));
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		echo "<table align=center style='border: solid 1px black;'>";
		echo "<tr><th>Id</th><th>Tytuł</th><th>ISSN</th><th>e-ISSN</th><th>Tytuł2</th><th>ISSN2</th><th>e-ISSN2</th><th>Punkty</th></tr>";
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo $v;
		}
	}
	
	
	else 
		
	if(isSet($_GET['eissn']) && $_GET['eissn']!=""){ 
		$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE eissn = ?");
		$stmt->execute(array($_GET['eissn']));
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		
		echo "<table align=center style='border: solid 1px black;'>";
		echo "<tr><th>Id</th><th>Tytuł</th><th>ISSN</th><th>e-ISSN</th><th>Tytuł2</th><th>ISSN2</th><th>e-ISSN2</th><th>Punkty</th></tr>";
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo $v;
		}
	}
	
	else 
		
	if(isSet($_GET['eissn2']) && $_GET['eissn2']!=""){ 
		$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE eissn2 = ?");
		$stmt->execute(array($_GET['eissn2']));
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		
		echo "<table align=center style='border: solid 1px black;'>";
		echo "<tr><th>Id</th><th>Tytuł</th><th>ISSN</th><th>e-ISSN</th><th>Tytuł2</th><th>ISSN2</th><th>e-ISSN2</th><th>Punkty</th></tr>";
		
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo $v;
		}
	}
	/*if(isSet($_GET['101']) || isSet($_GET['102']) || isSet($_GET['102']) || isSet($_GET['103']) || isSet($_GET['104']) || isSet($_GET['105']) || isSet($_GET['106']) || isSet($_GET['107']) || isSet($_GET['201']) || isSet($_GET['202']) || isSet($_GET['203']) || isSet($_GET['204']) || isSet($_GET['205']) || isSet($_GET['206']) || isSet($_GET['207']) || isSet($_GET['208']) || isSet($_GET['209']) || isSet($_GET['301']) || isSet($_GET['302']) || isSet($_GET['302']) || isSet($_GET['303']) || isSet($_GET['304']) || isSet($_GET['401']) || isSet($_GET['402']) || isSet($_GET['402']) || isSet($_GET['403']) || isSet($_GET['404']) || isSet($_GET['405']) || isSet($_GET['501']) || isSet($_GET['502']) || isSet($_GET['503']) || isSet($_GET['504']) || isSet($_GET['505']) || isSet($_GET['506']) || isSet($_GET['507']) || isSet($_GET['508']) || isSet($_GET['509']) || isSet($_GET['601']) || isSet($_GET['602']) || isSet($_GET['603']) || isSet($_GET['604']) || isSet($_GET['605']) || isSet($_GET['606']) || isSet($_GET['607']) || isSet($_GET['701']))
	{
		//$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE `101` = ?, `102` = ?, `103` = ?, `104` = ?, `105` = ?, `106` = ?, `107` = ?, `201` = ?, `202` = ?, `203` = ?, `204` = ?, `205` = ?, `206` = ?");
		$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE `101` = ? and `402` = ?");
		//$stmt->execute(array($_GET['101'],$_GET['102'],$_GET['103'],$_GET['104'],$_GET['105'],$_GET['106'],$_GET['107'],$_GET['201'],$_GET['202'],$_GET['203'],$_GET['204'],$_GET['205'],$_GET['206']));
		$stmt->execute(array($_GET['101'], ''));
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo $v;
		}
	}*/
	
	else 
		
	if(isSet($_GET['title']) && $_GET['title']!=""){ 
		$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE title like :title");
		$title = "%".$_GET['title']."%";
		$stmt->bindParam(':title', $title); 
		$stmt->execute();
		
		$number = $stmt->rowCount();
		
		$noPages = intval($number/$layout);
		if($number%$layout) $noPages++;
		
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
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
		
		}
	}
	
	else 
		
	if(isSet($_GET['title2']) && $_GET['title2']!=""){ 
		$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista WHERE title2 like :title2");
		$title2 = "%".$_GET['title2']."%";
		$stmt->bindParam(':title2', $title2); 
		$stmt->execute();
		
		$number = $stmt->rowCount();
		
		$noPages = intval($number/$layout);
		if($number%$layout) $noPages++;
		
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
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
		
		}
	}
	
	
	else{
	
		$stmt = $conn->prepare("SELECT id, title, issn, eissn, title2, issn2, eissn2, points FROM lista");
		$stmt->execute();
		
		$number = $stmt->rowCount();
		
		$noPages = intval($number/$layout);
		if($number%$layout) $noPages++;
		
		
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
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
		
		}
	}
	
    
?>