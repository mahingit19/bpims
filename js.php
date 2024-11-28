<div class="stickynav" id="scroll">
    <div class="bpilogo">
        <h1>
        <a href="index.php"><img src="images/bpi-logo.png" alt="bpi-logo">
            বগুড়া পলিটেকনিক ইন্সটিটিউট</a>
        </h1>
    </div>
    <div class="links-icon" id="linksicon">
        <button><img src="images/menu.png" alt="menu"></button>
    </div>
    <div class="links" id="links">
        <ul>
            <li>
                <a href="index.php">হোমপেজ</a>
            </li>
            <li>
                <a href="javascript: void(0)">আমাদের সম্পর্কে</a>
                <div class="dropdown">
                    <a href="show.php?select=about">পরিচিতি</a>
                    <a href="show.php?select=mains">প্রধানগণ</a>
                    <a href="show.php?select=staffs">কর্মকর্তা ও কর্মচারী</a>
                </div>
            </li>
            <!-- <li>
                <a href="javascript: void(0)">শিক্ষা ও প্রশিক্ষণ</a>
                <div class="dropdown">
                    <a href="show.php?select=about">ডিপ্লোমা ইন ইঞ্জিনিয়ারিং</a>
                    <a href="show.php?select=about">রেড ক্রিসেন্ট</a>
                    <a href="show.php?select=about">রোভার স্কাউট</a>
                </div>
            </li> -->
            <li>
                <a href="javascript: void(0)">টেকনোলজি</a>
                <div class="dropdown">
                    <a href="show.php?dept=computer&select=dept">কম্পিউটার টেকনোলজি</a>
                    <a href="show.php?dept=civil&select=dept">সিভিল টেকনোলজি</a>
                    <a href="show.php?dept=mechanical&select=dept">মেকানিক্যাল টেকনোলজি</a>
                    <a href="show.php?dept=power&select=dept">পাওয়ার টেকনোলজি</a>
                    <a href="show.php?dept=electrical&select=dept">ইলেকট্রিক্যাল টেকনোলজি</a>
                    <a href="show.php?dept=electronics&select=dept">ইলেকট্রনিক্স টেকনোলজি</a>
                    <a href="show.php?dept=rac&select=dept">আর. এ. সি. টেকনোলজি</a>
                    <a href="show.php?dept=mining&select=dept">মাইনিং টেকনোলজি</a>
                    <a href="show.php?dept=tourism&select=dept">ট্যুরিজম টেকনোলজি</a>
                    <a href="show.php?dept=related subject&select=dept">রিলেটেড সাবজেক্ট</a>
                </div>
            </li>
            <li>
                <a href="show.php?select=notice&selectnotice=allnotice">নোটিশ</a>
            </li>
            <li>
                <a href="show.php?select=result">রেজাল্ট</a>
            </li>
            <!-- <li>
                <a href="javascript: void(0)">একাডেমিক</a>
                <div class="dropdown">
                    <a href="show.php?select=notice&selectnotice=allnotice">ক্লাস রুটিন</a>
                    <a href="show.php?select=notice&selectnotice=allnotice">পরীক্ষার রুটিন</a>
                </div>
            </li>
            
            <li>
                <a href="javascript: void(0)">গ্যালারি</a>
                <div class="dropdown ">
                    <a href="show.php?select=campg">ক্যাম্পাস</a>
                    <a href="show.php?select=rovsg">রোভার স্কাউট</a>
                    <a href="show.php?select=redcg">রেড ক্রিসেন্ট</a>
                </div>
            </li> -->
            <li class="login-button">
                <?php
                if(isset($_SESSION['uname']) && isset($_SESSION['upass'])){
                    // echo "<img src='' alt='' width='50px' height='50px'>";
                    echo "<a href=\"dash.php?select=dashboard\" >ড্যাশবোর্ড</a>";
                    echo <<<EOT
                    <div class="dropdown ">
                        <a href="dash.php?select=profile">
                        <span style="color:blue">প্রোফাইল</span>
                        </a>
                        <a href="logout.php">
                            <span style="color:red">লগ আউট</span>
                        </a>
                    </div>
                    EOT;
                }
                else{
                    echo "<a href=\"login.php\" >লগ ইন</a>";
                }
                ?>
            </li>
        </ul>
    </div>
</div>
<div class="topicon" id="topicon">
    <a href="#">উপরে যান</a> 
</div>

<script>
    window.onscroll = function() {stickynav()};

    var navbar = document.getElementById("scroll");

    var sticky = navbar.offsetTop;

    function stickynav() {
    if (window.pageYOffset > sticky) {
        document.getElementById("scroll").style.display = "block"
    } else if(window.pageYOffset == sticky) {
        document.getElementById("scroll").style.display = "none";
    }
    if (window.pageYOffset > sticky) {
        document.getElementById("topicon").style.display = "block";
    } else if(window.pageYOffset == sticky) {
        document.getElementById("topicon").style.display = "none";
    }
    }

    document.getElementById("linksicon").onclick = function() {onclick()};

    function onclick() {
        if (document.getElementById("links").style.display === "none") {
            document.getElementById("links").style.display = "block";
        } else {
            document.getElementById("links").style.display = "none";
        }
    }
</script>