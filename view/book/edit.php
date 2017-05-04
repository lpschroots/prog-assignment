<div class="container">
	<h1>Edit Book</h1>
	<form action="<?= URL ?>book/editSave" method="post">
	
		<input type="text" name="firstname" value="<?= $book['book_title']; ?>">
		<input type="text" name="lastname" value="<?= $student['']; ?>">
		
		<select name="gender">
			<option value="male" <?php if ($book['student_gender'] == "male") { echo "selected=\"true\""; } ?>>Male</option>
			<option value="female" <?php if ($book['student_gender'] == "female") { echo "selected=\"true\""; } ?>>Female</option>	
		</select>

		<input type="hidden" name="id" value="<?= $book['student_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
