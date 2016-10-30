<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/assets/css/turn.css" />
	</head>
	<body>
		<div id="magazine" class="center">
			<!-- {{trans('language.message')}} -->
			@foreach($book as $page)
				<div>
					<span class="text">
						<p>
							{{$page->text}}
						</p>
					</span>
				</div>
			@endforeach
		</div>
	</body>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/assets/js/turn.js"></script>
	<script type="text/javascript" src="/assets/js/custom.js"></script>
</html>
