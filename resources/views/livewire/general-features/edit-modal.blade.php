<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content modal-content-demo">
        <form wire:submit.prevent='edit'>
            <div class="modal-body">
                <div class="row">
                    <!-- العنوان الرئيسي -->
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold">العنوان الرئيسي</label>
                            <input wire:model="title" type="text" class="form-control cairo-semi-bold" required>
                            @error('title')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- الوصف -->
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label for="description" class="form-label cairo-bold text-bold">الوصف</label>
                            <textarea wire:model="description" id="description" rows="6" class="form-control cairo-semi-bold"></textarea>
                        </div>
                        @error('description')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- الايقونة -->
                    <div class="col-sm-12 col-12 mt-2">
                        <div class="card mb-4" style="position: relative">
                            <h5 class="card-header cairo-semi-bold pb-0">صورة الخبر</h5>
                            <div class="card-body">
                                <input
                                    type="file"
                                    id="edit-icon-id"
                                    wire:model="icon"
                                    class="hidden"
                                    accept="image/png, image/jpg, image/jpeg" />
                                <div
                                    class="d-flex align-items-center justify-center border-dashed border-2 border-gray-200 rounded-lg text-center cursor-pointer"
                                    style="height: 310px;"
                                    onclick="document.getElementById('edit-icon-id').click()">
                                </div>
                                @error('icon')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div wire:loading wire:target="icon" class="backdrop">
                                <div>
                                    <span class="spinner-border text-light"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- أزرار التفاعل -->
            <div class="modal-footer" dir="ltr">
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal" type="button">الغاء</button>
                <button type="submit" class="btn btn-success cairo-semi-bold">اضافة</button>
            </div>
        </form>
    </div>
</div>
