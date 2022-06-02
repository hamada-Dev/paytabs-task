@extends('layouts.app')

@section('content')

@include('dashboard.buttons.create')

@if($rows->count() > 0)

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">code</th>
                        <th scope="col">title</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($rows as $index =>  $row)
                        <tr>
                            <th scope="row">{{ ++$index }}</th>
                            <td>{{ $row->code }}</td>
                            <td>{{ $row->title }}</td>
                            <td>@include('dashboard.buttons.delete')</td>
                        </tr>

                    @empty
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>
    @endisset

@endsection
