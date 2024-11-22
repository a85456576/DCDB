<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content modal-content-demo">
        <form wire:submit.prevent="create">
            <div class="modal-header">
                <h6 class="modal-title cairo-bold">إضافة خدمة جديدة</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
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

                    <!-- العنوان الفرعي -->
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold">العنوان الفرعي</label>
                            <input wire:model="subTitle" type="text" class="form-control cairo-semi-bold" required>
                            @error('subTitle')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- الرابط -->
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold">الرابط</label>
                            <input wire:model="link" type="text" class="form-control cairo-semi-bold" required>
                            @error('link')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- عنوان الرابط -->
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold">عنوان الرابط</label>
                            <input wire:model="linkTitle" type="text" class="form-control cairo-semi-bold" required>
                            @error('linkTitle')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- الوصف -->
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label for="description" class="form-label cairo-bold text-bold">الوصف</label>
                            <textarea wire:model="description" id="description" rows="6" class="form-control cairo-semi-bold"></textarea>
                            @error('description')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- قائمة الوصف -->
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label for="descriptionList" class="form-label cairo-bold text-bold">قائمة الوصف</label>
                            <textarea wire:model="descriptionList" id="descriptionList" rows="6" class="form-control cairo-semi-bold"></textarea>
                            @error('descriptionList')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- صورة الخدمة -->
                    <div class="col-12 mt-2">
                        <div class="card mb-4">
                            <h5 class="card-header cairo-semi-bold pb-0">صورة الخدمة</h5>
                            <div class="card-body">
                                <input type="file" id="image-upload" wire:model="image" class="hidden" accept="image/png, image/jpg, image/jpeg" />
                                <div class="d-flex align-items-center justify-center border-dashed border-2 border-gray-200 rounded-lg text-center cursor-pointer"
                                    style="height: 310px;" onclick="document.getElementById('image-upload').click()">
                                    <span>انقر لتحميل الصورة</span>
                                </div>
                                @error('image')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div wire:loading wire:target="image" class="backdrop">
                                <div>
                                    <span class="spinner-border text-light"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer" dir="ltr">
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal" type="button">إلغاء</button>
                <button type="submit" class="btn btn-success cairo-semi-bold">إضافة الخدمة</button>
            </div>
        </form>
    </div>
</div>
