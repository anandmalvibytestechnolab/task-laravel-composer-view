@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Posts') }}</div>
				<div class="card-body">
					<table class="table table-dark">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Description</th>
								<th scope="col">Is Valid</th>
							</tr>
						</thead>
						<tbody>
							@forelse($posts AS $post)
							<tr>
								<th scope="row"><a href="{{ route('POST_SHOW', $post->id) }}" title="View {{ $post->name }} post">{{ $post->id + 1000 }}</a></th>
								<td>{{ $post->name }}</td>
								<td>{{ $post->description }}</td>
								<td>
									<img src="{{ asset('icon/' . (($post->like) ? 'like' : 'dislike')) . '.png' }}" alt="tag" style="width: 40px;">
								</td>
							</tr>
							@empty
							<tr>
								<th scope="row">No Data Found!</th>
							</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="float-right">
			@include('common.latespost')
			<br>
		</div>
	</div>
	@endsection
