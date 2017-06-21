@extends('layouts.app');

@section('cssfile')

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container">
        
    <div class="col-md-8 col-md-offset-2 well cls1">
      
		<img src="{{ $item->filename }}">

	</div>

</div>





@endsection