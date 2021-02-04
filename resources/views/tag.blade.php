@extends("layouts.layout")

@section("title", "Tags")



@section("content")

<ul>
@foreach ($tags as $tag)
 <li> <a href="{{ route("tag.show", $tag->id) }}">{{ $tag->name }}</a> </li>
@endforeach
</ul>

@endsection