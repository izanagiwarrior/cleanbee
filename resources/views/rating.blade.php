@extends('layouts.admin')

@section('main-content')
<div class="container">
    <div class="row py-4">
        <div class="col">
            <h2 class="text-danger">Your Rating Please</h2>
            <p class="text-muted">Give us your rate abous using Cleanbee.</p>

            <form action="{{ route('rating_process')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $id }}" name="id">
                <input type="hidden" value="{{ $type }}" name="type">

                <div class="rate mx-auto">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label for="star5" title="text">5</label>
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label for="star4" title="text">4</label>
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label for="star3" title="text">3</label>
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label for="star2" title="text">2</label>
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label for="star1" title="text">1</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success my-3">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection