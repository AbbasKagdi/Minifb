@foreach ($listing->comments as $comment)
<div class="bg-light p-1 mt-4 border">
    <b class="">{{$comment->user->name}}</b>
    <p>{{$comment->comment}}</p>

    @if (count($comment->replies) > 0)
        @foreach ($comment->replies as $reply)
            <div class="bg-light p-1 my-2 border-primary border-start">
                <div class="ms-2">
                    <b>>{{$reply->user->name}}</b>
                    <p>>{{$reply->comment}}</p>
                
                    @if (count($reply->replies) > 0)
                        @foreach ($reply->replies as $rereply)
                            {{-- {{dd($rereply)}} --}}
                            <div class="bg-light p-1 my-2 border-success border-start">
                                <div class="ms-2">
                                    <b>>>{{$rereply->user->name}}</b>
                                    <p>>>{{$rereply->comment}}</p>

                                    @if (count($rereply->replies) > 0)
                                        @foreach ($rereply->replies as $rerereply)
                                            {{-- {{dd($rereply)}} --}}
                                            <div class="bg-light p-1 my-2 border-danger border-start">
                                                <div class="ms-2">
                                                    <b>>>>{{$rerereply->user->name}}</b>
                                                    <p>>>>{{$rerereply->comment}}</p>                                                                
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
@endforeach