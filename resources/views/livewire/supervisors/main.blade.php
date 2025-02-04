@section('title', 'شركات')
<div>
@if (auth()->user()->role === 1)
    <div>
        <div>
            <form class="d-flex mb-3" role="search">
                <div class="d-flex gap-2">
                    <button class="btn text-success fs-3" type="button" data-bs-toggle="modal" data-bs-target="#addSupervisorModal" onclick="showAddModal()">
                        <i class="bi bi-plus-circle"></i>
                    </button>
                </div>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
        </div>
        <div class="d-flex flex-row flex-wrap text-black p-3 pb-5 rounded">
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
    <!-- Modal component -->
    <div id="addSupervisorModal" class="modal fade" aria-hidden="true">
        @livewire('supervisors.add-modal')
    </div>
    <div id="editModal" class="modal fade" aria-hidden="true">
        @livewire('supervisors.edit-modal')
    </div>
@endif
</div>


