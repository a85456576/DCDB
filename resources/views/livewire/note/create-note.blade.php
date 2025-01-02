<div class="container my-5">
    <h2 class="text-center">إضافة ملاحظة جديدة</h2>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">عنوان الملاحظة</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="أدخل عنوان الملاحظة" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">محتوى الملاحظة</label>
            <textarea class="form-control" id="content" name="content" rows="5" placeholder="أدخل محتوى الملاحظة" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">حفظ الملاحظة</button>
    </form>
</div>
