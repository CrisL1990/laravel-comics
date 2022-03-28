@extends('layouts.base')

@section('pageTitle', 'DC COOMICS - HOME')

@section('content')
<main>
    <div class="container">
        

        @foreach ($fumetti as $fumetto )
            <div class="thumb">
                <div class="img-cont">
                    <img src="{{$fumetto['thumb']}}" alt="#">
                </div>
                <span>{{$fumetto['series']}}</span>
            </div>
        @endforeach

        <div class="container">
            <button>LOAD MORE</button>
        </div>
        
        
    </div>
</main> 
@endsection