<x-layout>
    <div class="container my-5 row justify-content-center">
        <div class="col-md-6">
            <p class="display-4">Login to your account</p>
            <form action="/users/authenticate" method="POST">
                {{-- cross site scripting protection --}}
                @csrf
                <div class="form-group my-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="someone@test.com" value="{{old('email')}}">
                    @error('email') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <div class="form-group my-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="**************">
                    @error('password') <small class="text-danger my-1">{{$message}}</small> @enderror
                </div>
                <button type="submit" class="btn btn-lg w-100 btn-dark my-3">Register</button>
                <p class="text-lead">Don't have an account? <a class="td-0 text-primary" href="/register">Sing up Now</a></p>
            </form>
        </div>
    </div>
</x-layout>