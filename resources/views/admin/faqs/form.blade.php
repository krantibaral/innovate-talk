<input type="hidden" name="blog_id" value="{{ $blog_id }}">
<div class="row mb-3">
    <div class="col-md-12">
        <label for="name">Question *</label>
        <input type="text" required class="form-control" name="question" id="question"
            value="{{ old('name', $item->question) }}">
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="answer">Answer *</label>
            <textarea required class="form-control form-control-lg custom-font-size" id="summernote" name="answer" rows="5">{{ old('answer', $item->answer) }}</textarea>
        </div>
    </div>
</div>
