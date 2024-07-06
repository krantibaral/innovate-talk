@extends('admin.templates.show')

@push('styles')
    <!-- Add any styles if needed -->
@endpush

@section('form_content')
<div class="row my-4">
    <div class="col-md-7">
        <div class="row form-group">
            <div class="col-md-3">
                <label for=""><span class="show-text">Name:</span> </label><br>
            </div>
            <div class="col-md-8">
                {{ $item->name }}
            </div>
        </div>


        <div class="col-md-4">
            @if ($item->getImage())
                <img src="{{ $item->getImage() }}" alt="Image" width="50%">
            @else
                <p>No image available</p>
            @endif
        </div>
    </div>
    @endsection