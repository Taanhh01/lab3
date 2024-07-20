@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Thêm sách</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        @include('books.form')
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
