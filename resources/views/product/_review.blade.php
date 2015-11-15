<br /><br />
<div>
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews</a></li>
		<li role="presentation"><a href="#discussion" aria-controls="discussion" role="tab" data-toggle="tab">Discussions</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="review">
			<br />
			@for ($i=1;$i<=3;$i++)

			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="/uploads/64.svg" alt="..." style="width:64px;">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Media heading</h4>
					lorem ispusm lorem ispusm lorem ispusm lorem ispusmlorem ispusm
				</div>
			</div>

			@endfor

		</div>
		<div role="tabpanel" class="tab-pane" id="discussion">
			<br />
			@for ($i=1;$i<=3;$i++)

			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="/uploads/64.svg" alt="..." style="width:64px;">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Media heading</h4>
					lorem ispusm lorem ispusm lorem ispusm lorem ispusmlorem ispusm
				</div>
			</div>

			@endfor
		</div>
	</div>
</div>