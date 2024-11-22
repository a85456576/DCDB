<div>
    @if ($paginator->hasPages())
        <ul class="list">
            @if ($paginator->onFirstPage())
                <li class="first-page cairo-semi-bold">« السابق</li>
            @else
                <li class="pre-page cairo-semi-bold" wire:click="previousPage">« السابق</li>
            @endif
            @foreach ($elements as $element)
                @if (is_array($element))
                    @php
                        $start = max($paginator->currentPage() - 4, 1);
                        $end = min($paginator->currentPage() + 5, $paginator->lastPage());
                    @endphp
                    @if ($start > 1)
                        <li class="other-current-page" wire:click="gotoPage(1)">1</li>
                        @if ($start > 2)
                            <li class="dots">...</li>
                        @endif
                    @endif
                    @for ($page = $start; $page <= $end; $page++)
                        @if ($page == $paginator->currentPage())
                            <li class="current-page" wire:click="gotoPage({{ $page }})">{{ $page }}</li>
                        @else
                            <li class="other-current-page" wire:click="gotoPage({{ $page }})">{{ $page }}</li>
                        @endif
                    @endfor
                    @if ($end < $paginator->lastPage())
                        @if ($end < $paginator->lastPage() - 1)
                            <li class="dots">...</li>
                        @endif
                        <li class="other-current-page" wire:click="gotoPage({{ $paginator->lastPage() }})">{{ $paginator->lastPage() }}</li>
                    @endif
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="next-page cairo-semi-bold" wire:click="nextPage">التالي »</li>
            @else
                <li class="last-page cairo-semi-bold">التالي »</li>
            @endif
        </ul>
    @endif
</div>
