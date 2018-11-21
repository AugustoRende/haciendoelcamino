@extends('layouts.app')

@section('title', '- '.ucfirst(Request::path()))

@section('content')
    <p>This is my body content.</p>
@endsection