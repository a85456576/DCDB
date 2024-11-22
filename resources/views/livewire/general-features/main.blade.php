@section('title', 'لماذا انظمتنا')
<div>
    <div class="container-fluid">
        <div class='title-space'>
            <h3 class="cairo-bold">لماذا انظمتنا</h3>
        </div>
        <div class="card p-1" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <button class="btn btn-success btn-block text-white cairo-bold w-100 modal-effect btn-donate"
                        data-bs-toggle="modal" data-bs-effect="effect-scale" data-bs-target="#add-modal">اضافة
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($features as $feature)
                <div class="col-md-6 col-xl-4 col-12 mt-3">
                    <div class="card  h-fit shadow-none border">
                        <div class="rounded-2 text-center" style="position: relative;">

                            <div style="position: absolute; right: 6%; top: 85%;border-radius: 6px;" class="bg-white">
                                <img class="img-fluid" alt="tutor image 1"
                                    src="{{ asset('/storage/' . $feature->icon) }}"
                                    style="width: 100%; height: 120px;border-radius: 6px;" />
                            </div>
                        </div>
                        <div class="card-body" style="height: fit-content !important; " dir="rtl">

                            <div
                                class="d-flex flex-column flex-md-row gap-3 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                <button  wire:click='setGeneralID("{{$feature->id}}")' class="w-100 btn btn-outline-primary d-flex align-items-center modal-effect"
                                    data-bs-toggle="modal" data-bs-target="#editModal" data-bs-effect="effect-scale">
                                    <span class="me-1 cairo-semi-bold">تعديل</span><i class="mdi mdi-file-edit"></i>
                                </button>
                                <button wire:click="delete('{{ $feature->id }}')" class="w-100 btn btn-outline-danger d-flex align-items-center"
                                    style="border:solid 1px red;">
                                    <span class="me-1 cairo-semi-bold" style="color: red;">حذف</span><i
                                        class="mdi mdi-delete"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <div class="add-section">
        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('general-features.add-modal')
        </div>
    </div>
    <div class="edit-section" wire:ignore>
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('general-features.edit-modal')
        </div>
    </div>
</div>
