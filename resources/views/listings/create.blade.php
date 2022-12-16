<x-layout>
    <div class="container my-5 row justify-content-center">
        <div class="col-md-6">
            <p class="display-4">Post a new listing</p>
            <form action="/listings" method="POST">
                {{-- cross site scripting protection --}}
                @csrf
                <div class="form-group my-3">
                    <label for="company">Company name</label>
                    <input type="text" class="form-control" name="company" id="company" placeholder="Mckinsey & Co">
                    @error('company') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <div class="form-group my-3">
                    <label for="title">Job Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Senior Laravel Developer">
                    @error('title') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <div class="form-group my-3">
                    <label for="location">Job Location</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="Remote / Nebraska">
                    @error('location') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <div class="form-group my-3">
                    <label for="email">Corporate Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="https://www.mckinsey.com/">
                    @error('email') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <div class="form-group my-3">
                    <label for="websiite">Website / Application URL</label>
                    <input type="url" class="form-control" name="website" id="website" placeholder="https://www.mckinsey.com/">
                    @error('websiite') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <div class="form-group my-3">
                    <label for="tags">Tags (Comma seperated)</label>
                    <input type="text" class="form-control" name="tags" id="tags" placeholder="laravel,api,backend">
                    @error('tags') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                {{-- <div class="form-group my-3">
                    <label for="job">Company Logo</label>
                    <input type="file" class="form-control" name="logo" id="logo">
                </div> --}}
                <div class="form-group my-3">
                    <label for="description">Job description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Include tasks, requirements, salary etc." rows="5"></textarea>
                    @error('description') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <button type="submit" class="btn btn-lg w-100 btn-dark my-3">Submit</button>
            </form>
        </div>
    </div>
</x-layout>