<div>
    <div class="d-flex justify-content-between align-items-center p-3">
        <div class="d-flex align-items-center w-100">
            <i class="bi bi-search fs-5 text-secondary me-3"></i>
            <input type="text" class="form-control border-1 w-100" placeholder="ابحث عن ملاحظة...">
        </div>
    </div>

    <div class="text-center my-5 py-3">
        @if (empty($notes))
            <i class="bi bi-sticky text-secondary" style="font-size: 3rem;"></i>
            <p class="text-secondary mt-3">لم يتم إضافة أي ملاحظات</p>
        @else
            <ul class="list-group">
                @foreach ($notes as $note)
                    <li class="list-group-item">{{ $note['content'] }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <!-- زر إضافة ملاحظة جديدة لفتح نافذة منبثقة -->
    <div class="bg-light d-flex justify-content-between align-items-center px-3 py-2 border-top">
        <div>
            <button class="btn text-success fs-3 px-0" type="button" data-bs-toggle="modal" data-bs-target="#addNoteModal"
                onmouseover="this.firstElementChild.style.transform = 'scale(1.1)'; this.firstElementChild.style.color = '#007bff';"
                onmouseout="this.firstElementChild.style.transform = 'scale(1)'; this.firstElementChild.style.color = '';">
                <i class="bi bi-plus-circle"></i>
            </button>
            <span class="ms-2">إضافة ملاحظة جديدة</span>
        </div>
    </div>

    <!-- نافذة منبثقة لإضافة ملاحظة جديدة -->
    <div class="modal fade" id="addNoteModal" tabindex="-1" aria-labelledby="addNoteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    @livewire('note.create-note')
                </div>
            </div>
        </div>
    </div>
</div>
