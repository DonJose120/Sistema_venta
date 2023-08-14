@extends('app')
@section('content')
</html>
<head>
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main class="login-form">
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div style="text-align:left">


                        <div class="my-10 shadow  mb-10 bg-body-tertiary rounded">

                            <div><a href="/"> <button type="submit" class="btn btn-dark btn-blocktext-light" style="margin-bottom:10px;">Home</button></a></div>
                            <a href="{{ route('categories.create') }}"> <button type="submit" class="btn btn-dark btn-block text-light" style="padding: 7px 20px;">New Category</button></a>

                            @if(session('message'))
                            <div style="color: green;">{{ session('message') }}</div>
                            @endif
                            <table class="table table-striped  my-3 shadow p-3 mb-5 bg-body-tertiary rounded">
                                <thead class="text-alight">

                                    <tr class="table-dark">
                                        <td>No.</td>
                                        <td>Name</td>
                                        <td>Description</td>
                                        <td>Timestamp</td>
                                        <td style="padding-left: 50px;">Action</td>
                                    </tr>

                                </thead>
                                <tbody>
                                    @forelse($categories as $key => $category)
                                    <tr>
                                        <td>{{ $categories->firstItem() + $key }}.</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>{{ $category->created_at->format('F d, Y') }}</td>
                                        <td style="display: flex;">
                                            <a href="{{ route('categories.edit', $category) }}"> <button type="submit" class="btn btn-dark " style="padding: 6px 22px;">Edit</button> </a>

                                            <form Action="{{ route('categories.delete', $category) }}" method="post" style="margin-left: 10px;"><button type="submit" class="btn btn-dark btn-block">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">No data found in table </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </main>
</body>
</html>
@endsection
