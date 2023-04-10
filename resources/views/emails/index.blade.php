@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="mt-5 px-4 bg-slate-600">
            <h3>New Message from <strong>{{ $data['name'] }}</strong></h3>
            <h3>Email : {{ $data['email'] }}</h3>
            <p>{{ $data['message'] }}</p>
        </div>
    </div>
@endsection