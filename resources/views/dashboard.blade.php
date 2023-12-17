@extends('/layouts/Dashboard/index')

@section('title')
    GIG | Micro | Dashboard
@endsection

@section('main_title')
    Micro Dashboard
@endsection

@section('link_name')
Home    
@endsection

@section('url')
    {{route('dashboard')}}
@endsection

@section('link_title')
    Dashboard
@endsection