@section('title', 'الاشتراكات')
<div>
    <div class="container-fluid" id="matches">
        <div class='title-space'>
            <h3 class="cairo-bold">الاشتراكات</h3>
        </div>
        <div class="row">
            @if ($subscribes->isNotEmpty())
                @foreach ($subscribes as $subscribe)
                    <div class="col-12 col-sm-6 col-md-4 my-2">
                        <div class="card py-0">
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-11">
                                        <p>{{ $subscribe->email }}</p>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn  p-0" wire:click='remove("{{$subscribe->id}}")'>
                                            <i class="mdi mdi-trash-can text-danger mdi-20px text-secondary"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center mt-5">
                    <div>
                        <img src="{{ asset('project_images/teamwork.png') }}" alt="" width="300"
                            height="300">
                    </div>
                    <h2 class="cairo-semi-bold fs-3 mt-2"> لايوجد اشتراكات</h2>
                </div>
            @endif
        </div>
        @if ($this->lastIdInTable != $this->lastIdInQuery)
            <div class="col-12 text-center my-4">
                <button wire:click='loadMore' class="btn btn-primary cairo-bold">تحميل المزيد</button>
            </div>
        @endif
    </div>
</div>
