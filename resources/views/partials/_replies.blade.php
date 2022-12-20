@props(['replies'])

{{-- {{dd($replies->toArray())}} --}}

@foreach ($comment->replies as $reply)
    <div class="bg-light p-1 my-2 border-primary border-start">
        <div class="ms-2">
            <b>>{{$reply->user->name}}</b>
            <p>>{{$reply->comment}}</p>
        
            @if (count($reply->replies) > 0)
                @foreach ($reply->replies as $reply)
                    {{-- {{dd($reply)}} --}}
                    <div class="bg-light p-1 my-2 border-success border-start">
                        <div class="ms-2">
                            <b>>>{{$reply->user->name}}</b>
                            <p>>>{{$reply->comment}}</p>

                            @if (count($reply->replies) > 0)
                                @foreach ($reply->replies as $reply)
                                    {{-- {{dd($reply)}} --}}
                                    <div class="bg-light p-1 my-2 border-danger border-start">
                                        <div class="ms-2">
                                            <b>>>>{{$reply->user->name}}</b>
                                            <p>>>>{{$reply->comment}}</p>
                                            
                                            @if (count($reply->replies) > 0)
                                                @foreach ($reply->replies as $reply)
                                                    {{-- {{dd($reply)}} --}}
                                                    <div class="bg-light p-1 my-2 border-info border-start">
                                                        <div class="ms-2">
                                                            <b>>>>>{{$reply->user->name}}</b>
                                                            <p>>>>>{{$reply->comment}}</p>                                                                
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
@endforeach