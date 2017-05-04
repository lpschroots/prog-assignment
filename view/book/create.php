<main>
	<header class="books">
		<h1>Add Book</h1>
	</header>
	<nav>
		<ul>
			<li><a href="<?= URL ?>author/index"><h4>Home</h4></a></li>
		</ul>
		
	</nav>
	<div class="form">
	<form action="<?= URL ?>book/createSave" method="post">
		<div><label>Author id</label><input type="text"></div>
		<div><label>Title</label><input type="text"></div>
		<div><label>Publisher</label><input type="text"></div>
		<div><label>Summary</label><textarea></textarea></div>
		<div><label>&nbsp;</label><input type="submit" value="Verzenden"></div>
	</form>
	</div>
		

	<footer>&copy; by Da Vinci College</footer>
</main>