<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="social">
                    <li><a href="{{settings('facebook')}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{settings('twitter')}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{settings('linkedin')}}"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="{{settings('pinterest')}}"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Copyright &copy; 2024 <a href="https://klay-team.online/">Klay Team</a></p>
            </div>
        </div>
    </div>
</footer>
@include('web.frontend.layouts.footer.whatsappicon')

@include('web.frontend.layouts.footer.scrolltotop')

@include('web.frontend.layouts.footer.scripts')

@include('web.frontend.layouts.footer.js')
