@extends('admin.templates.show')

@push('styles')
    <!-- Add any styles if needed -->
@endpush

@section('form_content')
    <div class="row my-4">
        <div class="col-md-7">
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Title:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->title }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Description:</span></label><br>
                </div>
                <div class="col-md-8">
                    {!! $item->description ?? '---' !!}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Type:</span></label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->type ?? '---' }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Summary:</span></label><br>
                </div>
                <div class="col-md-8">
                    {!! $item->summary ?? '---' !!}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Status:</span></label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->status }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Category:</span></label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->category->name }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Published by:</span></label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->user->name }}
                </div>
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
