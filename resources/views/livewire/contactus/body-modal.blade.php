<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content modal-content-demo">
        @if (!empty($body))
            <div class="modal-body cairo-semi-bold">
                <p style="font-size: 18px;">{{ $body }}</p>
            </div>
            <div class="modal-footer" dir="ltr">
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal" type="button">اغلاق</button>
            </div>
        @endif
    </div>
</div>
