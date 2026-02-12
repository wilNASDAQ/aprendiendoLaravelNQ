@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <div class="flex flex-1 justify-between sm:hidden">
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center rounded-md border border-stone-300 bg-white px-4 py-2 text-sm font-medium text-stone-400">
                    Anterior
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="relative inline-flex items-center rounded-md border border-stone-300 bg-white px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100">
                    Anterior
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="relative ml-3 inline-flex items-center rounded-md border border-stone-300 bg-white px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100">
                    Siguiente
                </a>
            @else
                <span
                    class="relative ml-3 inline-flex items-center rounded-md border border-stone-300 bg-white px-4 py-2 text-sm font-medium text-stone-400">
                    Siguiente
                </span>
            @endif
        </div>

        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-stone-600">
                    Mostrando
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    a
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    de
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    resultados
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex rounded-md shadow-sm">
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span
                                class="relative inline-flex items-center rounded-l-md border border-stone-300 bg-white px-2 py-2 text-sm font-medium text-stone-400"
                                aria-hidden="true">
                                &lsaquo;
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"
                            class="relative inline-flex items-center rounded-l-md border border-stone-300 bg-white px-2 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100">
                            &lsaquo;
                        </a>
                    @endif

                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center border border-stone-300 bg-white px-4 py-2 text-sm font-medium text-stone-400">
                                    {{ $element }}
                                </span>
                            </span>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative inline-flex items-center border border-stone-300 bg-stone-800 px-4 py-2 text-sm font-medium text-white">
                                            {{ $page }}
                                        </span>
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                        class="relative inline-flex items-center border border-stone-300 bg-white px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"
                            class="relative inline-flex items-center rounded-r-md border border-stone-300 bg-white px-2 py-2 text-sm font-medium text-stone-700 hover:bg-stone-100">
                            &rsaquo;
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span
                                class="relative inline-flex items-center rounded-r-md border border-stone-300 bg-white px-2 py-2 text-sm font-medium text-stone-400"
                                aria-hidden="true">
                                &rsaquo;
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
