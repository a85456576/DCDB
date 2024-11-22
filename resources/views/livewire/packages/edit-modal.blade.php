<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content modal-content-demo">
        <form wire:submit.prevent='edit'>
            <div class="modal-header">
                <h6 class="modal-title cairo-bold">تعديل الباقة</h6> <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold"> اسم الباقة 
                            </label>
                            <input wire:model="titleAr" type="text" class="form-control cairo-semi-bold" required>
                            @error('titleAr')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold"> السعر 
                            </label>
                            <input wire:model="titleEn" type="number" class="form-control cairo-semi-bold" required>
                            @error('titleEn')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label for="descriptionAr" class="form-label  cairo-bold text-bold">الوصف </label>
                            <textarea wire:model="descriptionAr" id="descriptionAr" rows="6" class="form-control cairo-semi-bold"></textarea>
                        </div>
                        @error('descriptionAr')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer" dir="ltr">
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal"
                    type="button">الغاء</button>
                <button type="submit" class="btn btn-success cairo-semi-bold">تعديل الباقة</button>
            </div>
        </form>
    </div>
</div>
