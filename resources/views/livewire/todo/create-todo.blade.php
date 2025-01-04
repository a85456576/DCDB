<div>
    <div class="modal-header">
        <h5 class="modal-title" id="addNoteModalLabel">إضافة مهام جديدة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form>
            <!-- حقل اسم المهمه -->
            <div class="mb-3">
                <label for="title" class="form-label">اسم المهمة</label>
                <input type="text" class="form-control" id="title" placeholder="أدخل اسم المهمة" required>
            </div>

            <!-- المهام الثانوية -->
            <div class="mb-3">
                <label class="form-label">المهام الثانوية</label>
                <div class="mb-2">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="أدخل المهمة الثانوية" required>
                        <button type="button" class="btn btn-danger">
                            حذف
                        </button>
                    </div>
                </div>
                <button type="button" class="btn btn-success w-100">
                    إضافة مهمة ثانوية
                </button>
            </div>

            <!-- زر حفظ المهمة -->
            <button type="submit" class="btn btn-primary w-100">
                حفظ المهمة
            </button>
        </form>
    </div>
</div>
