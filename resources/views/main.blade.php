@extends("layouts.layout")

@section("title", "Home")



@section("main")
<div class="row">
        <div class="col-8 offset-2 mt-5 d-flex flex-wrap justify-content-between ">
    @foreach($data as $post)
    <div class="card mb-5 d-flex flex-column align-items-center" style="width: 15rem;height:auto;">
 
    <div class="card-body d-flex flex-column justify-content-around align-items-center">
    <h5 class="card-title mb-2 text-center">{{ $post->title }}</h5>
    <h6 class="card-title mb-2">{{ $post->author }}</h6>
    
    <a href="{{ route("boolpress.show",$post->id) }}" class="btn btn-primary mb-3 mt-2">Dettagli Post</a>
    <form action="{{ route("boolpress.destroy",$post->id) }}" method="post">
      @CSRF
      @method("delete")
      <button type="submit" class="btn btn-danger">ELIMINA</button>
    </form>
  </div>
</div>
@endforeach
</div>
</div>
@endsection