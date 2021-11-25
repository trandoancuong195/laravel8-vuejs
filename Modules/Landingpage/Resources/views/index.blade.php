@extends('landingpage::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('landingpage.name') !!}
    </p>
    @foreach($pages as $page)
        <div>
            <p>
                Name: {{$page->name}}
            </p>
            <p>
                Description: {{$page->description}}
            </p>
            <hr>
        </div>
    @endforeach
@endsection
