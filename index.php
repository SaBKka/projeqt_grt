<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/main.js" defer></script>
  <title>გამწვანება</title>
</head>
<body>
  <!--svg sprites-->
  <svg width="0" height="0" class="hidden">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" id="chevron-left-solid">
      <path d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" id="angle-right-solid">
      <path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="phone-solid (1)">
      <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path>
    </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" id="facebook-f-brands (1)">
        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" id="arrow-turn-up-solid">
       <path d="M342.6 182.6C336.4 188.9 328.2 192 319.1 192s-16.38-3.125-22.62-9.375L224 109.3V432c0 44.13-35.89 80-80 80H32c-17.67 0-32-14.31-32-32s14.33-32 32-32h112C152.8 448 160 440.8 160 432V109.3L86.62 182.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l127.1-128c12.5-12.5 32.75-12.5 45.25 0l128 128C355.1 149.9 355.1 170.1 342.6 182.6z"></path>
     </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="email">
       <path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"></path>
     </symbol>
     <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" id="work">
       <path d="M272 95.93c26.5 0 47.99-21.47 47.99-47.97S298.5 0 272 0C245.5 0 224 21.47 224 47.97S245.5 95.93 272 95.93zM209.7 357.3c-25.75-17.25-52.25-33.24-79.5-48.11L58.62 270.2L1.246 471.1c-4.875 16.1 4.1 34.74 22 39.62s34.63-4.998 39.5-21.99l36.63-128.1l60.63 40.37v78.86c0 17.62 14.38 31.99 32 31.99s32-14.37 32-31.99l.0022-95.93C224 373.2 218.6 363.2 209.7 357.3zM311.1 416c-13.88 0-25.95 8.863-30.33 21.86l-24.75 74.07h319.9l-101.9-206.3c-11.38-22.49-43.1-23.63-56.1-2.01l-31.89 54.21l-65.26-35.64l-24-121.2C288.1 161.3 263.2 127.7 227.1 109.7c-1-.4999-2.125-.625-3.125-1.125c-2.25-1.125-4.752-1.1-7.252-2.625C201.5 99.85 185.2 95.98 168.7 95.98H95.1c-9.25 0-18.05 4.061-24.18 10.93l-55.95 63.92c-.75 .9998-1.5 2.124-2.25 3.249c-8.875 13.1-3 32.87 11.63 40.74l336.6 184.3l-9.837 16.87H311.1zM105.9 204.1l-23.5-12.87l28.13-32.12h34.38L105.9 204.1zM199.5 256.1l34.9-41.28l13.5 67.61L199.5 256.1z"></path>
     </symbol>
     <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" id="ფოთოლი">
       <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"></path>
    </symbol>
  </svg>
  
  <!-- // end off svg sprites-->

  <header class="d-header">
    <div class="cta-box">
      <p>გაამწვანე</p>
      <p>ჯრტ</p>
    </div>
    <div class="top-bar">
    <div class="d-wrapper">
      <div class="text">
        <marquee behavior="10" direction="10">
          <P>აირჩიეთ ჯრტ ჩვენ ვზრუნავთ თქვენ გარემოზე</P>
        </marquee>
      </div>
      <div class="info">
        <div class="mobile">
          <svg class="icon"><use xlink:href="#phone-solid (1)"></use></svg>
          <p>599-91-65-66</p>
        </div>
        <div class="fb">
          <a href="https://www.facebook.com/%E1%83%92%E1%83%90%E1%83%9B%E1%83%AC%E1%83%95%E1%83%90%E1%83%9C%E1%83%94%E1%83%91%E1%83%90-809645209126205/">
            <svg class="icon"><use xlink:href="#facebook-f-brands (1)"></use></svg>
          </a>
          <p>დეტალებზე მოგვწერეთ</p>
        </div>
      </div>
    </div> <!-- // end off wrapper-->
    </div> <!-- // end off top-bar-->
    <div class="logo-nav">
      <div class="d-wrapper">
        <div class="logo">
        <a class="logo" href="index.html"><img src="svg/logo.svg"  width="100" alt="logo"></a>        
        </div>
        <nav class="main-nav">
          <div class="burger-menu">
            <div class="bars"></div>
            <div class="bars"></div>
            <div class="bars"></div>
          </div>
          <ul>
            <li><a href="#">მთავარი</a></li>
            <li><a href="#web_page">ჩვენს შესახებ</a></li>
            <li><a href="#de-about">გალერეა</a></li>
            <li><a href="#de-service">სერვისი</a></li>
            <li><a href="#de-contact">კონტაქტი</a></li>
          </ul>
        </nav>
      </div> <!-- // end off .d-wrapper-->
    </div> <!-- // end off .logo-nav-->
  </header>
   <main class="de-slide">
     <article class="d-slide-show">
      <div class="countdown_sheel"></div>
      <div id="slide_show">
        <div class="slider-wrapper">
          <div class="slider active">
            <p> ბუნებრივი და ნათესი ბალახი</p>
          </div>
          <div class="slider">
            <p>აირჩიეთ სანდო კომპანია</p>  
          </div>
          <div class="slider">
            <p>ჩვენ ვზრუნავთ თქვენ გარემოზე</p> 
          </div>
          <div class="slider">
           <p>გაამწვანე გარემო ჩვენ კომპანიასთან ერთად</p>  
          </div>
        </div>
        <div class="nav">
          <span class="control prev"> <svg class="icon"><use xlink:href="#chevron-left-solid"></use></svg></span>
          <span class="control next"> <svg class="icon"><use xlink:href="#angle-right-solid"></use></svg></span>
        </div>
     </div>
     </article>
     <article id="de-galary">
        <div class="galery_container">
          <div class="wrapper">
          <div class="galery_box">
            <img src="images/de-galery-small_img/1.jpg.png" alt="photo_1">
          </div>
          <div class="galery_box">
            <img src="images/de-galery/2.png" alt="photo_2">
          </div>
          <div class="galery_box">
            <img src="images/de-galery/3.png" alt="photo_3">
          </div>
        </div>
      </div>
    </article>
    
    <article id="de-about">
      <div class="wrapper">
        <div class="de_about_title">
          <h1 class="title">გალერეა</h1>
        </div>
        <div class="box_container">
          <div class="box">
            <img src="images/de-about/2.png" alt="1" >
            <h3>ესკიზი:1</h3>
            <div class="description">
              <!-- <p class="lorem">
               თუ გნებავთ თქვენი ეზოს გალამაზება ტუია მართლაც დაამშვენებს თქვენ ეზოს ჩვენ დაგეხმარებით მცენარეების შერჩევაში  
              </p> -->
            </div>
          </div>
          <div class="box">
            <img src="images/de-about/3.png" alt="2">
            <h3>ესკიზი:2</h3>
            <div class="description">
              <!-- <p class="lorem">
               თუ კიდევ არ იცით როგორი დიზაინით შეგიძლიათ ეზოს გამწვანება ჩვენ დაგეხმარებით 
              </p> -->
            </div>
          </div>
          <div class="box">
            <img src="images/de-about/slide_1.png" alt="3">
            <h3>ესკიზი:3</h3>
            <div class="description">
              <!-- <p class="lorem">
               ჩვენთან შეგიძლიათ ამოარჩიოთ მრავალი დიზაინი და გაამწვანოთ ეზო შენობა-ნაგებობა , რესტორნები და კვების ობიექტები   
             </p> -->
            </div>
          </div>
          <div class="box">
            <img src="images/de-about/5.png" alt="1" >
            <h3>ესკიზი:4</h3>
            <div class="description">
              <!-- <p class="lorem">
               ორიგინალურად გამწვანებული ეზო სავიზიტო ბარათია ჩვენი პროფესიონალებისგან შემდგარი გუნდის
              </p> -->
            </div>
          </div>
          <div class="box">
            <img src="images/11.JPG" alt="2">
            <h3>ესკიზი:5</h3>
            <div class="description">
              <p class="lorem">
                
              </p>
            </div>
          </div>
          <div class="box">
            <img src="images/14.jpg" alt="3">
            <h3>ესკიზი:6</h3>
            <!-- <div class="description">
              <p class="lorem">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Alias ipsa distinctio iusto maxime vel nemo neque quasi reprehenderit aperiam accusantium sequi,  -->
             </p>
            </div>
          </div>
        </div>
      </div> <!--end off wrapper-->
    </article> <!--end off de-about-->
    <article>
      <div id="web_page">
        <div class="wrapper">
        <header>
          <div class="title">
            <h2>ჩვენს შესახებ</h2>
          </div>
        </header>
        <div class="content">
          <div class="box">
            <div class="text-binder">
              <div class="text" style="background-color: rgba(0, 0, 0, 0.676); padding: 10px 20px;">
                <p>
                  მოგესალმებათ კომპანია „ ჯრტ “  
                </p>
                <p>
                  თუ ეზოს, შენობა-ნაგებობების, კეთილმოწყობა და გამწვანება გაქვთ მიზნად, - სწორ ადგილას აღმოჩნდით ! ჩვენ დაგეხმარებით თქვენი ჩანაფიქრების განხორციელებაში. 
                </p>
              </div>
              <div class="text_2" style="background-color: white; color: black; padding: 10px 10px;">
                <p >- ვინ ვართ ჩვენ და რას ვემსახურებით?</p>
                <p >ჩვენ ვართ სანდო კომპანია, რომელიც, უშუალოდ, ორიენტირებულია მომხმარებლის სურვილებზე, ჩვენ ვემსახურებით ნებისმიერი ტიპის ობიექტების გამწვანებასა და კეთილმოწყობას.</p>
                <p > - რას გთავაზობთ ჩვენი მომსახურების სერვისი?</p>
                <p >ჩვენ ვთავაზობთ მომხმარებლებს სწრაფ და ხარისხიან მომსახურებას საკმაოდ სოლიდურ თანხებში;</p>
                <p> - რას მიიღებთ ჩვენი არჩევის შემთხვევაში?</p>
                <p>სანდო ოპერატიულ შრომისმოყვარე და საქმეზე ორიენირებულ გუნდთან ერთად წარმატებულ საქმიან ურთიერთობას</p>
              </div>
            </div>
            <div class="svg_leafe">
              <svg><use xlink:href="#ფოთოლი"></use></svg>
            </div>
          </div>
          <div class="box_2">
            <video height="240" controls class="video">
              <source src="video/ჯრტ_მწვანე_მოლი.mp4" type="video/mp4">
              <source src="video/ჯრტ_მწვანე_მოლი.mp4" type="video/ogg">
            </video>
          </div>
        </div>
      </div> <!--end off wrapper-->
    </div> <!--end off web_page-->
    </article>
    <article>
      <div id="de-service">
        <div class="wrapper">
        <header>
          <h3 class="services_about">სერვისი</h3>
        </header>
        <div class="content">
          <div class="box">
            <p>მცენარეები</p>
            <div class="overlay">
              <div class="text">ყველანაირი მცენარე რაც თქვენი ობიექტის გასალამაზებლად დაგჭირდებათ</div>
            </div>
          </div>
          <div class="box">
            <p>სარწყავი სისტემები</p>
            <div class="overlay">
              <div class="text">უახლესი და თანამედროვე სარწყავი სისტემა</div>
            </div>
          </div>
          <div class="box">
            <p>მებაღის მომსახურება</p>
            <div class="overlay">
              <div class="text">პროფესიონალი მებაღის მომსახურება</div>
            </div>
          </div>
          <div class="box">
            <p>მხატვრული ბეტონი</p>
            <div class="overlay">
              <div class="text">მხატვრული ბეტონი რომლის დიზაინსაც ირჩევთ თქვენ</div>
            </div>
          </div>
          <div class="box">
            <p>მწვანე მოლის დაგება</p>
            <div class="overlay">
              <div class="text">25 წლიანი გამოცდილება და 20%-იანი ფასდაკლება მწვანე მოლზე კვადრატულობის მიხედვით</div>
            </div>
          </div>
          <div class="box">
            <p>ხე მცენარეთა გასხვლა ფორმირება</p>
            <div class="overlay">
              <div class="text">ხე-მცენარეებს მოვლა სჭირდებათ რაშიც ჩვენ დაგეხმარებით</div>
            </div>
          </div>
          
        </div>
      </div> <!--end off wrapper-->
    </div> <!--end off service-->
    <article>
      <div id="de-contact">
        <div class="wrapper">
        <header>
          <h3>კონტაქტი</h3>
        </header>
        <div class="content">
         <div class="register">
           <form action="information.php" method="post">
            
            <legend>მოგვწერეთ</legend>
            <div class="row">
              <label for="e_firt_name">თქვენი სახელი</label>
              <input type="text" name="first_name" id="e_firt_name">
            </div>
            <div class="row">
              <label for="e_info">სათაური</label>
              <input type="text" name="information" id="e_info">
            </div>
            <div class="row">
              <label for="e_number">მობილური:</label>
              <input type="number" name="number" id="e_number">
            </div>
            <div class="row">
              <label for="e_email">თქვენი ემაილი</label>
              <input type="email" name="email" id="e_email">
            </div>
            <div class="row">
              <textarea name="quetstion" id="you_question" cols="80" rows="7">დაგვისვით კითხვა</textarea>
            </div>
            <input type="submit" value="გაგზავნა" id="submit_cta_btn">
          </form>
         </div>
         <div class="info">
          <div class="work">
            <svg><use xlink:href="#work"></use></svg>
            <p>სამუშაო საათები ორშაბათი / შაბათი 11:00 დან 19:00 საათამდე</p>
          </div>
          <div class="mobile">
            <svg class="icon"><use xlink:href="#phone-solid (1)"></use></svg>
            <p>599-91-65-66</p>
          </div>
          <div class="email">
            <svg><use xlink:href="#email"></use></svg>
            <p>grtgreenmall@gmail.com</p>
          </div>
        </div>
        </div>
        
      </div> <!--end off wrapper-->
    </div> <!--end off service-->
    </article>
  </main>
  <footer>
    <dev id="de-footer">
      <div class="wrapper">
    <div class="col">
      <div class="logo"><img src="svg/logo.svg" alt="logo" width="100"></div>
      <p style="width: 150px; color: hsla(0, 0%, 100% , 0.7);" class="cta-text">პროფესიონალებისგან შემდგარი გუნდი</p>
      <div class="icon">
        <p class="logo_fb">
          <a href="https://www.facebook.com/%E1%83%92%E1%83%90%E1%83%9B%E1%83%AC%E1%83%95%E1%83%90%E1%83%9C%E1%83%94%E1%83%91%E1%83%90-809645209126205/">
            <svg class="icon" style="width:20px; height: 15px;"><use xlink:href="#facebook-f-brands (1)"></use></svg>
          </a>
        </p>
        <p class="logo_gmail">
          <svg><use xlink:href="#email"></use></svg>
        </p>
      </div>
    </div>
    <div class="col">
      <h4>სამუშაო საათები</h4>
      <p>ორშაბათი / შაბათი 11:00 - 19:00</p>
    </div>
    <div class="col service">
        <h4>სერვისი</h4>
        <p>მწვანე მოლის დაგება</p>
        <p>სარწყავი სისტემები</p>
        <p>მებაღის მომსახურება</p>
        <p>ეზოებისა და ოფისების გამწვანება-მოწყობა</p>
        <p>ხე მცენარეთა გასხვლა ფორმირება</p>
      </div>
      <div class="col">
        <h4>კონტაქტი</h4>
        <p class="mobile">599-91-65-66</p>
      </div>
      </div> <!--end off wrapper-->
    </dev> <!--end off de-footer-->
    <div class="footer-copr-right">
      <div class="wrapper">
        <p>@2022 ყველა უფლება დაცულია</p>
        <a href="#" id="go-up">მთავარი</a> 
      </div>
    </div>

  </footer>
  
</body>
</html>
