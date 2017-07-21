<?php
require_once '../DB/init.php';
if (is_logged_in()){

if(!empty($_POST) && isset($_POST['submit'])){
$x = date('Y-m-d h:i:s', time());
	$subject = escape($_POST['subject']);
	$links = escape($_POST['links']);
	if ( isset($_POST['first'])) {
		$first = 1;
	}
	else {
		$first = 0;
	}
	if (isset($_POST['second'])){
		$second = 1;
	}
	else {
		$second = 0;
	}
	if (isset($_POST['third'])){
		$third = 1;
	}
	else {
		$third = 0;
	}
	if (isset($_POST['fourth'])){
		$fourth = 1;
	}
	else {
		$fourth = 0;
	}
	$description = escape($_POST['description']);
try{
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $dbh->prepare("INSERT INTO announcements (description,links,first,second,third,fourth,time,staff,subject)
			VALUES (?,?,?,?,?,?,?,?,?)");
$sql->bindParam(1,$description);
$sql->bindParam(2,$links);
$sql->bindParam(3,$first);
		$sql->bindParam(4,$second);
			$sql->bindParam(5,$third);
				$sql->bindParam(6,$fourth);
		$sql->bindParam(7,$x);
			$sql->bindParam(8,$_SESSION['username']);
			$sql->bindParam(9,$subject);
$sql->execute();
echo "success" ;
}
catch(PDOException $e){
	echo $e->getMessage();
}
}
    $stmt  = $dbh->prepare("SELECT * FROM announcements");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
	


require '../templates/components/header.php';
require '../templates/components/navbar.php';
require '../templates/components/profile.php';
require '../templates/components/post.php';
require '../templates/components/sidebar.php';
require '../templates/components/footer.php';
}
else
  header('Location: index.php');
?>
