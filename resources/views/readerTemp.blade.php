@extends('layouts.app')

@section('content')




<h1>Currently reading: {{$book->filepath}}</h1>
<iframe src="/pdfjs/web/viewer.html?file=bookstore/{{$book->filepath}}.pdf" style="border: 0" width="100%" height="800" frameborder="0" scrolling="no"></iframe>


@endsection