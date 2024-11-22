@section('title', 'تجارب العملاء')

<div>
    <div class="container-fluid">
        <!-- العنوان الرئيسي -->
        <div class="title-space">
            <h3 class="cairo-bold">تجارب العملاء</h3>
        </div>

        <!-- زر إضافة تجربة عميل -->
        <div class="card p-1 mb-4">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <button class="btn btn-success btn-block text-white cairo-bold w-100 modal-effect btn-donate"
                        data-bs-toggle="modal" data-bs-effect="effect-scale" data-bs-target="#add-modal">
                        اضافة تجربة عميل
                    </button>
                </div>
            </div>
        </div>

        <!-- قائمة تجارب العملاء -->
        <div class="row">
            @foreach ($experiences as $experience)
                <!-- تجربة واحدة -->
                <div class="col-md-6 col-xl-4 col-12 mt-3">
                    <div class="card h-fit shadow-none border">
                        <div class="card-body" dir="rtl">
                            <!-- اسم الشركة -->
                            <div class="d-flex justify-content-center">
                                <p class="h5 cairo-bold text-dark">{{ $experience->title }}</p>
                            </div>

                            <!-- تفاصيل التجربة -->
                            <p class="mt-2 cairo-semi-bold">
                                {{ $experience->description }}
                            </p>

                            <!-- الأزرار: تعديل وحذف -->
                            <div class="d-flex flex-column flex-md-row gap-3 text-nowrap flex-wrap">
                                <button class="w-100 btn btn-outline-primary d-flex align-items-center modal-effect"
                                    data-bs-toggle="modal" data-bs-target="#editModal" wire:click='setExperienceID("{{ $experience->id }}")' data-bs-effect="effect-scale">
                                    <span class="me-1 cairo-semi-bold">تعديل</span>
                                    <i class="mdi mdi-file-edit"></i>
                                </button>
                                <button wire:click='delete("{{$experience->id}}")' class="w-100 btn btn-outline-danger d-flex align-items-center"
                                    style="border: solid 1px red;">
                                    <span class="me-1 cairo-semi-bold text-danger">حذف</span>
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- النوافذ المنبثقة -->
    <div class="add-section">
        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('customer-experiences.add-modal')
        </div>
    </div>

    <div class="edit-section" wire:ignore>
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('customer-experiences.edit-modal')
        </div>
    </div>
</div>
