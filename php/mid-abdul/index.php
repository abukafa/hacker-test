<?php
// Run this in your webserver
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Madeindonesia-BackEnd Basic Test</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Playfair+Display:wght@400;500;800&display=swap" />
</head>

<style>

</style>

<body>
	<!-- navbar -->
	<!-- Given array -->
	<?php
	$menu = array(
		array(
			'tabName' => 'Home',
			'content' => 'This is content for Home-tab. Please display me in the correct tab menu.'
		),

		array(
			'tabName' => 'About',
			'content' => 'This is content for ABOUT. Please display me in the correct tab menu.'
		),

		array(
			'tabName' => 'Contact',
			'content' => 'This is content for CONTACT. Please display me in the correct tab menu.'
		),
	);
	?>

	<!-- Change this loop using the given array above using php code -->
	<div class="container">
		<h1>Challenge 1</h1>
		<b>
			<blockquote>!! Instructions:</blockquote>
		</b>
		<ul>
			<li>Change the HTML using given array</li>
			<li>Use your logic and basic looping in php you can use for, foreach, while, or whatever you want to use </li>
			<li>Please DO NOT change the html, but the logic looping only</li>
			<li>The point is make the html dynamic base on the given array</li>
		</ul>

		<h3>Given array: </h3>


		<nav class="mb-3">
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<?php foreach ($menu as $m) : ?>
					<a class="nav-item nav-link" id="nav-<?= $m['tabName'] ?>-tab" data-toggle="tab" href="#nav-<?= $m['tabName'] ?>" role="tab" aria-controls="nav-<?= $m['tabName'] ?>" aria-selected="true"><?= $m['tabName'] ?></a>
				<?php endforeach; ?>
			</div>
		</nav>

		<div class="tab-content mb-5" id="nav-tabContent">
			<?php foreach ($menu as $m) : ?>
				<div class="tab-pane fade" id="nav-<?= $m['tabName'] ?>" role="tabpanel" aria-labelledby="nav-<?= $m['tabName'] ?>-tab"><?= $m['content'] ?></div>
			<?php endforeach; ?>
		</div>

		<h2>Expected output: </h2>

		<nav class="mb-3">
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">About</a>
				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
			</div>
		</nav>

		<div class="tab-content mb-5" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">This is content for Home-tab. Please display me in the correct tab menu.</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">This is content for ABOUT. Please display me in the correct tab menu.</div>
			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">This is content for CONTACT. Please display me in the correct tab menu.</div>
		</div>
	</div><!-- .container -->



	<div class="container">
		<h1>Challenge 2</h1>
		<b>
			<blockquote>!! Instructions:</blockquote>
		</b>
		<ul>
			<li>Change the HTML using given array</li>
			<li>Use your logic and basic looping in php you can use for, foreach, while, or whatever you want to use </li>
			<li>Please DO NOT change the html, but the logic looping only</li>
			<li>The point is make the html dynamic base on the given array</li>
		</ul>

		<h3>Given array: </h3>

		<?php $genre = ["Horor", "drama", "action", "comedy", "romance", "family", "fantasy", "Thriller", "mystery"]; ?>

		<section id="bathroom-special-single">
			<div class="row gallery">
				<?php
				$count = count($genre);
				for ($i = 0; $i < $count; $i++) { ?>
					<div class="col-md-<?= $i % 5 == 0 ? '8' : '4' ?> col-wrapper mb-5">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title"><?= $genre[$i] ?></h5>
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</section>

		<h2>Expected output: </h2>

		<section id="bathroom-special-single">
			<div class="row gallery mb-5">
				<div class="col-md-8 col-wrapper">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Horor</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-wrapper">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Drama</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>
			</div><!-- .row gallery -->

			<div class="row gallery mb-5">
				<div class="col-md-4 col-wrapper">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Action</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-wrapper">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Comedy</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-wrapper">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Romance</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>
			</div><!--.row gallery-->

			<div class="row gallery mb-5">
				<div class="col-md-8 col-wrapper">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Family</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-wrapper">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Fantasy</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>
			</div><!-- .row gallery -->

			<div class="row gallery mb-5">
				<div class="col-md-4 col-wrapper">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Thriller</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-wrapper">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Mystery</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>
			</div><!--.row gallery-->

		</section>
	</div>





</body>
<script>
	$(document).ready(function() {
		$('#nav-Home-tab').trigger('click');
	});
</script>

</html>