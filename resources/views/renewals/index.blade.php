<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" type="image/x-icon" href="https://www.nikken.com/themes_wordpress_/images/icons/nikken_logo.ico"> 
	    <meta name="msapplication-TileImage" content="http://www.nikkentechnologies.com/images/nikken_144x144.png"/>
        <title>Renewals</title>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href="{{asset('renewalsas/css/gallery-materialize.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('renewalsas/css/custom.css')}}">
    </head>
    <body>
        <nav class="nav-extended">
            <div class="nav-background">
                <div class="pattern active"></div>
            </div>
            <div class="nav-wrapper container">
                <div class="nav-header center">
                    <img src="https://nettrax.myvoffice.com/nikkenusa-iact-test/custom/nikken/assets/images/2MyNikken_logo.png">
                </div>
            </div>
            <div class="categories-wrapper cyan">
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li class="active">
                        <a href="javascript:void(0)">home</a>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="feature-dropdown">
                            My Business
                            <i class="material-icons right">arrow_drop_down</i>
                        </a><ul id="feature-dropdown" class="dropdown-content" tabindex="0">
                    <li tabindex="0"><a href="javascript:void(0)">1</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">2</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">3</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">4</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">5</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">6</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">7</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">8</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">9</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">10</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">11</a></li>
                </ul>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="feature-dropdown2">
                            Ordering
                            <i class="material-icons right">arrow_drop_down</i>
                        </a><ul id="feature-dropdown2" class="dropdown-content" tabindex="0">
                    <li tabindex="0"><a href="javascript:void(0)">1</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">2</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">3</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">4</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">5</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">6</a></li>
                </ul>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="feature-dropdown3">
                            Information Center
                            <i class="material-icons right">arrow_drop_down</i>
                        </a><ul id="feature-dropdown3" class="dropdown-content" tabindex="0">
                    <li tabindex="0"><a href="javascript:void(0)">1</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">2</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">3</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">4</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">5</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">6</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">7</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">8</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">9</a></li>
                </ul>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="feature-dropdown4">
                            Recognition
                            <i class="material-icons right">arrow_drop_down</i>
                        </a><ul id="feature-dropdown4" class="dropdown-content" tabindex="0">
                    <li tabindex="0"><a href="javascript:void(0)">1</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">2</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">3</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">4</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">5</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">6</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">7</a></li>
                    <li tabindex="0"><a href="javascript:void(0)">8</a></li>
                </ul>
                    </li>
                </ul>
            </div>
        </nav>
      
        <div class="section">
            <div class="container">
                <div class="gallery row">
                    <div class="col l12 m12 s12 gallery-item gallery-expand gallery-filter sintel">
                        <div class="gallery-curve-wrapper">
                            <div class="gallery-header">
                                <i class="material-icons">report_problem</i>
                                <span>Your renewal date is on November 17, 2019. <a >Click here to renew.</a></span>
                            </div>
                            <div class="gallery-body">
                                <form action="createXML" method="POST" id="paymentForm">
                                    <input type="text" value="{{{ Session::token() }}}" id="token">
                                    <div class="title-wrapper">
                                        <h6>Thank you for chosing to renew your NikkenDistributionship</h6>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col l1 m4 s4">
                                            <img src="https://www.mynikken.com/modules/my-account-payment/assets/images/icon-renewal.jpg">
                                        </div>
                                        <div class="col l11 m8 s8">
                                            <p class="description">
                                                Nikken Distributorship Yearly Renewal <span class="right">$ 79.00</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="title-wrapper">
                                        <h6>Payment</h6>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input id="billingContact" type="text" class="validate">
                                                    <label for="billingContact">Billing Contact</label>
                                                    <hr>
                                                </div>
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">location_on</i>
                                                    <input id="street" type="text" class="validate">
                                                    <label for="street">Street</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">location_city</i>
                                                    <input id="city" type="text" class="validate">
                                                    <label for="city">City</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">domain</i>
                                                    <input id="state" type="text" class="validate">
                                                    <label for="state">State</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">fingerprint</i>
                                                    <input id="zipCode" type="text" class="validate">
                                                    <label for="zipCode">Zip Code</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field col s6">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <p>Card Information</p>
                                                    <div class="ccicons">
                                                        <div class="icon-visa"></div>
                                                        <div class="icon-amex"></div>
                                                        <div class="icon-disc"></div>
                                                        <div class="icon-mast"></div>
                                                    </div>
                                                </div>
                                                <div class="input-field col s12">
                                                    <label>(Example: 4000300020001000, no spaces or dashes)</label>
                                                    <br>
                                                </div>
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">filter_1</i>
                                                    <input id="cardNumber" type="text" class="validate" maxlength="16" minlength="16" onblur="validateLengtCard()">
                                                    <label for="cardNumber">Card Number</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <div class="input-field col s10">
                                                        <i class="material-icons prefix">fiber_pin</i>
                                                        <input id="securityCode" type="text" class="validate" maxlength="3" minlength="3" onblur="validateLengtSecureCode()">
                                                        <label for="securityCode">Security Code</label>
                                                    </div>
                                                    <div class="input-field col s2">
                                                        <i class="material-icons prefix tooltipped" data-position="left" data-tooltip="the three numbers behind the card">info_outline</i>
                                                    </div>
                                                </div>
                                                <div class="input-field col s12">
                                                    <div class="input-field col s6">
                                                        <i class="material-icons prefix">event</i>
                                                        <input id="expireMonth" type="text" maxlength="2" minlength="2">
                                                        <label for="expireMonth">Expire Month</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <i class="material-icons prefix">event_available</i>
                                                        <input id="expireYear" type="text" maxlength="4" minlength="4">
                                                        <label for="expireYear">Expire Year</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-wrapper">
                                        <p>
                                            <label>
                                                <input type="checkbox" name="termsPoliciesProcedures"/>
                                                <span>I agree to the current terms of <a href="http://library.nikken.com/document/?n=membership-agreement&lng=en" target="_new">the Consultant Agreement</a> and <a href="http://library.nikken.com/document/?n=policies-and-procedures-2016&lng=en" target="_new"> Policies and Procedures</a>. </span>
                                            </label>
                                        </p>
                                        <hr>
                                    </div>
                                    <div class="title-wrapper center">
                                        <button class="btn waves-effect waves-light green" type="submit" name="action">Coninue
                                            <i class="material-icons right">check</i>
                                        </button>
                                        &nbsp;&nbsp;
                                        <button class="btn waves-effect waves-light red" type="reset" name="action">Cancel
                                            <i class="material-icons right">cancel</i>
                                        </button>
                                        <hr>
                                    </div>
                                    <div class="title-wrapper center">
                                        <h6>Any Questions?</h6>
                                        <i class="material-icons">local_phone</i>&nbsp; (US) 800-669-8859 x4 <br>
                                        <i class="material-icons">local_phone</i>&nbsp; (CN) 800-669-8890 x4 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('renewalsas/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('renewalsas/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('renewalsas/js/materialize.min.js')}}"></script>
    <script src="{{asset('renewalsas/js/color-thief.min.js')}}"></script>
    <script src="{{asset('renewalsas/js/galleryExpand.js')}}"></script>
    <script src="{{asset('renewalsas/js/init.js')}}"></script>
    <script src="{{asset('renewalsas/js/custom.js')}}"></script>
</html>
