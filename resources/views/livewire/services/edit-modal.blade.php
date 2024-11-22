<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content modal-content-demo">
        <form wire:submit.prevent='edit'>
            <div class="modal-header">
                <h6 class="modal-title cairo-bold">تعديل الخدمة</h6> <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold"> العنوان الرئيسي
                            </label>
                            <input wire:model='title' type="text" class="form-control cairo-semi-bold"  required>
                            @error('title')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold"> العنوان الفرعي
                            </label>
                            <input wire:model="subTitle" type="text" class="form-control cairo-semi-bold" required>
                            @error('subTitle')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold">  Link
                            </label>
                            <input wire:model="link" type="text" class="form-control cairo-semi-bold"
                                required>
                            @error('link')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold"> Link Title
                            </label>
                            <input wire:model="linkTitle" type="text" class="form-control cairo-semi-bold"
                                required>
                            @error('sloganEn')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label for="description" class="form-label  cairo-bold text-bold">الوصف </label>
                            <textarea wire:model="description" id="descriptionAr" rows="6" class="form-control cairo-semi-bold"></textarea>
                        </div>
                        @error('description')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6 mb-2">
                        <div class="form-group">
                            <label for="descriptionList" class="form-label  cairo-bold text-bold">قائمة الوصف
                                </label>
                            <textarea wire:model="descriptionList" id="descriptionEn" rows="6" class="form-control cairo-semi-bold"></textarea>
                        </div>
                        @error('descriptionList')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 mt-2">
                        <div class="card mb-4" style="position: relative">
                            <h5 class="card-header cairo-semi-bold pb-0">صورة الخدمة</h5>
                            <div class="card-body">
                                <input type="file" id="service-image-edit" wire:model.live="image" class="hidden"
                                    accept="image/png, image/jpg, image/jpeg" />
                                <div class="d-flex align-items-center justify-center border-dashed border-2 border-gray-200 rounded-lg   text-center cursor-pointer"
                                    style="height: 310px;"
                                    onclick="document.getElementById('service-image-edit').click()">
                                </div>

                                @error('image')
                                    <div class="error text-danger">{{ $message }}
                                    </div>
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
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal"
                    type="button">الغاء</button>
                <button wire:click='' type="submit" class="btn btn-success cairo-semi-bold">تعديل الخدمة</button>
            </div>
        </form>
    </div>
</div>
