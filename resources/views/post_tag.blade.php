@extends("layouts.layout")

@section("title", "Tags")



@section("content")


<ul>
@foreach ($tags->getPosts as $post)
 <li> {{ $post["title"] }} </li>
@endforeach
</ul>

@endsection