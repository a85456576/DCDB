<div>
    <div class="d-flex justify-content-between align-items-center p-3">
        <div class="d-flex align-items-center w-100">
            <i class="bi bi-search fs-5 text-secondary me-3"></i>
            <input type="text" class="form-control border-1 w-100" placeholder="ابحث عن ملاحظة...">
        </div>
    </div>

    <div class="text-center my-5 py-3">
        @if ($notes->isEmpty())
            <i class="bi bi-sticky text-secondary" style="font-size: 3rem;"></i>
            <p class="text-secondary mt-3">لم يتم إضافة أي ملاحظات</p>
        @else
            <ul class="list-group">
                @foreach ($notes as $note)
                    <li class="list-group-item">
                        <strong>{{ $note->title }}</strong> <br>
                        {{ $note->content }} <br>
                        <small class="text-muted">{{ $note->created_at->format('Y-m-d H:i') }}</small>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="fixed-bottom bg-light d-flex justify-content-between align-items-center px-3 py-2 border-top">
        <div>
            <a href="{{ route('notes.create') }}" class="btn text-success fs-3 px-0"
                onmouseover="this.firstElementChild.style.transform = 'scale(1.1)'; this.firstElementChild.style.color = '#007bff';"
                onmouseout="this.firstElementChild.style.transform = 'scale(1)'; this.firstElementChild.style.color = '';"
            >
                <i class="bi bi-plus-circle"></i>
            </a>
            <span class="ms-2">إضافة ملاحظة جديدة</span>
        </div>
    </div>
</div>
