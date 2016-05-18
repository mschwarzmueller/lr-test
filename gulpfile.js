var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

var elixitInstallation = function(mix) {

	// APP CSS
	mix.styles(

		[

	        'both/limbo.css',
	        'app/index.css'

		],

		'public/assets/css/app/index.css'

	)

	// APP JS
	.browserify(

		[

			'app/index.js'

		],

		'public/assets/js/app/index.js'

	)

	// Both versioning
	.version(

		[

			'assets/css/app/index.css',
			'assets/js/app/index.js'

		],

		'public/build'

	);

}

elixir(elixitInstallation);


