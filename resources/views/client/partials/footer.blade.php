<footer class="footer">
    <div class="container">
        <div class="footer-menu">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-menu__blade">
                        <h3 class="footer-menu__title">Menu</h3>
                        <a href="{{ route('client.job.index') }}" class="footer-menu__link">
                            <span class="footer-menu__dot"><i></i></span>
                            <span class="footer-menu__text">Tất cả việc làm</span>
                        </a>
                        <a href="{{ route('client.company.index') }}" class="footer-menu__link">
                            <span class="footer-menu__dot"><i></i></span>
                            <span class="footer-menu__text">Công ty</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-menu__blade">
                        <h3 class="footer-menu__title">Thông tin liên lạc</h3>
                        <div class="footer-menu__link">
                            <span class="footer-menu__icon"><i class="fa fa-home"></i></span>
                            <span class="footer-menu__text footer-menu__text--address">93 Trần Văn Dư - Mỹ An - Ngũ Hành Sơn - Đà Nẵng</span>
                        </div>
                        <div class="footer-menu__link">
                            <span class="footer-menu__icon"><i class="fa fa-phone"></i></i></span>
                            <span class="footer-menu__text">0326 917 446</span>
                        </div>
                        <div class="footer-menu__link">
                            <span class="footer-menu__icon"><i class="fa fa-envelope"></i></span>
                            <span class="footer-menu__text">hainho1001@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-menu__blade">
                        <img src="{{asset('client/images/lh3.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="footer__end">
                <div class="footer__license d-flex align-items-center">Bản quyền thuộc về HongNhung © 2020. Tất cả các quyền được bảo hộ</div>
                <div class="footer__social">
                    <a class="footer__social-blade" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="footer__social-blade" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="footer__social-blade" href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>