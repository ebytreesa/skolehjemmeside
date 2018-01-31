<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Elev database</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="menuItem"><a href="index.php">Forside</a></li>
				<li class="menuItem"><a href="grades.php">Karakterer</a></li>
				<li class="menuItem"><a href="exams.php">Eksamener</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Elever <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="menuItem"><a href="admin.php">Administration</a></li>
						<li role="separator" class="divider"></li>
						<li class="menuItem"><a href="newResult.php">Nyt resultat</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<br><br><br><br>
<script>
$(function(){
	$(".menuItem").each(function(){
		var url = document.location.pathname;
		var arr = url.split(".");
		var page = arr[0].split("/")[2];
		if ($(this).children().html() == "Forside" && page == "index"){$(this).addClass('active') }
		if ($(this).children().html() == "Karakterer" && page == "grades"){$(this).addClass('active')}
		if ($(this).children().html() == "Eksamener" && page == "exams"){$(this).addClass('active') }
		if ($(this).children().html() == "Administration" && page == "admin"){$(this).addClass('active'); $(".dropdown").addClass('active') }
		if ($(this).children().html() == "Nyt resultat" && page == "newResult"){$(this).addClass('active'); $(".dropdown").addClass('active') }
	});
});
</script>