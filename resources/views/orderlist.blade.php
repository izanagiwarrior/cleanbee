@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 text-center">{{ __('Order List') }}</h1>

<!-- Main Content goes here -->
<div class="container">

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
            @if($cp -> user_id === Auth::user()->id)
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
                    <p href="" class="btn btn-success">No Status</p>
                </td>
                @else
                <td>
                    <p href="" class="btn btn-success">{{$cp -> status}}</p>
                </td>
                @endif
                <td><a href="" class="btn btn-primary">score</a></td>
            </tr>
            @endif
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
            @if($cp -> user_id === Auth::user()->id)
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
                    <p href="" class="btn btn-success">No Status</p>
                </td>
                @else
                <td>
                    <p href="" class="btn btn-success">{{$cp -> status}}</p>
                </td>
                @endif
                <td><a href="" class="btn btn-primary">score</a></td>
            </tr>
            @endif
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
            @if($cp -> user_id === Auth::user()->id)
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
                    <p href="" class="btn btn-success">No Status</p>
                </td>
                @else
                <td>
                    <p href="" class="btn btn-success">{{$cp -> status}}</p>
                </td>
                @endif
                <td><a href="" class="btn btn-primary">score</a></td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

</div>
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