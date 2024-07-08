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
                    <label for=""><span class="show-text">Link:</span></label><br>
                </div>
                <div class="col-md-8">
                    {!! $item->link ?? '---' !!}
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
