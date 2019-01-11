<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { ?>

<?php  require_once '../controller/connect.php'; 
		global $conn;
	
?>

	<div class="container-fluid">
		<div class="jumbotron bg-info text-light text-center mt-5">
			<h4>Login</h4>
		</div>

		<form>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" placeholder="enter username">
				<span class="validation"></span>
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" placeholder="enter password">
				<span class="validation"></span>
			</div>

		</form>

			<div class="text-center py-4">
				<a href="./register.php" class="btn btn-secondary">Register</a>
				<button type="button" class="btn btn-primary" id="login">Login</button>
			</div>

	</div>



<?php } ?>