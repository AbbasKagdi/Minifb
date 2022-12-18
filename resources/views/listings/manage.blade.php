<x-layout>
    <div class="container my-5">
        <p class="display-4">Manage your listings</p>
        <table class="table table-hover display-6">
            @unless($listings->isEmpty())
                @foreach($listings as $listing)
                    <tr>
                        <td><a href="/listings/{{$listing->id}}"><img src="{{$listing->logo ? asset('/storage/'. $listing->logo) : asset('/images/laravel.png')}}" class="img-fluid" width="100px" alt="{{$listing->company}} logo"></a></td>
                        <td>{{$listing->title}}</td>
                        <td><a class="td-0 text-bold" href="/listings/{{$listing->id}}/edit">Edit <i class="fas fa-pencil-alt"></i></a></td>
                        <td>
                            <form method="POST" action="/listings/{{$listing->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 text-danger bg-transparent td-0">
                                    Delete <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else()
                <tr><td>No listings to show</td></tr>
            @endunless
        </table>
    </div>
</x-layout>