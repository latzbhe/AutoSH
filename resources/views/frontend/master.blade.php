<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Automation Script Hub</title>
<!-- 
Moonlight Template 
https://templatemo.com/tm-512-moonlight
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        @vite(['resources/css/app.css'])
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="{{ asset('js/accordion.js') }}"></script>
    </head>

<body>
    
    <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div>
    
  
        <nav>
          <div class="logo">
              <img src="img/logo.png" alt="">
          </div>
          <div class="mini-logo">
              <img src="img/mini_logo.png" alt="">
          </div>
          <ul>
            <li>
                <a href="#1" class="accordion-header"><em>Login</em></a>
                <ul class="accordion-content">
                    <li><a href="#2"><em>Input Text Script</em></a></li>
                    <li><a href="#3"><em>Assert Text Script</em></a></li>
                    <li><a href="#4"><em>Dropdown list Script</em></a></li>
                    <li><a href="#5"><em>Table Assert Script</em></a></li>
                </ul>
            </li>
            <li>
                <a href="#6" class="accordion-header"><em>Dashboard</em></a>
                <ul class="accordion-content">
                    <li><a href="#6"><em>Dashboard Overview</em></a></li>
                    <li><a href="#7"><em>Widgets Script</em></a></li>
                    <li><a href="#8"><em>Charts Script</em></a></li>
                    <li><a href="#9"><em>Statistics Script</em></a></li>
                </ul>
            </li>
            <li>
                <a href="#10" class="accordion-header"><em>Table</em></a>
                <ul class="accordion-content">
                    <li><a href="#10"><em>Data Table Script</em></a></li>
                    <li><a href="#11"><em>Sorting Script</em></a></li>
                    <li><a href="#12"><em>Filtering Script</em></a></li>
                    <li><a href="#13"><em>Pagination Script</em></a></li>
                </ul>
            </li>
            <li>
                <a href="#14" class="accordion-header"><em>Modal</em></a>
                <ul class="accordion-content">
                    <li><a href="#14"><em>Basic Modal Script</em></a></li>
                    <li><a href="#15"><em>Form Modal Script</em></a></li>
                    <li><a href="#16"><em>Confirmation Modal Script</em></a></li>
                    <li><a href="#17"><em>Dynamic Modal Script</em></a></li>
                </ul>
            </li>
          </ul>
        </nav>
        
        <div class="slides">
          <div class="slide" id="1">
            <div class="content first-content">
              <div class="container-fluid">
                  <div class="col-md-3">
                      <div class="author-image"><img src="img/author_image.png" alt="Author Image"></div>
                  </div>
                  <div class="col-md-9">
                      <h24LOGIN</h4>
                      <p>A login automation script is designed to <strong><a rel="nofollow" href="https://www.toocss.com">automate the process of logging into a website, web application, or system</a></strong> by simulating the behavior of a user entering credentials (such as username/email and password)  <em> into login fields and</em>,  submitting the login form. </p>
                      <div class="main-btn"><a href="#2">SCRIPT</a></div>
                      <!-- div class="fb-btn"><a rel="nofollow" href="https://fb.com/templatemo">AWIT</a></div> -->
                  </div>
              </div>
            </div>
          </div>
          <div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="left-content">
                            <h2>Input Script</h2>
                            <p><span style="color: orangered">from</span> selenium import webdriver <br>
                                <span style="color: orangered">from</span> selenium.webdriver.common.by <span style="color: orangered">import</span> By <br>
                                <span style="color: orangered">from </span>selenium.webdriver.support.wait<span style="color: orangered"> import </span>WebDriverWait <br>
                                <span style="color: orangered">from </span> selenium.webdriver.support <span style="color: orangered">import</span> expected_conditions <span style="color:orangered">as</span> EC <br>
                                <span style="color: orangered">import</span> time</p> 
                                <p><span style="color: rgba(113, 116, 113, 0.979);"># Launch the browser </span><br>
                                    driver = webdriver.Chrome()</p>                                    
                                    <p><span style="color:rgba(113, 116, 113, 0.979);"># login link and credentials</span><br>
                                driver.maximize_window() <br>
                                website_link = <span style="color: rgb(7, 230, 63);">"http://10.10.99.18:8004/login"</span> <br>
                                username = <span style="color: rgb(7, 230, 63);">"sjjinahon@gmail.com" </span><br>
                                password = <span style="color: rgb(7, 230, 63);">"Dost@123"</span></p>
                                <p><span style="color: rgba(113, 116, 113, 0.979);"># Locator</span><br>
                                driver.get(website_link) <br>
                                username_field = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, <span style="color: rgb(7, 230, 63)">"username"))) </span><br>
                                password_field = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, <span style="color: rgb(7, 230, 63)">"password")))</span><br>
                                </p>
                                <p> <span style="color:rgba(113, 116, 113, 0.979);"># Input your credentials</span><br>
                                    username_field.send_keys(username)<br>
                                    time.sleep(1)<br>
                                    password_field.send_keys(password)<br><br>
                                    
                                    time.sleep(2)
                                    signin_button = WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.ID, <span style="color: rgb(7, 230, 63)">"login")))</span><br>
                                    signin_button.click()<br><br>
                                    
                                    success = WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.XPATH, <span style="color: rgb(7, 230, 63)">"//div[@class='flex justify-between']//span[contains(text(),'Applications')]")))</span><br>
                                    assert success.text == <span style="color: rgb(7, 230, 63)">"Applications"</span><br>
                                    print(<span style="color: rgb(7, 230, 63)">"Successful login")</span><br>
                                    
                                    time.sleep(3)
                          <div class="main-btn"><a href="#3">Next Script</a></div>
                      </div>
                    </div>
                    <div class="col-md-2">
                        <div class="right-image">
                          {{-- <img src="img/about_image.jpg" alt=""> --}}
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="3">
            <div class="content third-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="left-content">
                                                <h2>Assert Field Label and button name</h2>
                                                <p> <span style =  "color:gray;"># Test Cases 1 :  View System Name</span><br>
                                                <span style="color:orangered;">try</span><span style="color:  rgb(247, 252, 248);">:</span><br>
                                                <span style="padding-left: 20px;">system_name = driver.find_element(By.XPATH,<span style="color: rgb(7, 230, 63);"> "//h1[@class='font-brush text-center text-4xl lg:text-6xl text-shadow-sm text-heading-blue']")</span><br>
                                                <span style="color:orangered;padding-left: 20px;">if</span> system_name.text.strip() == <span style="color: rgb(7, 230, 63);"> "Balik Scientist Program Management Systems":</span><br>
                                                <span style="color:violet;padding-left: 40px;">print</span><span style="color: rgb(247, 252, 248);"> (</span><span style="color: rgb(7, 230, 63);">"Test Case 1 - Passed"</span><span style="color: rgb(247, 252, 248);">)</span><br>
                                                <span style="color:orangered;padding-left: 20px;">else:<br>
                                                <span style="color:violet;padding-left: 40px;">print</span><span style="color: rgb(247, 252, 248);"> (</span><span style="color: rgb(7, 230, 63);">"Test Case 1 - Failed: Display correct System Name"</span><span style="color: rgb(247, 252, 248);">)</span><br>
                                                <span style="color:orangered;">except </span>NoSuchElementException:<br>
                                                <span style="color:violet;;padding-left: 40px;">print</span><span style="color: rgb(247, 252, 248);"> (</span><span style="color: rgb(7, 230, 63);">"Test Case 1 - Failed: Display System Name"</span><span style="color: rgb(247, 252, 248);">)</span><br>
                                                    
                                                    
                                                <p> <span style =  "color:gray;">    # Test Cases 2: View Form Name</span><br>
                                                    try:<br>
                                                        form_name = driver.find_element(By.XPATH, "//h2[@class='text-gray-600']")<br>
                                                        if form_name.text.strip() == "Login Form":<br>
                                                            print("Test Case 2 - Passed ")<br>
                                                        else:<br>
                                                            print("Test Case 2 - Failed : Display correct Form Name")<br>
                                                    except NoSuchElementException:<br>
                                                        print("Test Case 2 - Failed: Display Form Name ")<br>
                                                    
                                                    # Test Cases 3: View field label name-Username<br>
                                                    try:<br>
                                                        username_field = driver.find_element(By.CSS_SELECTOR, "input[placeholder='Username']")<br>
                                                        placeholder_username = username_field.get_attribute ( "placeholder" )<br>
                                                        if placeholder_username.strip() == "Username":<br>
                                                            print("Test Case 3 - Passed")<br>
                                                        else:<br>
                                                    except NoSuchElementException:<br>
                                                        print("Test Case 3 - Failed: Display placeholder")<br>
                                                    
                                                    # Test Cases 4: View field label name-Password<br>
                                                    try:<br>
                                                        password_field = driver.find_element(By.XPATH, "//input[@id='password']")<br>
                                                        placeholder_password = password_field.get_attribute("placeholder")<br>
                                                        if placeholder_password.strip() == "Password":<br>
                                                            print("Test Case 4 - Passed")<br>
                                                        else:<br>
                                                            print(f"Test Case 4 - Failed: Expected placeholder name 'Password', but found'{placeholder_password}'")<br>
                                                    except NoSuchElementException:<br>
                                                        print("Test Case 4 - Failed: Display Field label name")<br>
                                                    
                                                    try:<br>
                                                        login_button=driver.find_element(By.ID, "login")<br>
                                                        login_text = login_button.text<br>
                                                        if login_text=="Login":<br>
                                                            print("Test Case 5 - Passed")<br>
                                                        else:<br>
                                                            print(f"Test Case 5 - Failed: Button name should 'Login', but the displayed is '{login_text}'")<br>
                                                    except NoSuchElementException:<br>
                                                        print("Button name is missing")<br>
                                                    
                                                    try:<br>
                                                        footer = driver.find_element(By.XPATH, "//img[@class='absolute bottom-12 right-0 h-80']")<br>
                                                        if footer.is_displayed():<br>
                                                            print("Test Case 6 - Passed")<br>
                                                        else:<br>
                                                            print("Test Case 6 - Failed: Footer is not displayed")<br>
                                                    except NoSuchElementException:<br>
                                                        print("Test Case 6 -  Failed: Footer is not found")</p><br>
                                                {{-- <div class="main-btn"><a href="#4">Continue Reading</a></div> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-image">
                                                {{-- <img src="img/first_service.jpg" alt="first service"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="second-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-0">
                                            <div class="left-image">
                                                {{-- <img src="img/second_service.jpg" alt="second service"> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="right-content">
                                                <h2>ASSERT COMPLETION and ERROR MESSAGE</h2>
                                                <p>Sed vitae felis in lorem mollis mollis eget in leo. Donec commodo, ex nec rutrum venenatis, nisi nisl malesuada magna, sed semper ipsum enim a ipsum. Aenean in ante vel mi molestie bibendum. Quisque sit amet lacus in diam pretium faucibus. Cras vel justo lorem.</p>
                                                <div class="main-btn"><a href="#4">Continue Reading</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="4">
            <div class="content fourth-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/first_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number One</h2>
                                            <p>Quisque sit amet lacus in diam pretium faucibus. Cras vel justo lorem.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/first_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/second_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Two</h2>
                                            <p>Donec eget dictum tellus. Curabitur a interdum diam. Nulla vestibulum porttitor porta.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/second_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/third_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Three</h2>
                                            <p>Cras varius dolor et augue fringilla, eu commodo sapien iaculis.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/third_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/fourth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Four</h2>
                                            <p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/fourth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/fifth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Fifth Item</h2>
                                            <p>Donec commodo, ex nec rutrum venenatis, nisi nisl malesuada magna.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/fifth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/sixth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Sixth Item</h2>
                                            <p>Maecenas dapibus neque sed nisl consectetur, id semper nisi egestas.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/sixth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/seventh_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Seven</h2>
                                            <p>Etiam aliquet, est id varius fringilla, eros libero pellentesque lectus.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/seventh_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/eight_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Eight</h2>
                                            <p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/eight_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/ninth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Nine</h2>
                                            <p>Orci varius natoque penatibus et magnis dis parturient montes.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/ninth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/fifth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Ten</h2>
                                            <p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/fifth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/first_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Eleventh Item</h2>
                                            <p>Cras varius dolor et augue fringilla, eu commodo sapien iaculis.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/first_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/second_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Twelvth Item</h2>
                                            <p>Etiam tincidunt magna ex, sit amet lobortis felis bibendum id.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/second_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="5">
            <div class="content fifth-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div id="map">
    <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                 <div class="col-md-12">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Now</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <div class="footer">
          <div class="content">
              <p>Copyright &copy; 2025 <a rel="nofollow" href="https://templatemo.com/tm-512-moonlight">Department of Science and Technology</a></p>
          </div>
        </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>

    @push('scripts')
    <script src="{{ asset('js/accordion.js') }}"></script>
    @endpush
</body>
</html>