<?php

function logout()
{
    Auth::logout();
    return redirect()->route('login');
}

?>
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar"
    style="background-color: #fff !important; z-index:100 !important; @if (auth()->user()->role == 3) right:0px @endif">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="mdi mdi-menu mdi-24px"></i>
        </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            @php
                $user = auth()->user();
            @endphp
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        @if (!empty($user->profile->photo))
                            <img src="{{ asset('/public/public/storage/profileImages/' . $user->profile->photo) }}"
                                alt="profile image" class="w-px-40 h-auto rounded-circle" />
                        @else
                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="profile image"
                                class="w-px-40 h-auto rounded-circle" />
                        @endif
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        @if (!empty($user->profile->photo))
                                            <img src="{{ asset('/public/public/storage/profileImages/' . $user->profile->photo) }}"
                                                alt class="w-px-40 h-auto rounded-circle" />
                                        @else
                                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                class="w-px-40 h-px-40 rounded-circle" />
                                        @endif
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-medium d-block cairo-semi-bold">{{ auth()->user()->name }}</span>
                                    <small class="text-muted cairo-semi-bold">
                                        @if (auth()->user()->role == 0)
                                            مدير
                                        @elseif(auth()->user()->role == 1)
                                            مشرف
                                        @endif
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item modal-effect" data-bs-effect="effect-scale" data-bs-toggle="modal"
                            href="#profileModal">
                            <i class="mdi mdi-account-outline me-2"></i>
                            <span class="align-middle cairo-semi-bold">الملف الشخصي</span>
                        </a>
                    </li>
                    {{-- <li>
                        <button class="dropdown-item text-danger" type="button" wire:click='{{Illuminate\Support\Facades\Auth::logout()}}'> <i
                                class="mdi mdi-logout me-2"></i>
                            <span class="align-middle cairo-semi-bold"> تسجيل
                                الخروج</span>
                        </button>
                    </li> --}}
                </ul>
            </li>
        </ul>
    </div>
    <div class="navbar-search-wrapper search-input-wrapper d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
            aria-label="Search..." />
        <i class="mdi mdi-close search-toggler cursor-pointer"></i>
    </div>
</nav>
