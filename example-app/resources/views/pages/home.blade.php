@extends ('layouts.app')

@section ('content')

    <h1>Welcome to my Portfolio</h1>
    <ul>
        @foreach($skills as $skill)
            <li>
                {{$row->name}} - Description:{{$row->description}}
            <li>
        @endforeach
    <ul>
@endsection