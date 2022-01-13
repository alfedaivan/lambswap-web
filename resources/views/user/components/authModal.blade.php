<div class="modal fade login-modal sign-in" id="signin" tabindex="-1" role="dialog" aria-labelledby="signin"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <ul class="nav l-nav" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mybtn2 active" id="pills-m_login-tab" data-toggle="pill"
                            href="#pills-m_login" role="tab" aria-controls="pills-m_login"
                            aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mybtn2" id="pills-m_register-tab" data-toggle="pill" href="#pills-m_register"
                            role="tab" aria-controls="pills-m_register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-m_login" role="tabpanel"
                        aria-labelledby="pills-m_login-tab">
                        <div class="header-area">
                            <h4 class="title">Welcome to
                                LambSwap</h4>
                        </div>
                        <div class="form-area">
                            <form method="POST" action="{{route('signin.member')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="input-field" id="email" name="email" placeholder="email"
                                        autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="input-field" id="password"
                                        placeholder="Password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <!-- <div class="form-group">
										<span>Forgot your password? <a href="#">recover password</a></span>
									</div> -->
                                <div class="form-group">
                                    <button type="submit" class="mybtn2">Login</button>
                                </div>

                            </form>
                        </div>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                    </div>
                    <div class="tab-pane fade" id="pills-m_register" role="tabpanel"
                        aria-labelledby="pills-m_register-tab">
                        <div class="header-area">
                            <!-- <span class="bunnus_btn">
									<span>Current Contest Pool</span>
									<h4>$500</h4>
								</span> -->
                                <h4 class="title">IDO Lambswap</h4>
                                <p class="text">
                                    Fill this outyour majesty & Get Your Bonus
                                </p>
                        </div>
                        <div class="form-area">
                            <form action="{{route('auth.register')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="input-field" id="name" placeholder="Name">
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="email" class="input-field" id="email" name="email"
                                        placeholder="Enter your Email">
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="input-field" id="wallet_address" name="wallet_address"
                                        placeholder="Enter Wallet Address">
                                    @if ($errors->has('wallet_address'))
                                    <span class="text-danger">{{ $errors->first('wallet_address') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="input-field" id="username_telegram"
                                        name="username_telegram" placeholder="Enter your telegram username">
                                    @if ($errors->has('username_telegram'))
                                    <span class="text-danger">{{ $errors->first('username_telegram') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" class="input-field" id="password" name="password"
                                        placeholder="Enter your password">
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="mybtn2">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
