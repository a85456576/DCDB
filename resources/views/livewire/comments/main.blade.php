@section('title', 'التعليقات')
<div>
    <div class="container-fluid" id="matches">
        <div class='title-space'>
            <h3 class="cairo-bold">التعليقات</h3>
        </div>
        <div class="row">
            @if ($comments->isNotEmpty())
                @php
                    $offset = ($comments->currentPage() - 1) * $comments->perPage();
                @endphp
                <div class="card px-0">
                    <div class="table-responsive text-nowrap" style="border-radius: 10px;">
                        <table class="table table-striped text-nowrap cairo-bold text-center">
                            <thead style="background: rgb(19, 83, 193); width: 100%">
                                <tr>
                                    <th style="font-size: 16px;color:white">#</th>
                                    <th style="font-size: 16px;color:white">Name</th>
                                    <th style="font-size: 16px;color:white"> Email</th>
                                    <th style="font-size: 16px;color:white">News Title</th>
                                    <th style="font-size: 16px;color:white">Comment</th>
                                    <th style="font-size: 16px;color:white">Events</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $index => $comment)
                                    <tr>
                                        <th>{{ $index + 1 + $offset }}</th>
                                        <td>{{ $comment->name }}</td>
                                        <td>{{ $comment->email }}</td>
                                        <td>{{ $comment->news->title_ar }}</td>
                                        <td>
                                            <button
                                                class="w-100 btn btn-outline-secondary d-flex align-items-center modal-effect"
                                                data-bs-effect="effect-scale" data-bs-toggle="modal"
                                                data-bs-target="#body-modal" style="border: green 1px solid;"
                                                wire:click="showBodyContents('{{ $comment->id }}')">
                                                <i class="mdi mdi-sync align-middle me-1"></i><span
                                                    class="cairo-semi-bold">
                                                    comment</span>
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false"
                                                role="button">
                                                <i class="mdi mdi-dots-vertical mdi-20px text-secondary"></i>
                                            </button>
                                            <ul class="dropdown-menu text-center">
                                                <li><button class="dropdown-item"
                                                        wire:click='update({{ $comment->id }})'>
                                                        {{ $comment->show_in_site == 1 ? 'اظهار التعليق' : 'اخفاء التعليق' }}
                                                    </button></li>
                                                <li><button class="dropdown-item"
                                                        wire:click='remove({{ $comment->id }})'>حذف التعليق</button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 mb-2">
                        {{ $comments->links('livewire.comments.paginate') }}
                    </div>
                </div>
            @else
                <div class="text-center mt-5">
                    <div>
                        <img src="{{ asset('project_images/teamwork.png') }}" alt="" width="300"
                            height="300">
                    </div>
                    <h2 class="cairo-semi-bold fs-3 mt-2"> لايوجد التعليقات</h2>
                </div>
            @endif
        </div>
    </div>
    <div class="body-section" wire:ignore>
        <div class="modal fade" id="body-modal" tabindex="-1" role="dialog" aria-hidden="true">
            @livewire('comments.body-modal')
        </div>
    </div>
</div>
