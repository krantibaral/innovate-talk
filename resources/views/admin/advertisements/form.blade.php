<div class="form-group">
    <label for="">Title *</label>
    <input type="text" required class="form-control" name="title" value="{{ old('title', $item->title) }}">
</div>

<div class="form-group">
    <label for="">Description *</label>
    <textarea name="description" id="summernote" class="form-control">{!! old('description', $item->description) !!}</textarea>
</div>

<div class="form-group">
    <label for="">Category *</label>
    <select class="form-control" name="category_id" id="category_id">
        <option value="">Select Category</option>
        @foreach ($categories as $categoryId => $categoryName)
            <option value="{{ $categoryId }}" {{ old('category_id') == $categoryId ? 'selected' : '' }}>
                {{ $categoryName }}
            </option>
        @endforeach
    </select>
</div>
{{-- <div class="form-group">
    <label for="">Sub Category *</label>
    <input type="text" required class="form-control" name="sub_category" value="{{ old('sub_category', $item->sub_category) }}">
</div> --}}

<div class="form-group">
    <label for="">Type *</label>
    <select class="form-control" name="type" id="type">
        <option value="free" {{ old('type', $item->type) === 'free' ? 'selected' : '' }}>Free</option>
        <option value="premium" {{ old('type', $item->type) === 'premium' ? 'selected' : '' }}>Premium</option>
    </select>
</div>

<div class="form-group">
    <label for="">Status *</label>
    <select class="form-control" name="status" id="status">
        <option value="active" {{ old('status', $item->status) === 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ old('status', $item->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
</div>

<div class="form-group" id="summary-field" style="display: none;">
    <label for="summary">Summary *</label>
    <textarea name="summary" rows= "8" class="form-control">{!! old('summary', $item->summary) !!}</textarea>

</div>

<div class="form-group">
    <label for="">Image</label>
    <input type="file" class="form-control" accept="image/*" name="image">
    @if ($item->getImage())
        <img src="{{ $item->getImage() }}" alt="" width="30%">
    @endif
</div>

<script>
    // Toggle visibility of summary field based on selected option
    document.getElementById('type').addEventListener('change', function() {
        var summaryField = document.getElementById('summary-field');
        if (this.value === 'premium') {
            summaryField.style.display = 'block';
        } else {
            summaryField.style.display = 'none';
        }
    });
</script>
