@section('title','المشرفين')
<div>
    @if (auth()->user()->role === 1)
        <div class="container-fluid">
            <div class='title-space'>
                <h3 class="cairo-bold">المشرفين</h3>
            </div>
            <div class="card p-1" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a class="modal-effect btn btn-success btn-block cairo-bold w-100 btn-donate" data-bs-effect="effect-scale"
                            data-bs-toggle="modal" href="#addModal">اضافة مشرف جديد </a>
                    </div>
                    <div class="col-md-9 col-sm-6">
                        <input wire:model.live.debounce.500ms='search' class="form-control cairo-semi-bold"
                            placeholder="ابحث باسم المشرف" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($supervisors->isNotEmpty())
                    @foreach ($supervisors as $supervisor)
                        @livewire('supervisors.details', ['supervisor' => $supervisor], key($supervisor->id))
                    @endforeach
                @else
                    <div class="text-center mt-5">
                        <div>
                            <img src="{{ asset('project_images/teamwork.png') }}" alt="" width="300"
                                height="300">
                        </div>
                        <h2 class="cairo-semi-bold fs-3 mt-2"> لايوجد مشرفين</h2>
                    </div>
                @endif
            </div>
        </div>
        <div class="add-section">
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
                @livewire('supervisors.add-modal')
            </div>
        </div>
        <div class="edit-section">
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
                @livewire('supervisors.edit-modal')
            </div>
        </div>
    @endif
</div>
