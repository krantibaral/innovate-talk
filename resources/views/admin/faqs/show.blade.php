@extends('admin.templates.show')
@push('styles')
@endpush
@section('form_content')
    <div class="row my-4">
        <div class="col-md-7">
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Question:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->question }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Answer:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! strip_tags($item->answer) !!}
                </div>
            </div>
        </div>

    </div>
@endsection
