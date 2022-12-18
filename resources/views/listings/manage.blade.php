<x-layout>
    <div class="container my-5">
        <p class="display-4">Manage your listings</p>
        <table class="table table-hover display-6">
            @foreach($listings as $listing)
                <tr>
                    <td><a href="/listings/{{$listing->id}}"><img src="{{$listing->logo ? asset('/storage/'. $listing->logo) : asset('/images/laravel.png')}}" class="img-fluid" width="100px" alt="{{$listing->company}} logo"></a></td>
                    <td>{{$listing->title}}</td>
                    <td><a class="td-0" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                    <td><a class="td-0" href="/listings/{{$listing->id}}/delete">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</x-layout>