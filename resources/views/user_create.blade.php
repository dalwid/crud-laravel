@extends('master')

@section('content')
    <h2>Create</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('users.store') }}" method="post">
        @csrf        
        <input type="text"     name="firstName" placeholder="Your Frist Name">
        <input type="text"     name="lastName"  placeholder="Your Last  Name">
        <input type="text"     name="email"     placeholder="Your E-mail">
        <input type="password" name="password"  placeholder="Your Password">
        <button type="submit">Create</button>
    </form>


@endsection
