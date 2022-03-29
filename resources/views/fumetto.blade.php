@extends('layouts.base')

@section('pageTitle', $info['series'])

@section('content')
    <section class="dettaglioFumetto">

        <div class="fascia">
            <div class="fascia-wrapper">
                <img src="{{asset('img/')}}" alt="">
            </div>
        </div>

        <div class="wrapper">
            <div class="box-l">

                <h1>{{$info['title']}}</h1>

                <div class="price">

                    <div class="usd">
                        <span>U.S. Price: {{$info['price']}}</span>
                        <span>AVAILABLE</span>
                    </div>

                    <div class="availability">
                        <span>Check Availability</span>
                    </div>
                </div>

                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam exercitationem et atque animi. Itaque natus fugit accusantium. Deserunt sint dolor dignissimos aut reiciendis voluptatibus autem architecto in optio eum! Cumque?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dicta voluptas aperiam iusto corrupti aspernatur! Error, ipsa omnis illo natus atque quae beatae nemo incidunt vitae laboriosam! Itaque, fugit nesciunt.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque libero expedita accusantium qui eveniet dolores perspiciatis, unde ratione tenetur nulla vitae iusto adipisci asperiores quasi, voluptatibus, doloremque ea officiis harum?
                    </p>
                </div>
                
            </div>

            <div class="box-r">
                <h3 class="adv">ADVERTISEMENT</h3>

                <div>
                    <img class="adv-img" src="{{asset('img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="main-btm">

            <div class="wrapper">

                <div class="talent">
                    <h2>TALENT</h2>

                    <div class="art">

                        <div class="title">
                            <h5>Art by:</h5>
                        </div>

                        <div class="artists">
                            @foreach ($info['artists'] as $artist)
                                <span><a href="">{{$artist}}</a></span>
                            @endforeach
                        </div>

                    </div>

                    <div class="art">

                        <div class="title">
                            <h5>Written by:</h5>
                        </div>

                        <div class="artists">
                            @foreach ($info['writers'] as $artist)
                                <span><a href="">{{$artist}}</a></span>
                            @endforeach
                        </div>

                    </div>

                 
                </div>

                <div class="specs">
                    <h2>SPECS</h2>

                    <div class="specs-cont">
                        <span class="specs-info">Series:</span>
                        <span>{{$info['series']}}</span>
                    </div>

                    <div class="specs-cont">
                        <span class="specs-info">U.S. Price:</span>
                        <span>{{$info['price']}}</span>
                    </div>

                    <div class="specs-cont"> 
                        <span class="specs-info">On Sale Date:</span>
                        <span>{{$info['sale_date']}}</span>
                    </div>
                </div>

            </div>
            
        </div>
    </section>
@endsection