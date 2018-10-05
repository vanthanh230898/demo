
<?php
include ('./users.php');
$obj_users = new users();
//xoa
$id = '';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$obj_users->deleteUser($id);
}
$keyword = '';
if(isset($_GET['keyword']))
{
	$keyword = $_GET['keyword'];
}
$users = $obj_users->getUsers($keyword);
die();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cau 5</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/styles.css">
	<link rel="stylesheet" type="text/css" href="public/css/type-12.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="col-md-12 boder">
				<div class="type">Our Team</div>
				<form>
					<input type="text" name="keyword" placeholder="Nhap tu khoa">
					<input type="submit" value="tim kiem">
				</form>
				<div class="row">
					<?php foreach($users as $user): ?>
					<div class="col-md-4 col-sm-6 col-xs-12 class">
						<div class="hover">
						<div class="images">
							<img src="public/images/photo1.PNG" alt="imgAlt">
						</div>
						</div>
						<div class="overlays">
						<div class="content">
							<p>Senior salement with 15 year of expeience. He know everything about the products he offer</p>
						</div>
						</div>		
					<div class="tieude">
						<a href='cau5.php?id=<?php echo $user['id'] ?>'>Xoa</a>
						<a href='capnhat.php?id=<?php echo $user['id'] ?>'>Cap nhat</a>
					</div>
				<?php endforeach; ?>
				</div>
				</div>
			</div>
		</div>
	</header>
</body>
</html>