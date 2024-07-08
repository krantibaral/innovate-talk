<div class="form-group">
    <label for="">Title *</label>
    <input type="text" required class="form-control" name="title" value="{{ old('title', $item->title) }}">
</div>

<div class="form-group">
    <label for="">Link *</label>
    <input type="text" required class="form-control" name="link" value="{{ old('link', $item->link) }}">
</div>


{{-- <div class="form-group">
    <label for="">Sub Category *</label>
    <input type="text" required class="form-control" name="sub_category" value="{{ old('sub_category', $item->sub_category) }}">
</div> --}}


<div class="form-group">
    <label for="">Image</label>
    <input type="file" class="form-control" accept="image/*" name="image">
    @if ($item->getImage())
        <img src="{{ $item->getImage() }}" alt="" width="30%">
    @endif
</div>
