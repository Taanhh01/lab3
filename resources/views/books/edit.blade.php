@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Sửa sách</h1>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        @include('books.form', ['book' => $book])
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
