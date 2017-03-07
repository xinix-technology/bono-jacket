@extends('shared/search')

@section('content')
	<div class="wrapper">
		<h1 class="title">Role View</h1>
		<div class="row">
			<namecardbook>
				@foreach ($entries as $entry)
					<namecard href="{{ f('controller.url', '/'.$entry['$id']) }}">
						<photo>{{ substr($entry->format('name','plain'),0,1) }}</photo>
						<name>{{$entry->format('name','plain')}}</name>
	                </namecard>
                @endforeach
			</namecardbook>

		</div>
	</div>
@endsection

