@extends('layouts.base')

@section('pageTitle', 'DC COOMICS - HOME')

@section('content')
<main class="th-main">
    <div class="th-container container">
        

        @foreach ($fumetti as $key => $fumetto)
            <div class="thumb">
                <div class="th-img-cont">
                    <img src="{{$fumetto['thumb']}}" alt="#">
                </div>
                <a href="/fumetto/{{$key}}"><span>{{$fumetto['series']}}</span></a>
            </div>
        @endforeach

        <div class="th-container">
            <button>LOAD MORE</button>
        </div>
        
        
    </div>
</main> 
@endsection