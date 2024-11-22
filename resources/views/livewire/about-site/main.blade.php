@section('title', 'حول الموقع')
<div>
    <div class="container-fluid">
        <div class='title-space'>
            <h3 class="cairo-bold">معلومات الموقع</h3>
        </div>
        <div class=" card shadow-none border p-4">
            <form wire:submit.prevent='edit'>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="facebook" class="form-control dt-full-name"
                                    wire:model="facebook" placeholder="" aria-label="" aria-describedby="facebook2"
                                    required />
                                <label for="facebook" class="cairo-semi-bold">Facebook</label>
                            </div>
                        </div>
                        @error('facebook')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4 mb-4 ">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="instagram" class="form-control dt-full-name"
                                    wire:model="instagram" placeholder="" aria-label="" aria-describedby="instagram2"
                                    required />
                                <label for="instagram" class="cairo-semi-bold"> Instagram </label>
                            </div>
                        </div>
                        @error('instagram')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4 mb-4 ">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="linkedin" class="form-control dt-full-name"
                                    wire:model="linkdin" placeholder="" aria-label="" aria-describedby="linkedin2"
                                    required />
                                <label for="linkedin" class="cairo-semi-bold"> Linkedin </label>
                            </div>
                        </div>
                        @error('linkdin')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4 mb-4 ">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="youtube" class="form-control dt-full-name"
                                    wire:model="youtube" placeholder="" aria-label="" aria-describedby="youtube2"
                                    required />
                                <label for="youtube" class="cairo-semi-bold"> Youtube </label>
                            </div>
                        </div>
                        @error('youtube')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="phone-number" class="form-control dt-full-name"
                                    wire:model="phone" placeholder="" aria-label="" aria-describedby="phone-number2"
                                    required />
                                <label for="phone-number" class="cairo-semi-bold"> Phone number </label>
                            </div>
                        </div>
                        @error('phone')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="email" class="form-control dt-full-name"
                                    wire:model="email" placeholder="" aria-label="" aria-describedby="email2"
                                    required />
                                <label for="email" class="cairo-semi-bold"> Email </label>
                            </div>
                        </div>
                        @error('email')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="map-location" class="form-control dt-full-name"
                                    wire:model="mapLocation" placeholder="" aria-label=""
                                    aria-describedby="map-location2" required />
                                <label for="map-location" class="cairo-semi-bold"> Map Location </label>
                            </div>
                        </div>
                        @error('mapLocation')
                            <div class="error text-danger">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="physical-location-ar" class="form-control dt-full-name"
                                    wire:model="physicalLocation" placeholder="" aria-label=""
                                    aria-describedby="physical-location-ar2" required />
                                <label for="physical-location-ar" class="cairo-semi-bold"> Physical Location in Arabic
                                </label>
                            </div>
                        </div>
                        @error('physicalLocation')
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
