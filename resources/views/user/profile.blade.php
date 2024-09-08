@include('header')


    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>My Profile</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="dashboard.html">Customer
                                    dashboard</a></li>
                            <li><span><i class="fas fa-circle"></i></span>My Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Area -->
    <section id="dashboard_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="dashboard_sidebar">
                        <div class="dashboard_sidebar_user">
                            <img src="/img/common/dashboard-user.png" alt="img">
                            <h3>Malini Chopra</h3>
                            <p><a href="tel:+00-123-456-789">+00 123 456 789</a></p>
                            <p><a href="mailto:Malini@gmail.com">malini@gmail.com</a></p>
                        </div>
                        <div class="dashboard_menu_area">
                            <ul>
                                <li><a href="dashboard.html"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                                <li class="dashboard_dropdown_button" id="dashboard_dropdowns"><i
                                        class="fas fa-address-card"></i>My bookings
                                    <span> <i class="fas fa-angle-down"></i></span>
                                    <div class="booing_sidebar_dashboard" id="show_dropdown_item"
                                        style="display: none;">
                                        <ul>
                                            <li><a href="hotel-booking.html"><i class="fas fa-hotel"></i>Hotel
                                                    booking</a></li>
                                            <li><a href="flight-booking.html"><i class="fas fa-paper-plane"></i>Flight
                                                    booking</a></li>
                                            <li>
                                                <a href="tour-booking.html">
                                                    <i class="fas fa-map"></i>Tour booking
                                                </a>
                                            </li>
                                            <li><a href="booking-history.html"><i class="fas fa-history"></i>Booking
                                                    history</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="my-profile.html" class="active"><i class="fas fa-user-circle"></i>My
                                        profile</a></li>
                                <li><a href="dashboard.html"><i class="fas fa-wallet"></i>Wallet</a></li>
                                <li><a href="notification.html"><i class="fas fa-bell"></i>Notifications</a></li>
                                <li><a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dashboard_common_table">
                        <h3>My Profile</h3>
                        <div class="profile_update_form">
                            <form action="https://andit.co/projects/html/and-tour/demo/!#" id="profile_form_area">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="f-name">First name</label>
                                            <input type="text" class="form-control" id="f-name" placeholder="Your Name"
                                                value="Malini">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="l-name">Last name</label>
                                            <input type="text" class="form-control" id="l-name" value="Chopra">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mail-address">Email address</label>
                                            <input type="text" class="form-control" id="mail-address"
                                                value="Malini@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mobil-number">Mobile number</label>
                                            <input type="text" class="form-control" id="mobil-number"
                                                value="+00 123 456 789">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="u-name">User name</label>
                                            <input type="text" class="form-control" id="u-name" value="Malini">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group change_password_field">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" value="cdkdkdd">
                                            <p>Change password</p>
                                        </div>
                                    </div>
                                    <div class="change_password_input_boxed">
                                        <h3>Change password</h3>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="password" class="form-control"
                                                        placeholder="Old Password">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="password" class="form-control"
                                                        placeholder="New Password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Area -->
    <section id="cta_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_left">
                        <div class="cta_icon">
                            <img src="/img/common/email.png" alt="icon">
                        </div>
                        <div class="cta_content">
                            <h4>Get the latest news and offers</h4>
                            <h2>Subscribe to our newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cat_form">
                        <form id="cta_form_wrappper">
                            <div class="input-group"><input type="text" class="form-control"
                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                    type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
