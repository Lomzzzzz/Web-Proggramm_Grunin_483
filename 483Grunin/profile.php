<!DOCTYPE html>
<?php
	include "header.php";
?>
<html>
    <body>
				<div class="col">
					<?php
						if (!is_null($_COOKIE["user"])) echo '<h4> Привет, ' . htmlspecialchars($_COOKIE["user"]) . '! </h4>';
					?>
					<a href="php/exit.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="float: right">Exit</a> </p>
				</div>
				<div class="col">					
				<div class="row">
				
					<h2>Добавление записи</h2>
					<form action="php/post.php" method="post" enctype="multipart/form-data">
						<div class="col mb-4">
							<input value="" name="title" type="text" class="form-control" placeholder="Title">
						</div>
						<div class="col">
							<label class="form-label">Содержимое записи</label>
							<textarea name="text" class="form-control" rows="6"></textarea>
						</div>
						<div class="input-group col mb-4 mt-4">
							<input name="img" type="file" class="form-control" multiple accept="image/*,image/jpeg">
							<label class="input-group-text" for="inputGroupFile02">Upload</label>
						</div>
						<div class="col col-6">
							<button name="add_post" class="btn btn-primary" type="submit">Добавить запись</button>
						</div>
					</form>
				</div>
				</div>
				<div class="col">
					<h2> Изменить пароль </h2>
					<form action="php/reset.php" method="post">
						<div class="col mb-4">
							<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Старый пароль" required minlength="5" name="pas1">
						</div>
						<div class="col">
							<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Новый пароль" required minlength="5" name="pas2">
						</div>
						<div class="col col-6">
							<button name="reset_pas" class="btn btn-primary" type="submit">Изменить пароль</button>
						</div>
					</form>
				</div>
				
    </body>
</html>
