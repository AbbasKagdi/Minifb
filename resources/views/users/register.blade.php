<x-layout>
    <div class="container my-5 row justify-content-center">
        <div class="col-md-6">
            <p class="display-4">Register to post a listing</p>
            <form action="/users" method="POST">
                {{-- cross site scripting protection --}}
                @csrf
                <div class="form-group my-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Mike Ross" value="{{old('name')}}">
                    @error('name') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <div class="form-group my-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="someone@test.com" value="{{old('email')}}">
                    @error('email') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <div class="form-group my-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="**************" value="{{old('password')}}">
                    @error('password') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <div class="form-group my-3">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="**************" value="{{old('password_confirmation')}}">
                    @error('password_confirmation') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <button type="submit" class="btn btn-lg w-100 btn-dark my-3">Register</button>
                <p class="text-lead">Already have an account? <a class="td-0 text-primary" href="/login">Login</a></p>
            </form>
        </div>
    </div>
</x-layout>