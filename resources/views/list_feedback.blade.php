@extends('layouts.admin2')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 text-center">{{ __('Order List') }}</h1>

<!-- Main Content goes here -->
<h4>Table Selimut</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Feedback</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        ?>
        @foreach($feedback as $cp)
        <tr>
            <th scope="row">{{$i+=1}}</th>
            <td>{{$cp -> name}}</td>
            <td>{{$cp -> feedback}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- End of Main Content -->
@endsection

@push('notif')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    {{ session('status') }}
</div>
@endif
@endpush