@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Price</th>
                            <th scope="col">Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clothes as $clothe)
                            <tr>
                                <td>{{ $clothe->id }}</td>
                                <td>{{ $clothe->price }}</td>
                                <td>{{ $clothe->size }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
