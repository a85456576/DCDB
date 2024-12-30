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
                    @livewire('documents.details.services-details.main')
                </div>
                <div class="tab-pane fade" id="navs-pills-justified-customer-experiences" role="tabpanel">
                    @livewire('documents.details.customer-experiences.main')
                </div>
                <div class="tab-pane fade" id="navs-pills-justified-features" role="tabpanel">
                    @livewire('documents.details.features.main')
                </div>
            </div>
        </div>
</div>
