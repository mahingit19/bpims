<?php
session_start();
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
    <link rel="shortcut icon" href="images/bpi-logo.png" type="image/x-icon">
</head>
<body>
    <div class="wrap">
        <div class="hero">
            <div class="overlay"></div>
            <img src="images/bpi-hero.jpg" alt="bpi-campus" id="bpi-hero">
            <div class="heading">
                <h1>
                    <img src="images/bpi-logo.png" alt="bpi-logo" id="bpi-logo">
                    বগুড়া পলিটেকনিক ইন্সটিটিউট
                </h1>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="index.php">হোমপেজ</a>
                    </li>
                    <li>
                        <a href="javascript: void(0)">আমাদের সম্পর্কে</a>
                        <div class="dropdown">
                            <a href="show.php?select=about">পরিচিতি</a>
                            <a href="show.php?select=mains">প্রধানগণ</a>
                            <a href="show.php?select=staffs">কর্মচারী ও কর্মকর্তা</a>
                        </div>
                    </li>
                    <li>
                        <a href="javascript: void(0)">শিক্ষা ও প্রশিক্ষণ</a>
                        <div class="dropdown">
                            <a href="show.php?select=diploma">ডিপ্লোমা ইন ইঞ্জিনিয়ারিং</a>
                            <a href="show.php?select=redc">রেড ক্রিসেন্ট</a>
                            <a href="show.php?select=rovs">রোভার স্কাউট</a>
                        </div>
                    </li>
                    <li>
                        <a href="javascript: void(0)">টেকনোলজি</a>
                        <div class="dropdown">
                            <a href="show.php?select=ct">সিভিল টেকনোলজি</a>
                            <a href="show.php?select=mt">মেকানিক্যাল টেকনোলজি</a>
                            <a href="show.php?select=pt">পাওয়ার টেকনোলজি</a>
                            <a href="show.php?select=et">ইলেকট্রিক্যাল টেকনোলজি</a>
                            <a href="show.php?select=ent">ইলেকট্রনিক্স টেকনোলজি</a>
                            <a href="show.php?select=cmt">কম্পিউটার টেকনোলজি</a>
                            <a href="show.php?select=rac">আর. এ. সি. টেকনোলজি</a>
                            <a href="show.php?select=mint">মাইনিং টেকনোলজি</a>
                            <a href="show.php?select=tt">ট্যুরিজম টেকনোলজি</a>
                            <a href="show.php?select=rs">আর. এস. টেকনোলজি</a>
                        </div>
                    </li>
                    <li>
                        <a href="javascript: void(0)">একাডেমিক</a>
                        <div class="dropdown">
                            <a href="show.php?select=clasrou">ক্লাস রুটিন</a>
                            <a href="show.php?select=exmrou">পরীক্ষার রুটিন</a>
                        </div>
                    </li>
                    <li>
                        <a href="javascript: void(0)">রেজাল্ট</a>
                    </li>
                    <li>
                        <a href="javascript: void(0)">গ্যালারি</a>
                        <div class="dropdown ">
                            <a href="show.php?select=campg">ক্যাম্পাস</a>
                            <a href="show.php?select=rovsg">রোভার স্কাউট</a>
                            <a href="show.php?select=redcg">রেড ক্রিসেন্ট</a>
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
        <div class="content">
            <div class="headline">
                <p style="font-size: 22px">
                    <marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="" direction="" scrollamount="4">বগুড়া পলিটেকনিক ইন্সটিটিউটে আপনাদের সবাইকে স্বাগতম!</marquee>
                </p>
            </div>
            <div class="nmv">
                <div class="notice-board">
                    <h1 align="center">নোটিশ</h1>
                    <span>
                        <ul>
                            <?php
                            include "conn.php";
                            include "dbname.php";
                            include "selectdb.php";
                            $sql= "SELECT id,hline FROM notice ORDER BY id DESC";
                            $result= mysqli_query($conn,$sql);
                            while($print= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                $hline = $print["hline"];
                                $noticeid = $print["id"];
                                echo "<li>";
                                echo "<a href='show.php?select=notice&noticeid=$noticeid&selectnotice=notice'>".$hline."</a>";
                                echo "</li>";
                            }
                            ?>
                            <a class="showall" href="show.php?select=notice&selectnotice=allnotice">Show all notice</a>
                        </ul>
                        
                    </span>
                    
                </div>
                <div class="mv">
                    <h2>আমাদের দৃষ্টিঃ-</h2>
                    <p style="font-size: 20px;text-align: center;">
                        “ বিশ্ব বাজারের জন্য শ্রেষ্ঠ মানের আউটপুট। ”
                    </p>
                    <h2>আমাদের লক্ষ্যঃ-</h2>
                    <p style="font-size: 20px;">
                        “ বাংলাদেশের প্রযুক্তিগত এবং আর্থ সামাজিক উন্নয়নে অবদান রাখার জন্য ব্যাপকভাবে শিল্পের সঙ্গে মান সম্মত শিক্ষা ও প্রশিক্ষণ, সঠিক নির্দেশনা এবং পরামর্শ, সহযোগিতা প্রদানের মাধ্যমে বগুড়া পলিটেকনিক ইন্সটিটিউটকে স্বনির্ভরশীল প্রমাণ করা। ”
                    </p>
                    <h2>মূল্যবোধঃ-</h2>
                    <p style="font-size: 20px;text-align: center; font-weight: bold;">
                        নেতৃত্ব, ইনোভেশন, ত্যাগ, এক্সেলেন্স এবং প্রতিষ্ঠা।
                    </p>
                    <h2>জাতীয় সংগীত</h2>
                    <audio src="audio/bd_national_anthem.mp3" controls></audio>
                </div>
            </div>
            <div class="about-short">
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
        </div>
        <?php include "footer.php" ?>
    </div>
    <?php include "js.php" ?>
</body>
</html>