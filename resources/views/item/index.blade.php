@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justfy-content-left">
		@foreach ($items as $item)
		<div class="col-md-4 mb-2">
			<div class="card">
				<div class="card-header">{{$item->name}}</div>
				<div class="card-body">
					{{$item->amount}}
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
