<!--   Core JS Files   -->
<script src="{{ asset('backend/assets/js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<!-- Kaiadmin JS -->
<script src="{{ asset('backend/assets/js/kaiadmin.min.js') }}"></script>

{{-- Custom Js  --}}
@stack('js_links')
{{-- FileUpload JS --}}
<script src="{{ asset('backend/assets/custom_files/js/fileUpload.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.dropdown-menu .dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown(200);
        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
        });
    });
</script>
@stack('js')
