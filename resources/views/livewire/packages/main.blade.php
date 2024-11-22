@section('title', 'الباقات')
<div>
    <div class="container-fluid">
        <div class='title-space'>
            <h3 class="cairo-bold">الباقات</h3>
        </div>
        <div class="card p-1" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <button class="btn btn-success btn-block text-white cairo-bold w-100 modal-effect btn-donate"
                        data-bs-toggle="modal" data-bs-effect="effect-scale" data-bs-target="#add-modal">اضافة باقة جديدة
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- @if ($services->isNotEmpty())
                @foreach ($services as $service) --}}
            <div class="col-md-6 col-xl-4 col-12 mt-3">
                <div class="card  h-fit shadow-none border">
                    <div class="card-body" style="height: fit-content !important; " dir="rtl">
                        <div class="d-flex justify-content-center">
                            <div>
                                <p class="h5 cairo-bold" style="color: black !important;"> ERP </p>
                                <p class="h6 cairo-semi-bold" style="color: black !important;">$200 </p>
                            </div>
                        </div>
                        <p class="mt-2 cairo-semi-bold">... Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Minus vitae laudantium ratione obcaecati? Itaque eos culpa iste non corporis maiores,
                            consequuntur, soluta perspiciatis quis laudantium, obcaecati vitae. Tempore, est quod!
                        </p>
                        {{-- <p class="h5 cairo-bold">{{ Str::substr($service->title_ar, 0, 40) }} </p>
                                <p class="h6 cairo-semi-bold">{{ Str::substr($service->slogan_ar, 0, 40) }} </p>
                                <p class="mt-2 cairo-semi-bold">{{ Str::substr($service->description_ar, 0, 200) }}...
                                </p> --}}
                        {{-- describe list --}}
                        <div
                        class="d-flex flex-column flex-md-row gap-3 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                        <button class="w-100 btn btn-outline-primary d-flex align-items-center modal-effect"
                            data-bs-toggle="modal" data-bs-target="#editModal"
                            data-bs-effect="effect-scale" 
                            {{-- wire:click="setCategoryId('{{ $category->id }}')" --}}
                            >
                            <span class="me-1 cairo-semi-bold">تعديل</span><i
                                class="mdi mdi-file-edit"></i>
                        </button>
                        <button class="w-100 btn btn-outline-danger d-flex align-items-center"
                            style="border:solid 1px red;"
                             {{-- wire:click="remove('{{ $category->id }}')" --}}
                            >
                            <span class="me-1 cairo-semi-bold" style="color: red;">حذف</span><i
                                class="mdi mdi-delete"></i>
                        </button>
                    </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach
            @else
                <div class="text-center mt-5">
                    <div>
                        <img src="{{ asset('project_images/enterprise.png') }}" alt="" width="300"
                            height="300">
                    </div>
                    <h2 class="cairo-semi-bold fs-3 mt-2"> لايوجد باقات</h2>
                </div>
            @endif --}}
        </div>
    </div>
    <div class="add-section">
        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('packages.add-modal')
        </div>
    </div>
    <div class="edit-section" wire:ignore>
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('packages.edit-modal')
        </div>
    </div>

</div>
