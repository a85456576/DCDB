<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="background-color: #fff !important;">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/brand/sitLogo.png') }}" style="width:90px; height:30px;" alt="logo">
            </span>
            {{-- <span class="app-brand-text demo menu-text fw-bold ms-2" style="font-size: 16px"></span> --}}
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                    fill="currentColor" fill-opacity="0.6" />
                <path
                    d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                    fill="currentColor" fill-opacity="0.38" />
            </svg>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        @if (auth()->user()->role == 1)
            <li class="menu-item">
                <a href="{{ route('supervisors') }}"
                    class="menu-link cairo-semi-bold @if (request()->routeIs('supervisors')) active-parent-link @endif">
                    <i class="menu-icon tf-icons mdi  mdi-account-group-outline"></i>
                    <div>المشرفين</div>
                </a>
            </li>
        @endif
        <li class="menu-item">
            <a href="{{ route('services')}}"
                class="menu-link cairo-semi-bold @if (request()->routeIs('services')) active-parent-link @endif">
                <i class="menu-icon tf-icons mdi  mdi mdi-face-agent"></i>
                <div>الخدمات</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('packages') }}"
                class="menu-link cairo-semi-bold @if (request()->routeIs('packages')) active-parent-link @endif">
                <i class="menu-icon tf-icons  mdi mdi-cash-100"></i>
                <div>الباقات</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('news') }}"
                class="menu-link cairo-semi-bold @if (request()->routeIs('news')) active-parent-link @endif">
                <i class="menu-icon tf-icons mdi  mdi mdi-newspaper"></i>
                <div> الاخبار</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('customer.experience') }}"
                class="menu-link cairo-semi-bold @if (request()->routeIs('customer.experience')) active-parent-link @endif">
                <i class="menu-icon tf-icons mdi mdi-badge-account-horizontal"></i>
                <div> تجارب العملاء</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('general.features') }}"
                class="menu-link cairo-semi-bold @if (request()->routeIs('general.features')) active-parent-link @endif">
                <i class="menu-icon tf-icons mdi mdi-badge-account-horizontal"></i>
                <div> لماذا انظمتنا </div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('comments') }}"
                class="menu-link cairo-semi-bold @if (request()->routeIs('comments')) active-parent-link @endif">
                <i class="menu-icon tf-icons mdi  mdi mdi-comment-text-multiple"></i>
                <div> التعليقات</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('subscribes') }}"
                class="menu-link cairo-semi-bold @if (request()->routeIs('subscribes')) active-parent-link @endif">
                <i class="menu-icon tf-icons mdi  mdi mdi-playlist-check"></i>
                <div> الاشتراكات</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('contact.us') }}"
                class="menu-link cairo-semi-bold @if (request()->routeIs('contact.us')) active-parent-link @endif">
                <i class="menu-icon tf-icons mdi  mdi mdi-message-bulleted"></i>
                <div>اتصل بنا</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('about.site') }}"
                class="menu-link cairo-semi-bold @if (request()->routeIs('about.site')) active-parent-link @endif">
                <i class="menu-icon tf-icons mdi  mdi mdi-search-web"></i>
                <div> حول الموقع</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('about.us') }}"
                class="menu-link cairo-semi-bold @if (request()->routeIs('about.us')) active-parent-link @endif">
                <i class="menu-icon tf-icons mdi  mdi mdi-information"></i>
                <div> حولنا </div>
            </a>
        </li>
    </ul>
</aside>
