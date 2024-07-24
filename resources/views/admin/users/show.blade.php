@extends('admin.templates.show' )
@push('styles')
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

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Phone:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! $item->phone??'---' !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Email:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! $item->email??'---' !!}
                </div>
            </div>
        </div>
     
    </div>
@endsection