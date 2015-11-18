<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3>Tentang Kami</h3>
				<p>Kami adalah</p>

				<p>
					<a class="fa fa-facebook-official fa-2x text-success" href="#" target="_blank"></a>
					<a class="fa fa-twitter-square fa-2x text-success" href="#" target="_blank"></a>
				</p>
			</div>
			<div class="col-md-4">
				<ul class="list-unstyled">
					<li><a href="/">Home</a></li>
					@foreach ($pages as $p)
					<li><a href="/page/{{ $p->id }}">{{ $p->title }}</a></li>
					@endforeach
					<li><a href="/faq">FAQ</a></li>
				</ul>
			</div>
		</div>
	</div>    	
</div>