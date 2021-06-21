<!DOCTYPE html>
<?php
	include "header.php";
?>
<html>
    <body>
		<div class="col-6" style="float: right">
		<form action="php/reg.php" method="post">
			<div class="form-group">
			<label for="inputName" class="col-2 control-label">Imya</label>
				<div class="col-4">
					<input type="text" class="form-control" id="inputName" placeholder="Vvedite imya" required minlength="4" name="name">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="col-2 control-label">Email:</label>
				<div class="col-4">
					<input type="email" class="form-control" id="inputEmail" placeholder="email" required name="email">
				</div>
 			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-2 control-label">Password:</label>
				<div class="col-4">
					<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required minlength="5" name="pas">
				</div>
			</div>
			<div class="help-block with-errors"> </div>
			<div class="form-group">
				<div class="text-right">
					<button type="submit" class="btn btn-primary btn-lg">Register</button>
				</div>
			</div>
		</form>
		</div>
	</body>
</html>