<!-- Site Footer -->
<div class="site-footer">
    <div class="wrap">
        <div class="top-widget text-center">
            <img src="{{Vite::asset('resources/images/logo.png')}}" alt="Logo">
        </div>
        <div class="bottom-widgets text-center">
            <div class="quick-links">
                <ul>
                    <li><a href="{{url('/')}}#our-products">Products</a></li>
                    <li><a href="{{url('/about-us')}}">About Us</a></li>
                    <li><a href="{{url('/')}}#testimonials">Testimonials</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul>
                    <li>
                        <a href="https://www.facebook.com"
                           target="_blank"
                           aria-label="Facebook link button">
                            <img src="{{Vite::asset('resources/images/facebook-icon.webp')}}" alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com"
                           target="_blank"
                           aria-label="Instagram link button">
                            <img src="{{Vite::asset('resources/images/instagram-icon.webp')}}" alt="instagram">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com"
                           target="_blank"
                           aria-label="Youtube link button">
                            <img src="{{Vite::asset('resources/images/youtube-icon.webp')}}" alt="youtube">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <p>Confectionery Store BVD <?= date('Y')?>. All rights reserved</p>
                <p><a href="javascript:void(0);">Privacy Policy</a> <a href="javascript:void(0);">Terms of Use</a></p>
            </div>
        </div>
    </div>
</div>


<!-- Site Footer END -->
