@extends('layouts.company')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<iframe src = "{{ URL::to('/') }}/files/{{ $userjob->cv }}" width='100%' height='700'></iframe>
			</div>
		</div>
	</div>
@endsection