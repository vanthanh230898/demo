<form>
	User name: <input type="text" name="usename"> <br>
	Password: <input type="password" name="password"> <br>
	<input type="submit" value="Them moi">
</form>

<?php include ('users.php'); ?>
<?php
	if(isset($_GET['usename'])){
		$data = [
			'usename' => $_GET['usename'];
			'password' => $_GET['password'];
		];
		$obj_users = new users();

		$obj_users->insertUser($data);
	}
?>