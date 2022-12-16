@props(['listing'])
<div class="col">
    <div class="card h-100">
        <img src="{{asset('/images/laravel.png')}}" class="card-img-top p-3" alt="...">
        <div class="card-body">
            <h5 class="card-title td-0"><a href='/listings/{{$listing->id}}' target='_blank'>{{$listing->title}}</a></h5>
            <p class="card-text">{{$listing->description}}</p>
            <?php
                $tags = explode(",",$listing->tags); 
                $colors = ['primary', 'success', 'danger', 'info', 'warning', 'dark', 'secondary'];
            ?>
            @foreach ($tags as $tag)
                <span class="badge text-bg-<?php echo $colors[array_rand($colors)] ?>"><a class='td-0 text-light' href="/?tag={{$tag}}">{{$tag}}</a></span>
            @endforeach
        </div>
        <div class="card-footer">
            <small class="text-muted"><a class='text-muted td-0' target='_blank' href="{{$listing->website}}">{{$listing->company}}</a></small>
        </div>
    </div>
</div>