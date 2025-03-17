@extends ('layout.app')

@section ('content')
<a href=>Feature</a>

<div class="container mt-5">
        <h2 class="mb-4">Laravel Features</h2>
        <table border ="1" cellspacing = "0" cellpadding ="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Feature Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($features as $feature)
                <tr>
                    <td>{{$feature->id }}</td>
                    <td>{{ $feature->name }}</td>
                    <td>{{ $feature->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection