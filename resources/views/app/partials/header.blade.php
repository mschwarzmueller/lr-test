<h1>header</h1>
<nav>
	<ul>
		<li><a href="{{ route('/') }}">home</a></li>
		@if(Auth::guard()->check())
            <li><a href="{{ route('dashboard') }}">dashboard</a></li>
			<li><a href="{{ route('logout') }}">logout</a></li>
		@else
			<li><a href="{{ route('sign-in') }}">sign in</a></li>
			<li><a href="{{ route('sign-up') }}">sign up</a></li>
		@endif
	</ul>
</nav>
