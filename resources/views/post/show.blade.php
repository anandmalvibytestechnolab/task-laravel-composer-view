@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('View Posts') }}</div>
				<div class="card-body">
					<div class="row">
						<div class="card" style="width: 270px;margin: 5px">
							<div class="card-block">
								<h3 class="card-title">{{ $post->name }}</h3>
								<p class="card-text">{{ $post->description }}</p>
								<p class="small">{{ $post->created_at->diffForHumans() }}</p>
							</div>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
		<div class="float-right">
			@include('common.latespost')
			<br>
		</div>
	</div>
</div>
@endsection
