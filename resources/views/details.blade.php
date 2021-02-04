@extends("layouts.layout")

@section("title", "Home")


{{-- @dd($detail) --}}
@section("main")
<div class="row">
        <div class="col-8 offset-2 mt-5 d-flex flex-wrap justify-content-between ">
   
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">Slug: {{ $detail["slug"] }}</h5>
    <h5 class="card-title">Id_cat: {{ $category["id"] }}</h5>
    <p class="card-text">{{ $detail["description"]}}</p>

    <h4>Tag List</h4>
    @foreach ($tags as $tag)

        <h5 class="card-title"> - <a href="{{ route("tag.show", $tag->id) }}">{{ $tag["name"] }}</a></h5>
    @endforeach
  
  </div>
</div>
    
  </div>
</div>


@endsection