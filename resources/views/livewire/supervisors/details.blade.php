<div class="col-md-6 col-xl-4 col-sm-12">
    <div class="card">
        <div class="card-body">
            <ul class="p-0 m-0">
                <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                        <div class="avatar-initial bg-label-success rounded">
                            <div>
                                <img src="{{ asset('project_images/teamwork.png') }}" alt="credit-card" />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-1">{{ $supervisor->name }}</h6>
                            <span> {{ $supervisor->email }}</span>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <button class="btn btn-info d-none px-2 py-1 d-sm-block  m-0" wire:click='showDetails'>
                                <i class="mdi mdi-eye-circle-outline"></i>
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        @if ($isDetailsVisible)
            <div class="card-footer text-secondary border-top">
                <div class="row">
                    <div class="col-4">
                        <a class="modal-effect btn btn-sm btn-primary text-light btn-block cairo-semi-bold w-100"
                            data-bs-effect="effect-scale" data-bs-toggle="modal" data-bs-target="#editModal"
                            wire:click="setSupervisorId()" style="color:#fff !important">تعديل <i
                                class="fa fa-edit px-1"></i></a>
                    </div>
                    <div class="col-4">
                        <button wire:click="remove('{{ $supervisor->id }}')"
                            class="btn btn-sm  btn-danger text-light btn-block cairo-semi-bold w-100"
                            style="color:#fff !important">حذف <i class="fa fa-trash px-1"></i></button>
                    </div>
                    <div class="col-4">
                        @if ($supervisor->status == 0)
                            <button wire:click='changeState()'
                                class="btn btn-sm btn-success text-light btn-block cairo-semi-bold w-100"
                                style="color:#fff !important">تفعيل</button>
                        @else
                            <button wire:click='changeState()'
                                class="btn btn-sm btn-danger text-light btn-block cairo-semi-bold w-100"
                                style="color:#fff !important">تعطيل</button>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
