<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content modal-content-demo">
        <form wire:submit.prevent='create'>
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title cairo-bold">اضافة باقة جديدة</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="row">
                    <!-- Package Name Field -->
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold">اسم الباقة</label>
                            <input wire:model="name" type="text" class="form-control cairo-semi-bold">
                            @error('name')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Price Field -->
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold">السعر</label>
                            <input wire:model="price" type="number" class="form-control cairo-semi-bold">
                            @error('price')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Description Field -->
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label for="description" class="form-label cairo-bold text-bold">الوصف</label>
                            <textarea wire:model="description" id="description" rows="6" class="form-control cairo-semi-bold"></textarea>
                        </div>
                        @error('description')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer" dir="ltr">
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal" type="button">الغاء</button>
                <button type="submit" class="btn btn-success cairo-semi-bold btn-donate">اضافة الباقة</button>
            </div>
            
        </form>
    </div>
</div>
