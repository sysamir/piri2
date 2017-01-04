@extends('client.layouts.client')


@section('content')
{{ $cProfile->email }}</br>
{{ $cProfile->name }}</br>
{{ $cProfile->company->c_name }}

@endsection
