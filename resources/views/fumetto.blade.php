@extends('layouts.base')

@section('pageTitle', $info['series'])

@section('content')
    <section class="dettaglioFumetto">

        <div class="fascia">
        </div>

        <div class="wrapper">
            <div class="box-l">

                <h1>{{$info['series']}}#1000: THE DELUXE EDITION</h1>

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
    </section>
@endsection