@extends('app.layouts.index')

@section('content')

	<section class="post">

		<h2 class="title">what do you have to say?</h2>

		<form action="{{}}" method="POST" autocomplete="off">
			<div class="field">
				<div class="in-field">
					<textarea name="message" cols="30" rows="10" placeholder="Your post"></textarea>
				</div>
			</div>
			<div class="field">
				<div class="in-field">
					<input type="submit" value="create post">
				</div>
			</div>
		</form>

		<hr>

		<p class="other">what other people say?</p>

		<hr>

		<ul class="posts">
			<li>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, sequi?</p>
				<span>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam vitae provident in nemo placeat ullam nobis omnis, consequatur, quaerat cum eos aperiam optio, hic deserunt quas enim corporis, minima! Dolore architecto, eius suscipit? Ea rem adipisci ipsum. Ratione, id reprehenderit aperiam inventore qui, quo. Mollitia distinctio harum eveniet nostrum beatae.
				</span>
				<em>watscho 2017</em>
				<div>
					<a href="#">like</a>
					<a href="#">dislike</a>
					<a href="#">edit</a>
					<a href="#">delete</a>
				</div>
			</li>
			<li>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, sequi?</p>
				<span>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam vitae provident in nemo placeat ullam nobis omnis, consequatur, quaerat cum eos aperiam optio, hic deserunt quas enim corporis, minima! Dolore architecto, eius suscipit? Ea rem adipisci ipsum. Ratione, id reprehenderit aperiam inventore qui, quo. Mollitia distinctio harum eveniet nostrum beatae.
				</span>
				<em>watscho 2017</em>
				<div>
					<a href="#">like</a>
					<a href="#">dislike</a>
					<a href="#">edit</a>
					<a href="#">delete</a>
				</div>
			</li>
		</ul>

	</section>

@endsection