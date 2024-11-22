<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/block-ui/block-ui.js') }}"></script>
<script src="{{asset('assets/js/app-ecommerce-customer-detail.js')}}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/app-email.js') }}"></script>
<script src="{{ asset('assets/js/swither-styles.js') }}"></script>

<script src="{{ asset('script.js') }}"></script>


@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />

<script>
    window.addEventListener('closeModal', event => {
        $("#addModal").modal('hide');
        $("#editModal").modal('hide');
        $("#filterModal").modal('hide');
        $("#editDetailsModal").modal('hide');
        $("#removeModal").modal('hide');
        $("#profileModal").modal('hide');
    });
    // document.addEventListener('contextmenu', function(event) {
    //     event.preventDefault();
    // });
    // document.addEventListener('keydown', function(event) {
    //     if (event.key === 'F12') {
    //         event.preventDefault();
    //     }

    //     if ((event.ctrlKey && event.shiftKey && (event.key === 'I' || event.key === 'J' || event.key === 'C')) || (event.ctrlKey && event.key === 'U')) {
    //         event.preventDefault();
    //     }
    // });
</script>
@yield('js')
