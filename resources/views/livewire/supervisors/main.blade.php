@section('title', 'شركات')
<div>
@if (auth()->user()->role === 1)
    <div>
        <div>
            <form class="d-flex mb-3" role="search">
                <div class="d-flex gap-2">
                    <button class="btn text-success fs-3" type="button" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus-circle"></i>
                    </button>
                </div>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
        </div>
        <div class="d-flex flex-row flex-wrap justify-content-center align-content-center text-black p-3 pb-5 rounded">
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
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
        @livewire('supervisors.add-modal')
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        @livewire('supervisors.edit-modal')
    </div>
@endif
</div>


