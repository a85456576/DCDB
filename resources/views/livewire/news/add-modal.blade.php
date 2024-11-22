<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content modal-content-demo">
        <form wire:submit.prevent="create">
            <!-- رأس النافذة (Header) -->
            <div class="modal-header">
                <h6 class="modal-title cairo-bold">إضافة خبر جديد</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- محتوى النافذة (Body) -->
            <div class="modal-body">
                <div class="row">
                    <!-- حقل العنوان -->
                    <div class="col-sm-6 mb-4">
                        <div class="input-group input-group-merge">
                            <span id="title-ar2" class="input-group-text">
                                <i class="mdi mdi-abjad-arabic"></i>
                            </span>
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="title-ar" class="form-control dt-full-name"
                                    wire:model="title" placeholder="" aria-describedby="title-ar2" required />
                                <label for="title" class="cairo-semi-bold">العنوان</label>
                            </div>
                        </div>
                        @error('title')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- حقل التاريخ -->
                    <div class="form-floating form-floating-outline col-6 mb-3">
                        <input class="form-control" type="date" id="publish-date" wire:model="date" />
                        <label for="publish-date">التاريخ</label>
                    </div>

                    <!-- حقل الوصف -->
                    <div class="col-sm-12 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <textarea wire:model="description" id="description-ar" rows="10" class="form-control dt-full-name"
                                    style="height: 130px"></textarea>
                                <label for="description-ar" class="cairo-semi-bold">الوصف</label>
                            </div>
                        </div>
                        @error('description')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- حقل رفع الصورة -->
                    <div class="col-sm-12 col-12 mt-2">
                        <div class="card mb-4" style="position: relative;">
                            <h5 class="card-header cairo-semi-bold pb-0">صورة الخبر</h5>
                            <div class="card-body">
                                <input type="file" id="profile-image-id" wire:model="image" class="hidden"
                                    accept="image/png, image/jpg, image/jpeg" />
                                <div class="d-flex align-items-center justify-center border-dashed border-2 border-gray-200 rounded-lg text-center cursor-pointer"
                                    style="height: 310px;"
                                    onclick="document.getElementById('profile-image-id').click()">
                                    <!-- يمكن إضافة صورة افتراضية هنا -->
                                </div>
                                @error('image')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- مؤشر التحميل -->
                            <div wire:loading wire:target="image" class="backdrop">
                                <div>
                                    <span class="spinner-border text-light"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- تذييل النافذة (Footer) -->
            <div class="modal-footer" dir="ltr">
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal"
                    type="button">إلغاء</button>
                <button type="submit" class="btn btn-success cairo-semi-bold">إضافة الخبر</button>
            </div>
        </form>
    </div>
</div>
