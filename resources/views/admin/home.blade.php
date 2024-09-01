@extends('layouts.admin')

@section('content')
    <h1>Admin Panel</h1>
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button>Log out</button>
    </form>
@endsection
