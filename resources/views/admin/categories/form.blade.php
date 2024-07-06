<div class="form-group">
    <label for="">Category *</label>
    <input type="text" required class="form-control" name="name" value="{{ old('name', $item->name) }}">
</div>

<div class="form-group">
    <label for="">Image</label>
    <input type="file" class="form-control" accept="image/*" name="image">
    @if ($item->getImage())
        <img src="{{ $item->getImage() }}" alt="" width="30%">
    @endif
</div>