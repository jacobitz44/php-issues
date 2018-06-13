<?php
foreach($_POST['applied'] as $value){
  print $value;
}
if(!empty($_POST)) {
  /*
  $fname = $_POST['fname'];
    $fname = sanitize_string($fname);
  $mname = $_POST['mname'];
    $mname = sanitize_string($mname);
  $lname = $_POST['lname'];
    $lname = sanitize_string($lname);
  $dob= $_POST['dob'];
  $gender= $_POST['gender'];
  $year= $_POST['firstyear'];
  $SSN = $_POST['SSN'];
    $SSN=sanitize_ssn($SSN);
  $email = $_POST['email'];
    $email = sanitize_email($email);
  $address = $_POST['address'];
    $address = sanitize_string($address);
  $homeph = $_POST['homephone'];
  $cellph = $_POST['cellphone'];
  $grammarschool = $_POST['grammarschool'];
  $gschoolcity = $_POST['grammarschoolcity'];
  $gschoolstate = $_POST['grammarschoolstate'];
    $grammarschool = sanitize_string($grammarschool);
    $gschoolcity = sanitize_string($gschoolcity);
    $gschoolstate = sanitize_string($gschoolstate);
  $middleschool = $_POST['middleschool'];
  $mschoolcity = $_POST['middleschoolcity'];
  $mschoolstate = $_POST['middleschoolstate'];
    $middleschool = sanitize_string($middleschool);
    $mschoolcity = sanitize_string($mschoolcity);
    $mschoolstate = sanitize_string($mschoolstate);
  $numapplied = $_GET['c'];
*/



	//for($i=0; $i<$numapplied; $i++){
	//  $applied[$i] = $_POST['applied' . ($i+1)];
//	}
  /*$plantoattend = $_POST['attending'];
    $plantoattend = sanitize_string($plantoattend);
  $intendedmajor = $_POST['major'];
    $intendedmajor = sanitize_string($intendedmajor);
  $firstinfamily = $_POST['firsttocollege'];
	$relname = array();
  $relrelation = array();
  $relcollege = array();
	$r = $_GET['r'];
	for($i = 0; $i<$r;$i++){
	  $relname[$i] = $_POST['name' . ($i+1)];
    $relrelation[$i] = $_POST['fam' . ($i+1)];
    $relcollege[$i] = $_POST['college' . ($i+1)];
	}
  $otheraid = $_POST['finaid'];
  $a= $_GET['a'];
	$appliedaid = array();
	for($i = 0; $i<$a; $i++){
		$appliedaid[$i] = $_POST['aid' . ($i+1)];
	}

	$s = $_GET['s'];
  $amt = array();
	$earnedaid = array();
	for($i = 0; $i<$s;$i++){
    $earnedaid[$i] = $_POST['earnedaid' . ($i+1)];
    $amt[$i] = $_POST['aidamount' . ($i+1)];
  }

  $e = $_GET['e'];
  $employer = array();
  $empstart = array();
  $empend = array();
  $emphours = array();
  $empwage = array();
  for($i = 0; $i < $e; $i++){
    $employer[$i] = $_POST['emp' . ($i+1)];
      $employer[$i] = sanitize_string($employer[$i]);
    $empstart[$i] = $_POST['start' . ($i+1)];
    $empend[$i] = $_POST['end' . ($i+1)];
    $emphours[$i] = $_POST['hours' . ($i+1)];
    $empwage[$i] = $_POST['wage' . ($i+1)];

  }

  $ex = $_GET['ex'];
  $extra = array();
  $extrastart = array();
  $extraend = array();
  $extrahours = array();
  $extrapos = array();
  for($i = 0; $i < $ex; $i++){
    $extra[$i] = $_POST['extracurr' . ($i+1)];
      $extra[$i] = sanitize_string($extra[$i]);
    $extrastart[$i] = $_POST['extrastart' . ($i+1)];
    $extraend[$i] = $_POST['extraend' . ($i+1)];
    $extrahours[$i] = $_POST['extracurrhour' . ($i+1)];
    $extrapos[$i] = $_POST['extracurrpos' . ($i+1)];
      $extrapos[$i] = sanitize_string($extrapos[$i]);

  }

  $v = $_GET['v'];
  $vol = array();
  $volstart = array();
  $volend = array();
  $volhours = array();
  $volpos = array();
  for($i = 0; $i < $v; $i++){
    $vol[$i] = $_POST['volorg' . ($i+1)];
      $vol[$i] = sanitize_string($vol[$i]);
    $volstart[$i] = $_POST['volstart' . ($i + 1)];
    $volend[$i] = $_POST['volend' . ($i+1)];
    $volhours[$i] = $_POST['volhours' . ($i+1)];
    $volpos[$i] = $_POST['volpos' . ($i+1)];
      $volpos[$i] = sanitize_string($volpos[$i]);
  }

  $sp=$_GET['sp'];
  $sport = array();
  $sportstart = array();
  $sportend = array();
  $sporthours = array();
  $sportpos = array();
  for($i = 0; $i < $sp; $i++){
    $sport[$i]= $_POST['sport' . ($i+1)];
      $sport[$i] = sanitize_string($sport[$i]);
    $sportstart[$i] = $_POST['sportstart' . ($i+1)];
    $sportend[$i] = $_POST['sportend' . ($i+1)];
    $sporthours[$i] = $_POST['sporthours' . ($i+1)];
    $sportpos[$i] = $_POST['sportpos' . ($i+1)];
      $sportpos[$i] = sanitize_string($sportpos[$i]);
  }

  $parentsmarried = $_POST['married'];
  $dadname = $_POST['dadname'];
    $dadname = sanitize_string($dadname);
  $dadaddress = $_POST['dadaddress'];
  $dadhomeowner = $_POST['dadhomeowner'];
  $dadjob = $_POST['dadjob'];
    $dadjob = sanitize_string($dadjob);
  $dadincome = $_POST['dadincome'];
  $dademp = $_POST['dademployer'];
    $dademp = sanitize_string($dademp);
  $dadempcity = $_POST['dadempcity'];
    $dadempcity = sanitize_string($dadempcity);
  $dadempstate = $_POST['dadempstate'];
    $dadempstate = sanitize_string($dadempstate);

  $momname = $_POST['momname'];
    $momname = sanitize_string($momname);
  $momaddress = $_POST['momaddress'];
  $momhomeowner = $_POST['momhomeowner'];
  $momjob = $_POST['momjob'];
    $momjob = sanitize_string($momjob);
  $momincome = $_POST['momincome'];
  $momemp = $_POST['momemployer'];
    $momemp = sanitize_string($momemp);
  $momempcity = $_POST['momempcity'];
    $momempcity = sanitize_string($momempcity);
  $momempstate = $_POST['momempstate'];
    $momempstate = sanitize_string($momempstate);

  $totalfamincome = $_POST['totalfamincome'];
  $EFC = $_POST['efc'];

  $si = $_GET['si'];
  $sibling = array();
  $sibage = array();
  $sibschool = array();
  for($i =0; $i < $si; $i++){
    $sibling[$i] = $_POST['siblingname' . ($i+1)];
      $sibling[$i] = sanitize_string($sibling[$i]);
    $sibage[$i] = $_POST['siblingage' . ($i+1)];
    $sibschool[$i] = $_POST['siblingschool' . ($i+1)];
      $sibschool[$i] = sanitize_string($sibschool[$i]);
  }

    $famcircumstances = $_POST['famcircumstances'];
      $famcircumstances = sanitize_string($famcircumstances);
  if($year == 1){
    $essay1 = $_POST['essayq1'];
      $essay1 = sanitize_string($essay1);
    $essay2 = $_POST['essayq2'];
      $essay2 = sanitize_string($essay2);
  }else{
    $year2essay = $_POST['2yearessay'];
      $year2essay = sanitize_string($year2essay);
    $year2short = $_POST['2yearshortanswer'];
      $year2short = sanitize_string($year2short);
  }*/
}
function sanitize_string($dirty){
  $dirty = filter_var($dirty, FILTER_SANITIZE_STRING);
  $pattern = '/[0-9a-zA-Z\s]/';
  $replace = '';
  $clean = str_replace($pattern, $replace, $dirty);
  return $clean;
}
function sanitize_email($dirty){
  $cleaner = filter_var($dirty, FILTER_SANITIZE_EMAIL);
  if(!filter_var($cleaner, FILTER_VALIDATE_EMAIL) == true){
    return null;
  }else{
    return $cleaner;
  }
}
function sanitize_ssn($dirty){
  $length = strlen($dirty);
  $clean = $dirty;
  for($i= 0; $i< $length; $i++){
    $char = substr($dirty, $i, 1);
    if($char != "0" && $char != "1" && $char !="2" && $char != "3" && $char!="4" && $char!="5" && $char != "6" && $char!="7" && $char!="8" &&
    $char !="9" && $char != "-"){
      $dirty = str_replace($char, '', $dirty);
    }
  }
  $clean = $dirty;
  return $clean;
}
$servername= 'localhost';
$username= 'root';
$pword= '';
$db='SimboliAward';
// Create connection
$conn = new mysqli($servername, $username, $pword, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  /*$uploaddir = 'uploads/';

  if($_FILES["transcript"]["error"] > 0){
    $file_result .= "No file uploaded, or invalid file ";
    $file_result .= "Error Code: " . $_FILES["transcript"]["error"] . "<br>";
  }else{
    $transcriptfile = basename($_FILES["transcript"]["name"]);
    $transcriptloc =  $uploaddir . $transcriptfile;
    $transcripttype = $_FILES["transcript"]["type"];
    move_uploaded_file($_FILES["transcript"]["tmp_name"], $transcriptloc);
  }
  if($_FILES["testscores"]["error"] > 0){
    $file_result .= "No file uploaded, or invalid file ";
    $file_result .= "Error Code: " . $_FILES["testscores"]["error"] . "<br>";
  }else{
    $testscorefile = basename($_FILES["testscores"]["name"]);
    $testscoreloc = $uploaddir . $testscorefile;
    $testscoretype = $_FILES["testscores"]["type"];
    move_uploaded_file($_FILES["testscores"]["tmp_name"], $testscoreloc);
  }
  if($_FILES["recommendation"]["error"] > 0){
    $file_result .= "No file uploaded, or invalid file ";
    $file_result .= "Error Code: " . $_FILES["recommendation"]["error"] . "<br>";
  }else{
    $recommendationfile = basename($_FILES["recommendation"]["name"]);
    $recommendationloc = $uploaddir . $recommendationfile;
    $recommendationtype = $_FILES["recommendation"]["type"];
    move_uploaded_file($_FILES["recommendation"]["tmp_name"], $recommendationloc);
  }
  $sql1 = "INSERT INTO PersonalInfo(lname, fname, mname, gender, SSN, address, dob, email, homephone, cellphone, year, parentsmarried, totalfamincome)
  VALUES ('$lname', '$fname','$mname','$gender', '$SSN', '$address', '$dob', '$email','$homeph', '$cellph', '$year', '$parentsmarried', '$totalfamincome');";
  if ($conn->query($sql1) === TRUE) {
    $id = $conn->insert_id;
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }
  $conn->close();
  $conn2 = new mysqli($servername, $username, $pword, $db);
  for($i = 0; $i<$r; $i++){
    $sql = "INSERT INTO Relatives(id, name, relation, college) VALUES('$id', '$relname[$i]', '$relrelation[$i]', 'relcollege[$i]');";
	   if($conn2->query($sql) === TRUE){
		   echo "New Record created successfully";
	   }else{
		   echo "Error" . $sql . "<br>" . $conn->error;
   	}
  }

  for($i = 0; $i<$a; $i++){
    $sql = "INSERT INTO AppliedAid(id, aidname) VALUES('$id', '$appliedaid[$i]');";
     if($conn2->query($sql) === TRUE){
       echo "New Record created successfully";
     }else{
       echo "Error" . $sql . "<br>" . $conn->error;
    }
  }
  for($i = 0; $i<$s; $i++){
    $sql = "INSERT INTO RecievedAid(id, scholarship, amount) VALUES('$id', '$earnedaid[$i]', 'amt[$i]');";
     if($conn2->query($sql) === TRUE){
       echo "New Record created successfully";
     }else{
       echo "Error" . $sql . "<br>" . $conn->error;
    }
  }



  $sql2 = "INSERT INTO Education(id, gschool, gschoolcity, gschoolstate, mschool, mschoolcity, mschoolstate, intendedcollege, intendedmajor, firsttocollege, otheraid, EFC)
  VALUES ('$id','$grammarschool','$gschoolcity','$gschoolstate','$middleschool','$mschoolcity','$mschoolstate','$plantoattend','$intendedmajor', '$firstinfamily', '$otheraid', '$EFC');";
  if ($conn2->query($sql2) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql2 . "<br>" . $conn2->error;
  }
  for($i = 0; $i < $e; $i++){
    $sql3 = "INSERT INTO Employment(id, employer, startdate, enddate, hours, wage)
    VALUES ('$id','$employer[$i]', '$empstart[$i]','$empend[$i]','$emphours[$i]', '$empwage[$i]');";
    if ($conn2->query($sql3) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql3 . "<br>" . $conn2->error;
    }
  }
  for($i = 0; $i < $ex; $i++){
    $sql4 = "INSERT INTO ExtraCurriculars(id, activity, startdate, enddate, position, hours)
    VALUES ('$id','$extra[$i]', '$extrastart[$i]','$extraend[$i]','$extrapos[$i]', '$extrahours[$i]');";
    if ($conn2->query($sql4) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql4 . "<br>" . $conn2->error;
    }
  }
  for($i = 0; $i < $v; $i++){
    $sql5 = "INSERT INTO VolunteerWork(id, organization, startdate, enddate, position, hours)
    VALUES ('$id','$vol[$i]', '$volstart[$i]','$volend[$i]','$volpos[$i]', '$volhours[$i]');";
    if ($conn2->query($sql5) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql5 . "<br>" . $conn2->error;
    }
  }
  for($i = 0; $i < $sp; $i++){
    $sql6 = "INSERT INTO Sports(id, sport, startdate, enddate, position, hours)
    VALUES ('$id','$sport[$i]', '$sportstart[$i]','$sportend[$i]','$sportpos[$i]', '$sporthours[$i]');";
    if ($conn2->query($sql6) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql6 . "<br>" . $conn2->error;
    }
  }

  $sql7 = "INSERT INTO Dads(id, name, address, homeowner, job, income, employer, empcity, empstate)
  VALUES ('$id','$dadname', '$dadaddress','$dadhomeowner','$dadjob', '$dadincome', '$dademp', '$dadempcity', '$dadempstate');";
  if ($conn2->query($sql7) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql7 . "<br>" . $conn2->error;
  }

  $sql8 = "INSERT INTO Moms(id, name, address, homeowner, job, income, employer, empcity, empstate)
  VALUES ('$id','$momname', '$momaddress','$momhomeowner','$momjob', '$momincome', '$momemp', '$momempcity', '$momempstate');";
  if ($conn2->query($sql8) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql8 . "<br>" . $conn2->error;
  }
  for($i = 0; $i < $si; $i++){
    $sql9 = "INSERT INTO siblings(id, name, age, school)
    VALUES ('$id','$sibling[$i]', '$sibage[$i]','$sibschool[$i]');";
    if ($conn2->query($sql9) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql9 . "<br>" . $conn2->error;
    }
  }

  $sql10 = "INSERT INTO FirstYearAnswers(id, q1, q2, famcircumstances)
  VALUES ('$id','$essay1', '$essay2','$famcircumstances');";
  if ($conn2->query($sql10) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql10 . "<br>" . $conn2->error;
  }
  if($year == 2){
    $sql11 = "INSERT INTO SecondYear(id, essay, shortanswer, famcircumstances)
    VALUES ('$id','$year2essay', '$year2short','$famcircumstances');";
    if ($conn2->query($sql11) === TRUE) {
      echo "New record created successfully";
    }else {
      echo "Error: " . $sql11 . "<br>" . $conn2->error;
    }
  }
  for($i = 0; $i<$numapplied; $i++){
  	$sql = "INSERT INTO Colleges(id, college) VALUES('$id','$applied[$i]');";
  	if($conn2->query($sql) === TRUE){
  		echo "New Record created successfully";
  	}else{
  		echo "Error: " . $sql . "<br>" . $conn2->error;
  	}
  }
 $sql = "INSERT INTO Uploads(id, name, location, file_ext, type) VALUES('$id', '$transcriptfile', '$uploaddir', '$transcripttype', 'transcript');";
 if($conn2->query($sql) === TRUE){
   echo "New record created successfuly";
 }else{
	 echo "Error: " . $sql . "<br>" . $conn2->error;
 }
 $sql = "INSERT INTO Uploads(id, name, location, file_ext, type) VALUES('$id', '$testscorefile', '$uploaddir', '$testscoretype', 'scores');";
 if($conn2->query($sql) === TRUE){
   echo "New record created successfuly";
 }else{
	 echo "Error: " . $sql . "<br>" . $conn2->error;
 }
 $sql = "INSERT INTO Uploads(id, name, location, file_ext, type) VALUES('$id', '$recommendationfile', '$uploaddir', '$recommendationtype', 'recommendation');";
 if($conn2->query($sql) === TRUE){
   echo "New record created successfuly";
 }else{
	 echo "Error: " . $sql . "<br>" . $conn2->error;
 }


  $conn2->close();


*/


?>
