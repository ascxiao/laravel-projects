<h1>My Skills</h1>
<ul>
    @foreach($skills as $skill)
        <li>
            {{$row->name}} - Description:{{$row->description}}
        <li>
    @endforeach
<ul>