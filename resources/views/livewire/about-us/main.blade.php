@section('title', 'حول الموقع')
<div>
    <div class="container-fluid">
        <div class='title-space'>
            <h3 class="cairo-bold">معلومات الموقع</h3>
        </div>
        <div class=" card shadow-none border p-4">
            <form wire:submit.prevent='edit'>
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <textarea wire:model="aboutUs" id="aboutUs" rows="10" class="form-control dt-full-name" style="height: 150px"></textarea>
                                <label for="aboutUs" class="cairo-semi-bold"> About Us</label>
                            </div>
                        </div>
                        @error('aboutUs')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <textarea wire:model="vision" id="vision" rows="10" class="form-control dt-full-name" style="height: 150px"></textarea>
                                <label for="vision" class="cairo-semi-bold"> Vision</label>
                            </div>
                        </div>
                        @error('vision')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <textarea wire:model="mission" id="mission" rows="10" class="form-control dt-full-name" style="height: 150px"></textarea>
                                <label for="mission" class="cairo-semi-bold"> Mission</label>
                            </div>
                        </div>
                        @error('mission')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <textarea wire:model="innovation" id="innovation" rows="10" class="form-control dt-full-name" style="height: 150px"></textarea>
                                <label for="innovation" class="cairo-semi-bold"> Innovation</label>
                            </div>
                        </div>
                        @error('innovation')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <textarea wire:model="partnership" id="partnership" rows="10" class="form-control dt-full-name" style="height: 150px"></textarea>
                                <label for="partnership" class="cairo-semi-bold"> Partnership</label>
                            </div>
                        </div>
                        @error('partnership')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <textarea wire:model="excellence" id="excellence" rows="10" class="form-control dt-full-name" style="height: 150px"></textarea>
                                <label for="excellence" class="cairo-semi-bold"> Excellence</label>
                            </div>
                        </div>
                        @error('excellence')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary w-100 cairo-semi-bold">تعديل</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
