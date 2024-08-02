?php 
include '../../config.php';
$admin=new Admin();
$username=$_POST['username'];
$password=$_POST['password'];$stmt=$admin->ret("SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'");
$num=$stmt->rowCount();
if($num>0){
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	$aid=$row['a_id'];
	$_SESSION['a_id']=$aid;
echo "<script>alert('Login Successful...');window.location='../index.php';</script>";
}else{
	echo "<script>alert('Login Failed...');window.location='../login.php';</script>";
}
?>
