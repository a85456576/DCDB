<div>
    <div class="modal-header">
        <h5 class="modal-title" id="addNoteModalLabel">إضافة ملاحظة جديدة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form wire:submit.prevent="saveNote">
            <!-- حقل اسم الملاحظة -->
            <div class="mb-3">
                <label for="title" class="form-label">اسم الملاحظة</label>
                <input type="text" class="form-control" id="title" wire:model="title" placeholder="أدخل اسم الملاحظة" required>
            </div>
            <!-- حقل محتوى الملاحظة -->
            <div class="mb-3">
                <label for="content" class="form-label">محتوى الملاحظة</label>
                <textarea class="form-control" id="content" wire:model="content" rows="5" placeholder="أدخل محتوى الملاحظة" required></textarea>
            </div>

            <!-- زر حفظ الملاحظة -->
            <button type="submit" class="btn btn-primary w-100">حفظ الملاحظة</button>
        </form>
    </div>
</div>
