<div class="modal-dialog modal-dialog-centered" role="document" id="addSupervisorModal">
    <div class="modal-content modal-content-demo">
        <form wire:submit.prevent='add'>
            <div class="modal-header">
                <h6 class="modal-title cairo-bold">اضافة مستخدم جديد</h6> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold"> اسم المستخدم
                            </label>
                            <input wire:model="name" type="text" class="form-control cairo-semi-bold" required>
                            @error('name')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label  cairo-bold">البريد الالكتروني</label>
                            <input wire:model="email" type="email" class="form-control cairo-semi-bold"
                                required>
                            @error('email')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold"> كلمة المرور </label>
                            <input wire:model="password" type="password" class="form-control cairo-semi-bold"
                                required>
                            @error('password')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" dir="ltr">
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal"
                    type="button">الغاء</button>
                <button type="submit" class="btn btn-success cairo-semi-bold btn-donate">اضافة المشرف</button>
            </div>
        </form>
    </div>
</div>
