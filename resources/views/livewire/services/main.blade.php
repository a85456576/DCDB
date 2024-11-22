@section('title', 'الخدمات')

<div>
    <div class="container-fluid">
        <!-- قسم العنوان -->
        <div class='title-space'>
            <h3 class="cairo-bold">الخدمات</h3>
        </div>

        <!-- زر إضافة خدمة جديدة -->
        <div class="card p-1" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <button class="btn btn-success btn-block text-white cairo-bold w-100 modal-effect btn-donate"
                        data-bs-toggle="modal" data-bs-effect="effect-scale" data-bs-target="#add-modal">
                        اضافة خدمة جديدة
                    </button>
                </div>
            </div>
        </div>

        <!-- قائمة الخدمات -->
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-6 col-xl-4 col-12 mt-3">
                    <div class="card h-fit shadow-none border">
                        <div class="rounded-2 text-center" style="position: relative;">
                            <img class="img-fluid rounded-2" style="height: 220px; width:100%"
                                src="{{ asset('/storage/' . $service->image) }}" alt="صورة الخدمة" />
                        </div>
                        <div class="card-body" style="height: fit-content !important;" dir="rtl">
                            <div
                                class="d-flex flex-column flex-md-row gap-3 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                <!-- زر المزيد -->
                                <div class="col-4">
                                    <button class="btn btn-outline-secondary d-flex align-items-center modal-effect">
                                        <a href="{{ route('services.details') }}">
                                            <i class="mdi mdi-page-next-outline"></i><span
                                                class="cairo-semi-bold">المزيد</span>
                                        </a>
                                    </button>
                                </div>

                                <!-- زر التعديل -->
                                <div class="col-4">
                                    <a class="btn-edit" data-bs-effect="effect-scale" data-bs-toggle="modal"
                                        data-bs-target="#editModal" wire:click='setServiceId("{{ $service->id }}")'
                                        style="color:#fff;">
                                        تعديل
                                        <svg class="svg-edit" viewBox="0 0 512 512">
                                            <path
                                                d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>

                                <!-- زر الحذف -->
                                <div class="col-4">
                                    {{-- <form wire:submit.prevent="delete"> --}}
                                    <button wire:click="delete('{{ $service->id }}')" class="btn-delete btn-sm"
                                        style="color:#fff !important">
                                        <span class="button__text">حذف</span>
                                        <span class="button__icon">
                                            <svg class="svg-delete" height="512" viewBox="0 0 512 512" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M112,112l20,320c.95,18.49,14.4,32,32,32H348c17.67,0,30.87-13.51,32-32l20-320"
                                                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                                </path>
                                                <line
                                                    style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"
                                                    x1="80" x2="432" y1="112" y2="112">
                                                </line>
                                                <path
                                                    d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40"
                                                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                                </path>
                                                <line
                                                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                    x1="256" x2="256" y1="176" y2="400">
                                                </line>
                                                <line
                                                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                    x1="184" x2="192" y1="176" y2="400">
                                                </line>
                                                <line
                                                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                    x1="328" x2="320" y1="176" y2="400">
                                                </line>
                                            </svg>
                                        </span>
                                    </button>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="d-flex justify-center " style=" display: flex; justify-content: center">

            <div class="my-2 ">
                {{ $services->links() }}
            </div>
        </div>
    </div>

    <!-- قسم النماذج -->
    <div class="add-section">
        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('services.add-modal')
        </div>
    </div>

    <div class="edit-section" wire:ignore>
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('services.edit-modal')
        </div>
    </div>

    <div class="read-more-section" wire:ignore>
        <div class="modal fade" id="read-more-modal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('services.read-more-modal')
        </div>
    </div>
</div>
