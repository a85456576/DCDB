@section('title', 'اتصل بنا')
<div>
    <div class="container-fluid" id="matches">
        <div class='title-space'>
            <h3 class="cairo-bold">اتصل بنا</h3>
        </div>
        <div class="row">
            @if ($contacts->isNotEmpty())
                @php
                    $offset = ($contacts->currentPage() - 1) * $contacts->perPage();
                @endphp
                <div class="card px-0">
                    <div class="table-responsive text-nowrap" style="border-radius: 10px;">
                        <table class="table table-striped text-nowrap cairo-bold text-center">
                            <thead style="background: rgb(19, 83, 193); width: 100%">
                                <tr>
                                    <th style="font-size: 16px;color:white">#</th>
                                    <th style="font-size: 16px;color:white">Name</th>
                                    <th style="font-size: 16px;color:white">Email</th>
                                    <th style="font-size: 16px;color:white">Phone Number</th>
                                    <th style="font-size: 16px;color:white">Subject</th>
                                    <th style="font-size: 16px;color:white">Body</th>
                                    <th style="font-size: 16px;color:white">Events</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $index => $contact)
                                    <tr>
                                        <th>{{ $index + 1 + $offset }}</th>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>
                                            <button
                                                class="w-100 btn btn-outline-secondary d-flex align-items-center modal-effect"
                                                data-bs-effect="effect-scale" data-bs-toggle="modal"
                                                data-bs-target="#body-modal" style="border: green 1px solid;"
                                                wire:click="showBodyContents('{{ $contact->id }}')">
                                                <i class="mdi mdi-sync align-middle me-1"></i><span
                                                    class="cairo-semi-bold">
                                                    body</span>
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn  p-0" wire:click='remove({{ $contact->id }})'>
                                                <i class="mdi mdi-trash-can text-danger mdi-20px text-secondary"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 mb-2">
                        {{ $contacts->links('livewire.contactus.paginate') }}
                    </div>
                </div>
            @else
                <div class="text-center mt-5">
                    <div>
                        <img src="{{ asset('project_images/teamwork.png') }}" alt="" width="300"
                            height="300">
                    </div>
                    <h2 class="cairo-semi-bold fs-3 mt-2"> لايوجد اتصل بنا</h2>
                </div>
            @endif
        </div>
    </div>
    <div class="body-section" wire:ignore>
        <div class="modal fade" id="body-modal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('contactus.body-modal')
        </div>
    </div>
</div>
