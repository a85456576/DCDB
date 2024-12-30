<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-content-demo">
        <form wire:submit.prevent='edit' enctype="multipart/form-data">
            <div class="modal-header">
                <h6 class="modal-title cairo-bold"> تعديل المعلومات الشخصية </h6> <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-6 mt-2">
                        <div class="form-group">
                            <label class="form-label cairo-semi-bold text-bold"> الاسم
                            </label>
                            <input wire:model="name" type="text" class="form-control cairo-semi-bold" required>
                            @error('name')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 my-2">
                        <div class="form-group">
                            <label class="form-label cairo-semi-bold">البريد الالكتروني</label>
                            <input wire:model="email" type="email" class="form-control cairo-semi-bold" required>
                            @error('email')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mt-2">
                        <div class="form-group">
                            <label class="form-label cairo-semi-bold"> كلمة المرور القديمة </label>
                            <input wire:model.live.debounce500ms="password" type="password"
                                wire:change.debounce500ms='checkOldPassword' @readonly($disabledPassword)
                                @disabled($disabledPassword) class="form-control cairo-semi-bold">
                            @error('password')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mt-2">
                        <div class="form-group">
                            <label class="form-label cairo-semi-bold"> كلمة المرور الجديدة </label>
                            <input wire:model.live="newPassword" type="password" class="form-control cairo-semi-bold">
                            @error('newPassword')
                                <div class="error text-danger cairo-semi-bold">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    @if ($isCurrentPasswordMatched)
                        <div class="error text-danger cairo-semi-bold"> يرجى كتابة كلمة المرور الصحيحة *
                        </div>
                    @endif
                    @if ($isPasswordMatched)
                        <div class="error text-danger cairo-semi-bold"> يرجى كتابة كلمة مرور جديدة *
                        </div>
                    @endif
                </div>
            </div>
            <div class="modal-footer" dir="ltr">
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal" type="button"
                    wire:click='closeModal'>اغلاق</button>
                <button type="submit" class="btn btn-primary cairo-semi-bold">تعديل المعلومات</button>
            </div>
        </form>
    </div>
</div>
