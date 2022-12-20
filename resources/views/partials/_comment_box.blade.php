<div class="my-3 row">
    <div class="col-md-8">
        <form action="/comments" method="POST">
            @csrf
            <div class="form-group my-3">
                <label for="comment">Post a comment</label>
                <textarea class="form-control" name="comment" id="comment" placeholder="Your questions, counter offers go here." rows="4" value="{{old('comment')}}"></textarea>
                @error('comment') <small class="text-danger my-1">{{$message}}</small> @enderror
            </div>
            <button type="submit" class="btn btn-lg w-100 btn-dark">Post</button>
        </form>
    </div>
    @unless(count($listing->comments) == 0)
        <div class="col-md-8 my-5">
            {{-- {{dd($listing->comments)}} --}}
            @foreach ($listing->comments as $comment)
                <div class="bg-light p-1 mt-4 border">
                    <b>{{$comment->user->name}}</b>
                    <p>{{$comment->comment}}</p>
                    @if (count($comment->replies) > 0)
                        @include('partials._replies', ['replies'=>$comment->replies])
                    @endif
                </div>
            @endforeach
        </div>
    @else
        <div class="col-md-8 my-5"><div class="bg-light p-1 mt-4 border">No comments to show</div></div>
    @endunless
</div>