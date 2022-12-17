<x-layout>
    <div class="container my-5">
        {{-- <div class="container text-center">
            <img src="{{asset('/images/laravel.png')}}" class="img-fluid" width="200px" />
        </div>
        <hr /> --}}
        <div class="row">
            <div class="col-md-3">
                <img src="{{$listing->logo ? asset('/storage/'. $listing->logo) : asset('/images/laravel.png')}}"  class="img-fluid" width="200px" alt="{{$listing->company}} logo">
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
                    <span class="badge text-bg-<?php echo $colors[array_rand($colors)] ?>"><a class='td-0 text-light' href="/?tag={{$tag}}">{{$tag}}</a></span>
                @endforeach
                {{-- only visible to listing owner --}}
                <div class="my-2">
                    <a class="btn btn-dark btn-sm" href="/listings/{{$listing->id}}/edit"><i class="fas fa-pencil-alt"></i> Edit</a>
                    <a class="btn btn-dark btn-sm" href="/listings/{{$listing->id}}/edit"><i class="fas fa-trash"></i> Delete</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>