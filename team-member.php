<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    html,
    body {
      min-height: 100%;
    }

    body {
      background: linear-gradient(#cddc39, #009688);
    }

    li {
      list-style: none;
    }

    a{
      color:black;
    }
    /* style member component */
    .list-members {
      background: #ffe501;
      width: 80%;
      margin: 4% auto;
      display: flex;
      flex-wrap: wrap;
    }

    .member {
      flex-basis: 50%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .member-image {
      width: 50%;
      height: 100%;
      cursor: pointer;
      overflow: hidden;
      position: relative;
    }

    .member-image img {
      width: 100%;
      height: 100%;
      transition: 1s;
    }

    .member-image:hover img {
      transform: scale(1.1);
    }

    .member-info {
      width: 50%;
      text-align: center;
    }

    .member-info p {
      margin: 20px 0;
    }


    /* style social link */
    .social-link .fab {
      width: 35px;
      height: 35px;
      line-height: 35px;
      border: 1px solid #000;
      margin: 0 7px;
      cursor: pointer;
      transition: transform .5s;
    }

    .social-link .fab:hover {
      background: #000;
      color: #ffe501;
      transform: translateY(-7px);
    }

    /* Membuat segitiga */
    .member-image::after {
      content: '';
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
      border-right: 15px solid #ffe501;
      position: absolute;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
    }


    /* Merubah posisi member-image dengan member-info */
    @media screen and (min-width: 771px) {

      .member:nth-child(4n+3) .member-info,
      .member:nth-child(4n+4) .member-info {
        order: 1;
      }

      .member:nth-child(4n+3) .member-image,
      .member:nth-child(4n+4) .member-image {
        order: 2;
      }

      /* Merubah posisi sigitiga pada baris genap */
      .member:nth-child(4n+3) .member-image::after,
      .member:nth-child(4n+4) .member-image::after {
        left: 0;
        right: auto;
        transform: translateY(-50%) rotateZ(180deg);
      }
    }


    /* Mobile Styles */
    @media screen and (max-width: 770px) {
      .list-members {
        width: 95%;
      }

      .member {
        flex-basis: 100%;
        font-size: 14px;
      }

      .social-link .fab {
        width: 30px;
        height: 30px;
        line-height: 30px;
      }

      .member:nth-child(even) .member-info {
        order: 1;
      }

      .member:nth-child(even) .member-image {
        order: 2;
      }

      /* Merubah posisi sigitiga elemen genap */
      .member:nth-child(even) .member-image::after {
        left: 0;
        right: auto;
        transform: translateY(-50%) rotateZ(180deg);
      }
    }
  </style>
    <link rel="icon" type="image/x-icon" href="Blood Any Time logo/1.png">
</head>

<body>
    
<?php include_once 'component/header.php'; ?>    
  <ul class="list-members">
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/chaitanya1.jpg">
      </div>
      <div class="member-info">
        <h3>Chaitanya Rai</h3>
        <p>Founder & CEO</p>
        <div class="social-link">
          <a href="https://github.com/chaitanyarai19" target="_blank"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/chaitanya-rai/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://twitter.com/Chaitanyarai19" target="_blank"><i class="fab fa-twitter"></i></a>
          <!--<a href="https://www.instagram.com/rai.chaitanya/" target="_blank"><i class="fab fa-instagram"></i></a>-->
        </div>
      </div>
    </li>
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/vedant.jpg">
      </div>
      <div class="member-info">
        <h3>Vedant Jain</h3>
        <p>Product Manager</p>
        <div class="social-link">
          <a href="https://github.com/vedant-jain03"><i class="fab fa-github"></i></a>
          <a href="https://twitter.com/vedantj_03"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/vedant-jain-781006145/"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/yashika.jpg">
      </div>
      <div class="member-info">
        <h3>Yashika Jotwani</h3>
        <p>Project Head Media</p>
        <div class="social-link">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/yashika_jotwani"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>

    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/manish.jpg">
      </div>
      <div class="member-info">
        <h3>Manish Shambhoo Sah</h3>
        <p>Full-Stack Engineer</p>
        <div class="social-link">
          <a href="https://github.com/Msah30012001"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/sahmanish/"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://twitter.com/msah74915"><i class="fab fa-twitter"></i></a>
          <!--<a href="https://www.instagram.com/msah_30012001/"><i class="fab fa-instagram"></i></a>-->
        </div>
      </div>
    </li>
    

    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/ankita.jpg">
      </div>
      <div class="member-info">
        <h3>Ankita Roy</h3>
        <p>Marketing Head</p>
        <div class="social-link">
          <a href="https://github.com/Ankitaroy122"><i class="fab fa-github"></i></a>
          <a href="https://twitter.com/ankiitaaaa"><i class="fab fa-twitter"></i></a>
          <!--<a href="https://instagram.com/ankiitaroy?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>-->
          <a href="https://www.linkedin.com/in/ankiitaroy"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    
           <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/ishween.jpg">
      </div>
      <div class="member-info">
        <h3>Ishween Khatri</h3>
        <p>Frontend Developer</p>
        <div class="social-link">
          <a href="https://github.com/ISHWEENKHATRI"><i class="fab fa-github"></i></a>
          <a href="https://instagram.com/ishweenkhatrii?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
          <!-- <a href="https://instagram.com/ishweenkhatrii?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a> -->
          <a href="https://www.linkedin.com/in/ishween-khatri-16116b214/"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>

        <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/shaanil.jpg">
      </div>
      <div class="member-info">
        <h3>Shaanil Khatri</h3>
        <p>Frontend Developer</p>
        <div class="social-link">
          <a href="#"><i class="fab fa-github"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    
          <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/yash.jpg">
      </div>
      <div class="member-info">
        <h3>Yashraj Pachori</h3>
        <p>Frontend Developer</p>
        <div class="social-link">
          <a href="https://github.com/yashrajpachori"><i class="fab fa-github"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/yashrajpachori/"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>


    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/agamya.jpg">
      </div>
      <div class="member-info">
        <h3>Agamya Likhitkar</h3>
        <p>Creative Writer</p>
        <div class="social-link">
          <a href="https://www.facebook.com/profile.php?id=100077857807587"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/mallika.jpg">
      </div>
      <div class="member-info">
        <h3>Mallika Daniel</h3>
        <p>Marketing</p>
        <div class="social-link">
          <a href="https://www.facebook.com/profile.php?id=100008247482028"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/MallikaDaniel?t=qEKALQ2uI-8TUkMEBsJY6A&s=09"><i class="fab fa-twitter"></i></a>
          <!-- <a href="https://www.instagram.com/mallika_daniel/"><i class="fab fa-instagram"></i></a> -->
          <a href="https://www.linkedin.com/in/mallika-daniel"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
 
  
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/ansh.jpg">
      </div>
      <div class="member-info">
        <h3>Ansh Raghuwanshi</h3>
        <p>Marketing</p>
        <div class="social-link">
          <a href="https://github.com/ansh2611"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/ansh-raghuwanshi-25bbaa244"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://instagram.com/_anshraghuwanshi"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </li>

    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/anuj.jpg">
      </div>
      <div class="member-info">
        <h3>Anuj Khatri</h3>
        <p>Marketing</p>
        <div class="social-link">
          <a href="https://www.facebook.com/anuj.khatri.980"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/anujkha15724184?t=n5wEaWGZAoBL6-auPuwDxQ&s=09"><i class="fab fa-twitter"></i></a>
          <!-- <a href="https://instagram.com/anujkha1ri?igshid0=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a> -->
          <a href="https://www.linkedin.com/in/anuj-khatri-8b0436225"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    
    
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/mayank.jpg">
      </div>
      <div class="member-info">
        <h3>Mayank Gupta</h3>
        <p>Backend Developer</p>
        <div class="social-link">
          <a href="https://github.com/gmayank10?tab=repositories"><i class="fab fa-github"></i></a>
          <a href="https://www.instagram.com/guptajimayank/"><i class="fab fa-instagram"></i></a>
          <a href="http://www.linkedin.com/in/mayank-gupta850"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
  
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/vidhi.jpg">
      </div>
      <div class="member-info">
        <h3>Vidhi Shrimali</h3>
        <p>Graphic Designer</p>
        <div class="social-link">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="https://instagram.com/vidhi_14__?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/vidhi-shrimali-a91164214"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/anoushka.jpg">
      </div>
      <div class="member-info">
        <h3>Anoushka Duggal</h3>
        <p>Research Writer</p>
        <div class="social-link">
          <a href="#"><i class="fab fa-github"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/anoushka-duggal"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>

    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/sahil.jpg">
      </div>
      <div class="member-info">
        <h3>Sahil Nigam</h3>
        <p>Frontend Developer</p>
        <div class="social-link">
          <a href="https://github.com/Sahil2315"><i class="fab fa-github"></i></a>
          <!-- <a href="https://www.facebook.com/profile.php?id=100009749019369"><i class="fab fa-facebook-f"></i></a> -->
          <a href="https://twitter.com/SahilNi04580887"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/sahil-nigam-496658238/"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/aditya.jpg">
      </div>
      <div class="member-info">
        <h3>Aditya Sharma</h3>
        <p>Creative Writer</p>
        <div class="social-link">
          <a href="https://twitter.com/mostlycrazyy?t=qt2Vq45FI3On1xjM4778aA&s=0"><i class="fab fa-twitter"></i></a>
          <a href="https://instagram.com/mostly.crazyy?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/aditya-sharma-7055a722b"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>

    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/anusha.jpg">
      </div>
      <div class="member-info">
        <h3>Anusha Satsangi</h3>
        <p>Backend Developer</p>
        <div class="social-link">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/anushasatsangi"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/jagrati.jpg">
      </div>
      <div class="member-info">
        <h3>Jagrati Yadav</h3>
        <p>Graphic Designer</p>
        <div class="social-link">
          <a href="#"><i class="fab fa-github"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/jagrati-yadav-9a3146218"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>


    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/guneet.jpg">
      </div>
      <div class="member-info">
        <h3>Guneet Kapoor</h3>
        <p>Creative Writer</p>
        <div class="social-link">
          <a href="https://github.com/GuneetKapoor"><i class="fab fa-github"></i></a>
          <!-- <a href="guneet100001@gmail.com"><i class="fab fa-google"></i></a> -->
          <a href="https://instagram.com/backlit_mouse?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/guneet-kapoor-b94118218"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/vedantagrawal.jpg">
      </div>
      <div class="member-info">
        <h3>Vedant Agrawal</h3>
        <p>Graphic Designer</p>
        <div class="social-link">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="https://instagram.com/vedagrawal_3_6_?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/vedant-agrawal-2150b120b"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>

    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/himanshi.jpg">
      </div>
      <div class="member-info">
        <h3>Himanshi Vishwakarma</h3>
        <p>Frontend Developer</p>
        <div class="social-link">
          <a href="https://www.facebook.com/himanshi.vishwakarma.1"><i class="fab fa-facebook-f"></i></a>
          <a href="https://github.com/Himanshi2304"><i class="fab fa-github"></i></a>
          <!-- <a href="https://www.instagram.com/_.himanshi._04/"><i class="fab fa-instagram"></i></a> -->
          <a href="https://www.linkedin.com/in/himanshi-vishwakarma-6704/"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/kratika.jpeg">
      </div>
      <div class="member-info">
        <h3>Kratika Soni</h3>
        <p>Backend Developer</p>
        <div class="social-link">
          <a href="#"><i class="fab fa-github"></i></a>
          <a href="https://twitter.com/kratikasoni19?t=Ol-t5nViPQqJRvDp8zUEGQ&s=09"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/kratika-soni-39760619b"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>

    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/samyak.jpg">
      </div>
      <div class="member-info">
        <h3>Samyak Jain</h3>
        <p>Marketing</p>
        <div class="social-link">
          <a href="https://twitter.com/Samyak1372?t=29ityNLl0tqnBIapDHZY4A&s=09"><i class="fab fa-twitter"></i></a>
          <a href="https://instagram.com/samyak_137?igshid=YmMyMTA2M2Y="><i class="fab fa-skype"></i></a>
          <a href="https://www.linkedin.com/in/samyak-jain-a4105a226"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/ashutosh.jpg">
      </div>
      <div class="member-info">
        <h3>Ashutosh Kosti</h3>
        <p>Frontend Developer</p>
        <div class="social-link">
          <a href="https://www.facebook.com/ashutosh.kosti.3/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://github.com/ashutoshkosti1919"><i class="fab fa-github"></i></a>
          <!-- <a href="https://www.instagram.com/a.s.h.u.t.o.s.h.19/"><i class="fab fa-instagram"></i></a> -->
          <a href="https://www.linkedin.com/in/ashutosh-kosti-/"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>

    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/paras.jpg">
      </div>
      <div class="member-info">
        <h3>Paras Patel</h3>
        <p>Marketing</p>
        <div class="social-link">
          <a href="https://www.facebook.com/profile.php?id=100038072122569"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/PARASPATEL794?t=BmRwrriOfDjXDVa1Y1_6Jg&s=0"><i class="fab fa-twitter"></i></a>
          <!-- <a href="https://www.instagram.com/invites/contact/?i=o5z4dgmcr6j1&utm_content=7okn12l"><i class="fab fa-instagram"></i></a> -->
          <a href="https://www.linkedin.com/in/paras-patel-1829621a0"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
    <li class="member">
      <div class="member-image">
        <img src="Blood Any Time logo/img/vaibhav.jpg">
      </div>
      <div class="member-info">
        <h3>Vaibhav Kushwaha</h3>
        <p>Frontend Developer</p>
        <div class="social-link">
          <a href="github.com/vaibhav-wolfvk"><i class="fab fa-github"></i></a>
          <a href="https://mobile.twitter.com/Vaibhav_wolfvk"><i class="fab fa-twitter"></i></a>
          <!-- <a href="https://www.instagram.com/vaibhav_wolfvk/"><i class="fab fa-instagram"></i></a> -->
          <a href="https://www.linkedin.com/in/vaibhav-kushwaha-9b2323208"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </li>
  </ul>

  <script src="https://kit.fontawesome.com/e8bbb49528.js"></script>

</body>

</html>