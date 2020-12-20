<div class="row">
	<div class="col-8">
		<div class="card" style="width: 270px;margin: 5px">
			<div class="card-header">{{ __('Latest Posts') }}</div>
			@forelse($latestPosts AS $latesPost)
			<div class="card-block">
				<h3 class="card-title">{{ $latesPost->name }}</h3>
				<p class="card-text">{{ $latesPost->description }}</p>
				<p class="small">{{ $latesPost->created_at->diffForHumans() }}</p>
			</div>
			<hr>
			@empty
			@endforelse
		</div>
	</div></div>
</div>