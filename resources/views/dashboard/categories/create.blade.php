@extends('layouts.app')


@section('content')
    <form id="categoryForm" method="POST" action="{{ route('dashboard.' . $module_name_plural . '.store') }}">
        @csrf
        @include("dashboard.$module_name_plural.form")
    </form>
@endsection

