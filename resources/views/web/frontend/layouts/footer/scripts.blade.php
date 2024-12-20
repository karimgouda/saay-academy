<!-- jQuery -->
<script src="{{asset('frontend')}}/assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="{{asset('frontend')}}/assets/js/popper.js"></script>
<script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="{{asset('frontend')}}/assets/js/scrollreveal.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/waypoints.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/jquery.counterup.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/imgfix.min.js"></script>

<!-- Global Init -->
<script src="{{asset('frontend')}}/assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready((function(){toastr.options={progressBar:!0,positionClass:"toast-top-right"}})),window.addEventListener("success",(s=>{toastr.success(s.detail[0].message)})),window.addEventListener("warning",(s=>{toastr.warning(s.detail[0].message)})),window.addEventListener("error",(s=>{toastr.error(s.detail[0].message)}));
</script>
@stack('footer-scripts')

