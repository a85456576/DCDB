@section('title', 'تفاصيل الخدمة')
<div>
    <div class="container-fluid">
        <div class='title-space'>
            <h3 class="cairo-bold">تفاصيل الخدمة</h3>
        </div>
        <div class="nav-align-top mb-4">
            <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active cairo-semi-bold" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-justified-details" aria-controls="navs-pills-justified-details"
                        aria-selected="true">
                        <i class="tf-icons mdi mdi-account-group me-1"></i> التفاصيل
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link cairo-semi-bold" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-justified-customer-experiences"
                        aria-controls="navs-pills-justified-customer-experiences" aria-selected="false">
                        <i class="tf-icons mdi mdi-account-group me-1"></i> تجربة العميل للخدمة
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link cairo-semi-bold" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-justified-features" aria-controls="navs-pills-justified-features"
                        aria-selected="false">
                        <i class="tf-icons mdi mdi-account-group me-1"></i> ميزات الخدمة
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-pills-justified-details" role="tabpanel">
                    @livewire('services.details.services-details.main')
                </div>
                <div class="tab-pane fade" id="navs-pills-justified-customer-experiences" role="tabpanel">
                    @livewire('services.details.customer-experiences.main')
                </div>
                <div class="tab-pane fade" id="navs-pills-justified-features" role="tabpanel">
                    @livewire('services.details.features.main')
                </div>
            </div>
        </div>

        {{-- <div class="card p-1" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <button class="btn btn-success btn-block text-white cairo-bold w-100 modal-effect btn-donate"
                        data-bs-toggle="modal" data-bs-effect="effect-scale" data-bs-target="#add-modal">صور الخدمة
                    </button>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <button class="btn btn-success btn-block text-white cairo-bold w-100 modal-effect btn-donate"
                        data-bs-toggle="modal" data-bs-effect="effect-scale" data-bs-target="#add-modal"> تجربة العميل للخدمة
                    </button>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <button class="btn btn-success btn-block text-white cairo-bold w-100 modal-effect btn-donate"
                        data-bs-toggle="modal" data-bs-effect="effect-scale" data-bs-target="#add-modal">   مميزات الخدمة
                    </button>
                </div>
            </div>
        </div> --}}
        {{-- <div class="container-fluid">
            <div class=" p-1" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <button class="btn btn-success btn-block text-white cairo-bold w-100 modal-effect btn-donate"
                            data-bs-toggle="modal" data-bs-effect="effect-scale" data-bs-target="#add-modal"> اضافة صور الخدمة
                        </button>
                    </div>

                </div>
            </div>
            <div class="row">
                @if ($services->isNotEmpty())
                    @foreach ($services as $service)
                <div class="col-md-6 col-xl-4 col-12 mt-3">
                    <div class="card  h-fit shadow-none border">
                        <div class="card-body" style="height: fit-content !important; " dir="rtl">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <p class="h5 cairo-bold" style="color: black !important;"> شركة سهل العراق </p>
                                </div>
                            </div>
                            <p class="mt-2 cairo-semi-bold">... Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Minus vitae laudantium ratione obcaecati? Itaque eos culpa iste non corporis maiores,
                                consequuntur, soluta perspiciatis quis laudantium, obcaecati vitae. Tempore, est quod!
                            </p>
                            <p class="h5 cairo-bold">{{ Str::substr($service->title_ar, 0, 40) }} </p>
                                    <p class="h6 cairo-semi-bold">{{ Str::substr($service->slogan_ar, 0, 40) }} </p>
                                    <p class="mt-2 cairo-semi-bold">{{ Str::substr($service->description_ar, 0, 200) }}...
                                    </p>

                            describe list
                            <div
                            class="d-flex flex-column flex-md-row gap-3 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                            <button class="w-100 btn btn-outline-primary d-flex align-items-center modal-effect"
                                data-bs-toggle="modal" data-bs-target="#editModal"
                                data-bs-effect="effect-scale"
                                >
                                <span class="me-1 cairo-semi-bold">تعديل</span><i
                                    class="mdi mdi-file-edit"></i>
                            </button>
                            <button class="w-100 btn btn-outline-danger d-flex align-items-center"
                                style="border:solid 1px red;"
                                >
                                <span class="me-1 cairo-semi-bold" style="color: red;">حذف</span><i
                                    class="mdi mdi-delete"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <div class="text-center mt-5">
                        <div>
                            <img src="{{ asset('project_images/enterprise.png') }}" alt="" width="300"
                                height="300">
                        </div>
                        <h2 class="cairo-semi-bold fs-3 mt-2"> لايوجد تجربة عميل</h2>
                    </div>
                @endif
            </div>
        </div> --}}
    </div>
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
