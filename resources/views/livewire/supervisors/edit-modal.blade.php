<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-content-demo">
        <form wire:submit.prevent='edit' enctype="multipart/form-data">
            <div class="modal-header">
                <h6 class="modal-title cairo-bold">تعديل معلومات المشرف</h6> <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label cairo-bold text-bold"> اسم المشرف
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
                            <input wire:model="email" type="email" class="form-control cairo-semi-bold" required>
                            @error('email')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="form-group">
                            <label class="form-label cairo-bold"> كلمة المرور </label>
                            <input wire:model="password" type="password" class="form-control cairo-semi-bold">
                            @error('password')
                                <div class="error text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="form-label cairo-bold">الصلاحيات</label>
                        <div class="form-check">
                            <input wire:model="permissions" value="Download" class="form-check-input" type="checkbox"
                                id="download" @if (in_array('Download', $permissions)) checked @endif>
                            <label class="form-check-label" for="download">تنزيل</label>
                        </div>
                        <div class="form-check">
                            <input wire:model="permissions" value="Create" class="form-check-input" type="checkbox"
                                id="add" @if (in_array('Create', $permissions)) checked @endif>
                            <label class="form-check-label" for="add">إضافة</label>
                        </div>
                        <div class="form-check">
                            <input wire:model="permissions" value="Delete" class="form-check-input" type="checkbox"
                                id="delete" @if (in_array('Delete', $permissions)) checked @endif>
                            <label class="form-check-label" for="delete">حذف</label>
                        </div>
                        <div class="form-check">
                            <input wire:model="permissions" value="Update" class="form-check-input" type="checkbox"
                                id="edit" @if (in_array('Update', $permissions)) checked @endif>
                            <label class="form-check-label" for="edit">تعديل</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" dir="ltr">
                <button class="btn ripple btn-danger cairo-semi-bold" data-bs-dismiss="modal"
                    type="button">الغاء</button>
                <button type="submit" class="btn btn-primary cairo-semi-bold">تعديل المعلومات</button>
            </div>
        </form>
    </div>
</div>
