<div class="wrap">
    <div class="header">
        <div class="headertop_desc">
            <div class="call">

            </div>
            <div class="account_desc">
                <ul>
                    @auth
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('userprofile')}}">My Account</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>

                    @endauth
                    @guest
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                    @endguest


                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <div class="header_top">
            <div class="logo">

                <img src="https://www.log.com.tr/wp-content/uploads/2021/03/yemeksepeti-logo-660x371.jpg" height="150" width="200"/>

            </div>
            <div class="cart">
                @auth
                <p>Hoşgeldiniz! <span><a href="{{route('user_shopcart')}}">Sepetim:</a></span> {{\App\Http\Controllers\ShopcartController::countshopcart()}} item(s) -
                    </p>
                @endauth
            </div>
            <script type="text/javascript">
                function DropDown(el) {
                    this.dd = el;
                    this.initEvents();
                }
                DropDown.prototype = {
                    initEvents : function() {
                        var obj = this;

                        obj.dd.on('click', function(event){
                            $(this).toggleClass('active');
                            event.stopPropagation();
                        });
                    }
                }

                $(function() {

                    var dd = new DropDown( $('#dd') );

                    $(document).click(function() {
                        // all dropdowns
                        $('.wrapper-dropdown-2').removeClass('active');
                    });

                });

            </script>
            <div class="clear"></div>
        </div>
        <div class="header_bottom">
            <div class="menu">
                <ul>
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                    <li><a href="{{route('references')}}">Referanslar</a></li>
                    <li><a href="{{route('contact')}}">İletişim</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>

                    <div class="clear"></div>
                </ul>
            </div>
            <div class="search" style="text-align: right">

                <form action="{{route('getproduct')}}" method="post" class="input-append">
                    @csrf


                </form>

            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
