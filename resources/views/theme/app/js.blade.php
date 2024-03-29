<!-- JAVASCRIPT -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/pages/form-input-spin.init.js') }}"></script> --}}
<script src="{{ asset('js/toastr.js') }}"></script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
<script src="{{ asset('js/plugin.js') }}"></script>
<script src="{{ asset('js/method.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>


<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
@auth
    <script src="{{ asset('js/notif.js') }}"></script>
@endauth
@role('admin')
    <script src="{{ URL::asset('js/app-admin.min.js') }}"></script>
    <script>
        localStorage.setItem("route_counter_notif", "{{ route('admin.counter_notif') }}");
        localStorage.setItem("route_notification", "{{ route('admin.notification.index') }}");
    </script>
    <script>
        $(document).ready(function() {
            var height = $('.navi').data('height');
            var mobile_height = $('.navi').data('mobile-height');
            $('#notification_items').slimScroll({
                height: height,
                mobileHeight: mobile_height,
                color: '#fff',
                alwaysVisible: true,
                railVisible: true,
                railColor: '#fff',
                railOpacity: 1,
                wheelStep: 10,
                allowPageScroll: true,
                disableFadeOut: false
            });
        });
    </script>

    <!-- echarts js -->
    <script src="{{ asset('assets/libs/echarts/echarts.min.js') }}"></script>

    <!-- echarts init -->
    <script src="{{ asset('assets/js/pages/echarts.init.js') }}"></script>

    @elserole('user')
    <script>
        localStorage.setItem("route_counter_notif", "{{ route('web.counter_notif') }}");
        localStorage.setItem("route_notification", "{{ route('web.notification.index') }}");
        localStorage.setItem("route_cart", "{{ route('web.counter_cart') }}");
    </script>
    <script>
        $(document).ready(function() {
            var height = $('.navi').data('height');
            var mobile_height = $('.navi').data('mobile-height');
            $('#notification_items').slimScroll({
                height: height,
                mobileHeight: mobile_height,
                color: '#fff',
                alwaysVisible: true,
                railVisible: true,
                railColor: '#fff',
                railOpacity: 1,
                wheelStep: 10,
                allowPageScroll: true,
                disableFadeOut: false
            });
        });
    </script>
    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ URL::asset('js/app.min.js') }}"></script>
@endrole
