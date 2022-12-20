<div class="container row my-3">
    <div class="col-md-10">
        <form action="/comment" method="post">
            @csrf
            <div class="form-group my-3">
                <label for="comment">Post a comment</label>
                <input type="hidden" name="listing_id" value="{{$listing->id}}" />
                <textarea class="form-control" name="comment" id="comment" placeholder="Your bids, counter offers go here." rows="5"></textarea>
                @error('comment') <small class="text-danger my-1">{{$message}}</small> @enderror
            </div>
            <button type="submit" class="btn btn-lg w-100 btn-dark my-3">post</button>
        </form>
    </div>
</div>