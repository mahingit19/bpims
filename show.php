<?php

session_start();

if(isset($_GET['select'])){
    $select= $_GET['select'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pc.css" media="only screen and (min-width: 1260px) ">
    <link rel="stylesheet" href="tab.css" media="only screen and (min-width: 640px) and (max-width: 1260px) ">
    <link rel="stylesheet" href="mobile.css" media="only screen and (min-width: 320px) and (max-width: 640px) ">
    <title>Bogura Polytechnic Institute</title>
</head>
<body>
    <div class="wrap">
        <?php include "nav.php" ?>
    <?php
    if($select=='about'){
        echo <<<EOT
        <div class="about-short margintop">
                <h1>আমাদের সম্পর্কে</h1>
                <div class="image">
                    <img src="images/bpi-campus.jpg" alt="bpi-campus" id="bpi-campus">
                </div>
                <div class="text">
                    <p>
                    বগুড়া পলিটেকনিক ইন্সটিটিউট গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের শিক্ষা মন্ত্রনালয়ের কারিগরি শিক্ষা অধিদপ্তরাধীন একটি সরকারী শিক্ষা প্রতিষ্ঠান। এতে বাংলাদেশের কারিগরি শিক্ষা বোর্ড কর্তৃক ৪ বছরের ডিপ্লোমা-ইন-ইঞ্জিনিয়ারিং শিক্ষা কার্যক্রম পরিচালিত হয়। ঐতিহ্যবাহী বগুড়া শহরের প্রবেশ পথে বগুড়া পুলিশ লাইন্স-এর বিপরীতে শেরপুর রোডে শোভনীয় দালান কোঠায় সজ্জিত ঐতিহ্যবাহী বগুড়া পলিটেকনিক ইন্সটিটিউট অবস্থিত। ১৯৬২ সালে বগুড়া শহরের কেন্দ্রস্থলে ( সাত মাথায় ) তদানিন্তন এডওয়ার্ড ইন্ডাষ্ট্রিয়াল স্কুলের প্রাচীর ঘেরা ভবনে ইন্সটিটিউট এর কার্যক্রম শুরু হয়। সিভিল ও পাওয়ার টেকনোলজি নিয়েই যাত্রা শুরু করেছিল এই প্রতিষ্ঠানটি।
                    </p>
                    <p>
                    পরবর্তিতে কারিগরি শিক্ষার প্রসারতার লক্ষ্যে বগুড়া পলিটেকনিক ইন্সটিটিউট নামকরণে শেরপুর রোডের বর্তমান ভোকেশনাল টিচার্স ট্রেনিং ইন্সটিটিউট ক্যাম্পাসে বিভিন্ন টেকনোলজির সমন্বয়ে ইন্সটিটিউট স্থানান্তর করা হয় এবং ১৯৭৭ সালে বর্তমান ক্যাম্পাসে ইন্সটিটিউটের যাত্রা শুরু হয়। সরকারী সিদ্ধান্তের আলোকে পরবর্তীতে আরও টেকনোলজির সংজোযন করা হয়। বিশ্ব-ব্যাংকের আইডিএ ক্রেডিটের অধীনে নির্মিত হয় বর্তমান অবকাঠামো।
                    </p>
                    <p>
                    বগুড়া পলিটেকনিক ইন্সটিটিউট সবুজ ছায়া ঘেরা বৃক্ষরাজীতে পরিবেষ্ঠিত এবং ইন্সটিটিউটের একাডেমিক কাম প্রশাসনিক ভবনের সামনে আলোক সজ্জায় সজ্জিত ফোয়ারা সম্বলিত মনোমুগ্ধকর ফুলের বাগান অবস্থিত। ১৮ একর জমির উপর নির্মিত এ প্রতিষ্ঠানটিতে ৩ তলা সুরম্য ভবন সমূহের একাডেমিক কাম প্রশাসনিক ভবন, আবাসিক ভবন, ছাত্রাবাস, ছাত্রীনিবাস ইত্যাদির সন্নিবেশ ঘটেছে। ইন্সটিটিউটের প্রবেশ পথের গেটে, একাডেমিক কাম প্রশাসনিক ভবনের গেটে এবং ছাত্রাবাসসমূহ ও ছাত্রীনিবাসের প্রবেশের গেটসমূহে রয়েছে সুসজ্জিত তরুণ ও কর্তব্যনিষ্ঠ নিরাপত্তা প্রহরী, যারা সার্বক্ষনিক প্রয়োজনীয় যোগাযোগের মাধ্যমসহ নিরাপত্তা ও আগমনকারীদের তথ্য সংগ্রহ করেছে।
                    </p>
                </div>
        </div>
        EOT;
    }
    elseif($select=='mains'){
        echo <<<EOT
        <div class="content">
            <div class="mains">
                <table>
                <caption>প্রধানগণ</caption>
                    <tr>
                        <td><img src="images/Mohibul_Hasan_Chowdhury_Nowfel_m.p.jpg" alt="শিক্ষা মন্ত্রী"></td>
                        <td>
                            <h2>মাননীয় মন্ত্রী</h2>
                            <h1>মহিবুল হাসান চৌধুরী, <small>এম.পি.</small></h1>
                            <h3>বাংলাদেশ শিক্ষা মন্ত্রণালয়</h3>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="content">
            <div class="mains">
                <table>
                    <tr>
                        <td>
                            <h2>সচিব</h2>
                            <h1>ড. ফরিদ উদ্দিন আহমদ</h1>
                            <h3>বাংলাদেশ শিক্ষা মন্ত্রণালয়</h3>
                        </td>
                        <td><img src="images/secretary.jpg" alt="শিক্ষা মন্ত্রী"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="content">
            <div class="mains">
                <table>
                    <tr>
                        <td><img src="images/vprincipal.jpg" alt="শিক্ষা মন্ত্রী"></td>
                        <td>
                            <h2>অধ্যক্ষ</h2>
                            <h1>মোঃ আবু সাইম জাহান</h1>
                            <h3>অধ্যক্ষ (অতিরিক্ত দায়িত্ব)</h3>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </div>          
        EOT;
    }
    elseif($select=='staffs'){
        echo <<<EOT
        <h1 class="tmp-h1">টেকনোলজি সমূহ</h1>
        <div class="staffs">
            <a href="show.php?dept=computer&select=dept">
                <div class="blocks" onclick="">
                    <figure>
                        <img src="images/computer.png" alt="">
                        <figcaption>কম্পিউটার</figcaption>
                    </figure>
                </div>
            </a>
            <a href="show.php?dept=civil&select=dept">
            <div class="blocks">
                <figure>
                    <img src="images/engineers.png" alt="">
                    <figcaption>সিভিল</figcaption>
                </figure>
            </div>
            </a>
            <a href="show.php?dept=mechanical&select=dept">
            <div class="blocks">
                <figure>
                    <img src="images/mechanic.png" alt="">
                    <figcaption>মেকানিক্যাল</figcaption>
                </figure>
            </div>
            </a>
            <a href="show.php?dept=power&select=dept">
            <div class="blocks">
                <figure>
                    <img src="images/power-plant.png" alt="">
                    <figcaption>পাওয়ার</figcaption>
                </figure>
            </div>
            </a>
            <a href="show.php?dept=electrical&select=dept">
            <div class="blocks">
                <figure>
                    <img src="images/electrical-energy.png" alt="">
                    <figcaption>ইলেকট্রিক্যাল</figcaption>
                </figure>
            </div>
            </a>
            <a href="show.php?dept=electronics&select=dept">
            <div class="blocks">
                <figure>
                    <img src="images/responsive_2777154.png" alt="">
                    <figcaption>ইলেকট্রনিক্স</figcaption>
                </figure>
            </div>
            </a>
            <a href="show.php?dept=rac&select=dept">
            <div class="blocks">
                <figure>
                    <img src="images/service.png" alt="">
                    <figcaption>আর.এ.সি.</figcaption>
                </figure>
            </div>
            </a>
            <a href="show.php?dept=mining&select=dept">
            <div class="blocks">
                <figure>
                    <img src="images/mining.png" alt="">
                    <figcaption>মাইনিং</figcaption>
                </figure>
            </div>
            </a>
            <a href="show.php?dept=tourism&select=dept">
            <div class="blocks">
                <figure>
                    <img src="images/flight.png" alt="">
                    <figcaption>ট্যুরিজম</figcaption>
                </figure>
            </div>
            </a>
            <a href="show.php?dept=related subject&select=dept">
            <div class="blocks">
                <figure>
                    <img src="images/book-stack_3389081.png" alt="">
                    <figcaption>রিলেটেড সাবজেক্ট</figcaption>
                </figure>
            </div>
            </a>
        </div>
        EOT;
    }
    elseif($select=='notice'){
        include "notice.php";
    }
    elseif($select=='dept'){
        include "dept.php";
    }
    elseif($select=='result'){
        include "result.php";
    }
    ?>
    </div>
    <?php include "js.php" ?>
    <?php include "footer.php" ?>
</body>
</html>