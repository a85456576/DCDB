@section('title', 'الأخبار')

<div>
    <div class="container-fluid">
        <!-- قسم العنوان -->
        <div class='title-space'>
            <h3 class="cairo-bold">الأخبار</h3>
        </div>

        <!-- قسم البحث وإضافة خبر جديد -->
        <div class="card p-1" style="margin-bottom: 20px;">
            <div class="row">
                <!-- زر إضافة خبر جديد -->
                <div class="col-md-3 col-sm-6 col-12">
                    <button class="btn btn-success btn-block text-white cairo-bold w-100 modal-effect btn-donate"
                        data-bs-toggle="modal" data-bs-effect="effect-scale" data-bs-target="#addModal">
                        إضافة خبر جديد
                    </button>
                </div>
                <!-- حقل البحث -->
                <div class="col-md-9 col-sm-6">
                    <input wire:model.live='search' wire:keydown.debounce.500ms='searchByTitle'
                        class="form-control cairo-semi-bold" placeholder="ابحث بعنوان الخبر" type="text">
                </div>
            </div>
        </div>

        <!-- قسم عرض الأخبار -->
        <div class="row">
            @foreach ($news as $new)
            {{-- @dd($new) --}}
                {{-- @foreach ($new->images as $image) --}}
                <div class="col-md-6 col-xl-4 col-12 mt-3">
                    <div class="card h-fit shadow-none border">
                        <!-- صورة الخبر -->
                        <div class="rounded-2 text-center" style="position: relative;">
                            <img class="img-fluid rounded-2" style="height: 220px; width:100%"
                                src="{{ asset('/storage/' . $new->images[0]->image) }}" alt="صورة الخبر" />
                            {{-- <div class="bg-white"
                                    style="
                                position: absolute;
                                left: 6%;
                                top: 92%;
                                border-radius: 6px;
                                padding: 5px;
                                color: black;
                                background: gray;
                                border: 1px solid gray;
                                padding-left:6px;
                                padding-right: 6px;">
                                </div> --}}
                        </div>
<p>{{$new->title}}</p>
                        <!-- تفاصيل الخبر -->
                        <div class="card-body" style="height: fit-content !important;" dir="rtl">
                            <div
                                class="d-flex flex-column flex-md-row gap-3 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                <!-- زر "المزيد" -->
                                <button class="w-100 btn btn-outline-secondary d-flex align-items-center modal-effect"
                                    data-bs-effect="effect-scale" data-bs-toggle="modal"
                                    data-bs-target="#read-more-modal" style="border: green 1px solid;">
                                    <i class="mdi mdi-sync align-middle me-1"></i>
                                    <span class="cairo-semi-bold">المزيد</span>
                                </button>

                                <!-- زر "تعديل" -->
                                <button class="w-100 btn btn-outline-primary d-flex align-items-center modal-effect"
                                    data-bs-toggle="modal" data-bs-target="#editModal" wire:click='setNewId("{{ $new->id }}")' data-bs-effect="effect-scale">
                                    <span class="me-1 cairo-semi-bold">تعديل</span>
                                    <i class="mdi mdi-arrow-right lh-1 scaleX-n1-rtl"></i>
                                </button>

                                <!-- زر "حذف" -->
                                <button wire:click='delete("{{$new->id}}")' class="w-100 btn btn-outline-danger d-flex align-items-center"
                                    style="border: solid 1px red;">
                                    <span class="me-1 cairo-semi-bold" style="color: red;">حذف</span>
                                    <i class="mdi mdi--right lh-1 scaleX-n1-rtl"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            @endforeach

        </div>
    </div>

    <!-- النوافذ المنبثقة (Modals) -->
    <!-- نافذة إضافة خبر جديد -->
    <div class="add-section">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('news.add-modal')
        </div>
    </div>

    <!-- نافذة تعديل الخبر -->
    <div class="edit-section" wire:ignore>
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('news.edit-modal')
        </div>
    </div>

    <!-- نافذة قراءة المزيد -->
    <div class="read-more-section" wire:ignore>
        <div class="modal fade" id="read-more-modal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('news.read-more-modal')
        </div>
    </div>
</div>
