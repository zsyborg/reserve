@include('header')

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
                            <p><a href="mailto:sherlyn@domain.com">malini@gmail.com</a></p>
                        </div>
                        <div class="dashboard_menu_area">
                            <ul>
                                <li><a href="dashboard.html" class="active"><i
                                            class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                                <li class="dashboard_dropdown_button" id="dashboard_dropdowns"><i
                                        class="fas fa-address-card"></i>My bookings
                                    <span> <i class="fas fa-angle-down"></i></span>
                                    <div class="booing_sidebar_dashboard" id="show_dropdown_item"
                                        style="display: none;">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-hotel"></i>Hotel
                                                    booking</a></li>
                                            <li><a href="#"><i class="fas fa-paper-plane"></i>Flight
                                                    booking</a></li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-map"></i>Tour booking
                                                </a>
                                            </li>
                                            <li><a href="#">
                                                    <i class="fas fa-history"></i>Booking history</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="/profile"><i class="fas fa-user-circle"></i>My profile</a></li>
                                <li><a href="#"><i class="fas fa-wallet"></i>Wallet</a></li>
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fas fa-sign-out-alt"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dashboard_main_top">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_top_boxed">
                                    <div class="dashboard_top_icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                    <div class="dashboard_top_text">
                                        <h3>Total bookings</h3>
                                        <h1>231</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_top_boxed">
                                    <div class="dashboard_top_icon">
                                        <i class="fas fa-sync"></i>
                                    </div>
                                    <div class="dashboard_top_text">
                                        <h3>Pending bookings</h3>
                                        <h1>23</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard_common_table">
                        <h3>My bookings</h3>
                        <div class="table-responsive-lg table_common_area">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl no.</th>
                                        <th>Booking ID</th>
                                        <th>Booking type</th>
                                        <th>Booking amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>02.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>03.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>04.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>05.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="cancele">Canceled</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>06.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pagination_area">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
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
