<div class="container py-4" id="notePage">
    <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded shadow-sm">
        <div class="d-flex align-items-center">
            <i class="bi bi-search fs-5 text-secondary me-3"></i>
            <input type="text" class="form-control border-0 bg-light" placeholder="ابحث عن ملاحظة...">
        </div>
        <div class="d-flex align-items-center">
            <span class="fw-bold text-secondary me-3">الملاحظات</span>
            <i class="bi bi-three-dots fs-5 text-secondary me-3"></i>
            <i class="bi bi-x-lg fs-5 text-secondary"></i>
        </div>
    </div>

    <div class="text-center my-5">
        @if (empty($notes))
            <i class="bi bi-sticky text-secondary" style="font-size: 3rem;"></i>
            <p class="text-secondary mt-3">لم يتم إضافة أي ملاحظات</p>
        @else

        @endif
    </div>

    <div class="fixed-bottom bg-light d-flex justify-content-between align-items-center px-3 py-2 border-top">
        <div>
            <button class="btn btn-primary btn-sm rounded-circle">
                <i class="bi bi-plus"></i>
            </button>
            <span class="ms-2">إضافة ملاحظة جديدة</span>
        </div>
    </div>
</div>
