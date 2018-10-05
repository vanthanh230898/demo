<?php include 'users.php'; ?>
<?php
	$obj_users = new users();
	$id = '';
	$user = '';
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$user = $obj_users->findUser($id);
	} else {
		die('error');
	}

?>


<form>
	User name: <input type="text" name="usename" value="<?php echo $user['usename'] ?>"> <br>
	Password: <input type="password" name="password" value="<?php echo $user['password'] ?>"> <br>
	<input type="submit" value="Them moi">
</form>

<?php
if(isset($_GET['usename']))
{
	$data = [
		'usename' => $_GET['usename'],
		'password' => $_GET['password'],
		'id' => $_GET['id']
	];

	$obj_users->updateUser($data);
}

?>