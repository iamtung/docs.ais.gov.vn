@extends('layout')

@section('title')
    {{ $page->title }}
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
        </ol>
    </nav>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                {!! $page->content !!}
            </div>
        </div>
    </div>
@endsection

