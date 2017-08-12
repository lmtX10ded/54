<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

	<a class="navbar-brand" href="#">We Like Games</a>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="/games">List Games</a>
			</li>
			<li class="nav-item">
				<a href="/reviews" class="nav-link">List Reviews</a>
			</li>

			<?php if( auth()->check() ): ?>
			<li class="nav-item">
				<a href="#" class="nav-link font-weight-bold">Welcome <?php echo e(auth()->user()->name); ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/logout">Log Out</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/games/create">Submit Game</a>
			</li>
			<?php else: ?>
			<li class="nav-item">
				<a href="/login" class="nav-link">Log in</a>
			</li>
			<li class="nav-item">
				<a href="/register" class="nav-link">Register</a>
			</li>
			<?php endif; ?>

		</ul>
	</div>
</nav>