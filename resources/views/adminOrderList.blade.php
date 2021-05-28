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
            <th scope="col">No Telpon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Catatan</th>
            <th scope="col" style="width: 20%;">Tracking</th>
            <th scope="col">Give Rating</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        ?>
        @foreach($cuciselimut as $cp)
        <tr>
            <th scope="row">{{$i+=1}}</th>
            <td>{{$cp -> nname}}</td>
            <td>{{$cp -> nohp}}</td>
            <td>{{$cp -> alamat}}</td>
            <td>{{$cp -> catatan}}</td>
            @if($cp -> status === "Finished")
            <td>
                <p href="" class="btn btn-secondary">Finished</p>
            </td>
            @elseif(is_null($cp -> status))
            <td>
                <form action="{{ route('trackingSelimut') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $cp->id }}" name="id">
                    <button class="btn btn-success">{{"No Status"}}</button>
                </form>
            </td>
            @else
            <td>
                <form action="{{ route('trackingSelimut') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $cp->id }}" name="id">
                    <button class="btn btn-success">{{$cp -> status}}</button>
                </form>
            </td>
            @endif
            <td><a href="" class="btn btn-primary">score</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<h4>Table Sepatu</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Catatan</th>
            <th scope="col" style="width: 20%;">Tracking</th>
            <th scope="col">Give Rating</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        ?>
        @foreach($cucisepatu as $cp)
        <tr>
            <th scope="row">{{$i+=1}}</th>
            <td>{{$cp -> nname}}</td>
            <td>{{$cp -> nohp}}</td>
            <td>{{$cp -> alamat}}</td>
            <td>{{$cp -> catatan}}</td>
            @if($cp -> status === "Finished")
            <td>
                <p href="" class="btn btn-secondary">Finished</p>
            </td>
            @elseif(is_null($cp -> status))
            <td colspan="2">
                <form action="{{ route('trackingSepatu') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $cp->id }}" name="id">
                    <button class="btn btn-success">{{"No Status"}}</button>
                </form>
            </td>
            @else
            <td>
                <form action="{{ route('trackingSepatu') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $cp->id }}" name="id">
                    <button class="btn btn-success">{{$cp -> status}}</button>
                </form>
            </td>
            @endif
            <td><a href="" class="btn btn-primary">score</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<h4>Table Pakaian</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Catatan</th>
            <th scope="col" style="width: 20%;">Tracking</th>
            <th scope="col">Give Rating</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        ?>
        @foreach($cucipakaian as $cp)
        <tr>
            <th scope="row">{{$i+=1}}</th>
            <td>{{$cp -> nname}}</td>
            <td>{{$cp -> nohp}}</td>
            <td>{{$cp -> alamat}}</td>
            <td>{{$cp -> catatan}}</td>
            @if($cp -> status === "Finished")
            <td>
                <p href="" class="btn btn-secondary">Finished</p>
            </td>
            @elseif(is_null($cp -> status))
            <td>
                <form action="{{ route('trackingPakaian') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $cp->id }}" name="id">
                    <button class="btn btn-success" style="width: fit-content;">{{"No Status"}}</button>
                </form>
            </td>
            @else
            <td>
                <form action="{{ route('trackingPakaian') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $cp->id }}" name="id">
                    <button class="btn btn-success">{{$cp -> status}}</button>
                </form>
            </td>
            @endif
            <td><a href="" class="btn btn-primary">score</a></td>
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