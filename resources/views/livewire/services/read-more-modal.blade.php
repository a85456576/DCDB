<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content modal-content-demo">
        @if (!empty($service))
            <div class="modal-header">
                <h5 class="modal-title cairo-bold">{{ $isLangChange ? $service->title_en : $service->title_ar }}</h5> <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body cairo-semi-bold">
                <h5>{{$isLangChange ? $service->slogan_en : $service->slogan_ar }}</h5>
                <p style="font-size: 18px;">{{$isLangChange ? $service->description_en : $service->description_ar }}</p>
            </div>
            <div class="modal-footer" dir="ltr">
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal"
                    type="button">اغلاق</button>
                <button type="submit" class="btn btn-dark cairo-semi-bold" wire:click='toggleLanguage'>{{$isLangChange ? 'AR' : 'EN'}}</button>
            </div>
        @endif
    </div>
</div>
