@extends("layouts.layout")

@section("title", "Home")


{{-- @dd($detail) --}}
@section("main")
<div class="row">
        <div class="col-8 offset-2 mt-5 d-flex flex-wrap justify-content-between ">
   
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">Slug: {{ $detail[0]["slug"] }}</h5>
    <p class="card-text">{{ $detail[0]["description"]}}</p>
  
  </div>
</div>
    
  </div>
</div>


@endsection