@extends('layout')

@section('content')
    <div class="container my-5">
        {{-- <div class="container text-center">
            <img src="{{asset('/images/laravel.png')}}" class="img-fluid" width="200px" />
        </div>
        <hr /> --}}
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('/images/laravel.png')}}" class="img-fluid" width="200px" />
            </div>
            <div class="col-md-9">
                <h1>{{$listing['title']}}</h2>
                <p>{{$listing->description}}<p>
                <small><p><i class='fas fa-briefcase'></i> <a href='{{$listing->website}}' class='td-0'>{{$listing->company}}</a></small>
                <p><i class='fas fa-map-marker-alt'></i> {{$listing['location']}}<p>
                <p><i class='fas fa-envelope'></i> {{$listing['email']}}</p>

                <?php
                    $tags = explode(",",$listing->tags); 
                    $colors = ['primary', 'success', 'danger', 'info', 'warning', 'dark', 'secondary'];
                ?>
                @foreach ($tags as $tag)
                    <span class="badge text-bg-<?php echo $colors[array_rand($colors)] ?>">{{$tag}}</span>
                @endforeach
            </div>
        </div>
    </div>
@endsection