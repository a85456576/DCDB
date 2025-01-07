<div>
    <div class="d-flex justify-content-between align-items-center p-3">
        <div class="d-flex align-items-center w-100">
            <i class="bi bi-search fs-5 text-secondary me-3"></i>
            <input type="text" class="form-control border-1 w-100" placeholder="ابحث عن مهام...">
        </div>
    </div>
    <div class="my-5 py-3">
        @if (empty($tasks))
            <div class="text-center">
                <i class="bi bi-sticky text-secondary" style="font-size: 3rem;"></i>
                <p class="text-secondary mt-3">لا توجد اي مهام مضافة</p>
            </div>
        @else
        @foreach ($tasks as $task)
            <div class="list-group">
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">{{ $task->title }}</h5>
                    </div>
                </div>
                @endforeach
        @endif
    </div>

    <!-- زر إضافة ملاحظة مهمة -->
    <div class="bg-light d-flex justify-content-between align-items-center px-3 py-2 rounded border-top">
        <div>
            <button class="btn text-success fs-3 px-0" type="button" data-bs-toggle="modal"
                data-bs-target="#addTodoModal"
                onmouseover="this.firstElementChild.style.transform = 'scale(1.1)'; this.firstElementChild.style.color = '#007bff';"
                onmouseout="this.firstElementChild.style.transform = 'scale(1)'; this.firstElementChild.style.color = '';">
                <i class="bi bi-plus-circle"></i>
            </button>
            <span class="ms-2">إضافة مهمة جديدة</span>
        </div>
    </div>

    <!-- نافذة لإضافة مهمة جديدة -->
    <div class="modal fade" id="addTodoModal" tabindex="-1" aria-labelledby="addTodoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    @livewire('todos.add-modal')
                </div>
            </div>
        </div>
    </div>
</div>
