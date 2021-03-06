<?php 
session_start(); 
?>
        <!DOCTYPE html>

<html>

<head>
    <meta charset="utf=8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/item.css">
    <title>Astro-Com sklep internetowy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <script src="js/kategorie.js"></script>
    <script src="js/itemy.js"></script>
</head>

<body>
    <header>

        <div id="przyciski">
            <div class="button4">
                <svg style="width: 100%;height: 100%;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.1 15.79C11.772 14.51 11 12.35 11 10c0-3.5 1.875-6 5-6s5 2.5 5 6c0 2.35-.772 4.51-2.1 5.79.365.632.672 1.075.954 1.356.488.49 1.067.792 2.26 1.253l.384.147.395.154c.305.121.565.23.815.345 1.837.842 3.292 3.1 3.292 5.455a.5.5 0 0 1-.146.354C25.744 25.964 20.217 27 16 27s-9.743-1.036-10.854-2.146A.5.5 0 0 1 5 24.5c0-2.356 1.455-4.613 3.292-5.455.25-.114.51-.224.815-.345l.395-.154.384-.147c1.193-.46 1.772-.764 2.26-1.253.282-.281.589-.724.954-1.355zm.797.62c-.377.641-.707 1.107-1.043 1.444-.617.617-1.29.97-2.608 1.478l-.385.148-.385.15c-.29.115-.535.218-.768.325-1.423.652-2.611 2.434-2.702 4.314C7.212 25.091 12.238 26 16 26c3.762 0 8.788-.909 9.994-1.73-.09-1.881-1.279-3.663-2.702-4.315-.233-.107-.478-.21-.768-.325a40.036 40.036 0 0 0-.385-.15l-.385-.148c-1.318-.509-1.99-.861-2.608-1.478-.336-.337-.666-.803-1.043-1.444A3.99 3.99 0 0 1 16 17a3.99 3.99 0 0 1-2.103-.59zM16 5c-2.5 0-4 2-4 5 0 3.26 1.644 6 4 6s4-2.74 4-6c0-3-1.5-5-4-5z"
                        fill="#000" fill-rule="nonzero"></path>
                </svg>
                <div id="konto">
                <?php 
                   if(isset($_SESSION['user'])){
                    echo "<p>Zalogowany jako:".$_SESSION['user']."</p>";
                    echo "<form action='logout.php'>
                    <input style='background-color=red' type='submit' value='Wyloguj si??'>
                    </form>";
                   }else{
                       echo '<form action="login.php" method="post">
                       <div id="login">
                           <input type="text" name="emial" placeholder="e-mail">
                       </div>
                       <div id="password">
                           <input type="password" name="haslo" placeholder="Haslo">
                       </div>
                       <div id="logowanie">
                           <input type="submit" name="" value="Zaloguj sie">
                       </div>
                       <a href="rejestracja.php">
                           <div id="rejestracja">Stworz konto</div>
                       </a>
                   </form>';
                   }
                   
                   
                   
                   
                   
                   ?>
                </div>
            </div>
            <div class="button3">
                <svg style="width: 100%;height: 100%;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.958 27.489a1.5 1.5 0 0 1-1.69.702l-1.931-.517a1.5 1.5 0 1 1 .776-2.898l1.932.517a1.5 1.5 0 0 1 1.088 1.182 8.004 8.004 0 0 0 6.603-4.559A3.501 3.501 0 0 1 21 18.5v-2a3.5 3.5 0 0 1 1.905-3.116 6.502 6.502 0 0 0-12.81 0A3.5 3.5 0 0 1 12 16.5v2a3.5 3.5 0 0 1-7 0v-2c0-1.401.831-2.643 2.075-3.198a9.502 9.502 0 0 1 18.85 0A3.501 3.501 0 0 1 28 16.5v2a3.5 3.5 0 0 1-3.2 3.487 9.004 9.004 0 0 1-7.842 5.502zm8.005-13.786a8.501 8.501 0 0 0-16.926 0l-.03.324-.308.104A2.501 2.501 0 0 0 6 16.5v2a2.5 2.5 0 1 0 5 0v-2a2.5 2.5 0 0 0-1.628-2.344l-.367-.137.045-.389a7.501 7.501 0 0 1 14.9 0l.045.39-.367.136A2.5 2.5 0 0 0 22 16.5v2a2.5 2.5 0 1 0 5 0v-2c0-1.08-.692-2.029-1.699-2.37l-.308-.103-.03-.324zM13.854 25.742a.5.5 0 1 0-.259.966l1.932.517a.5.5 0 1 0 .259-.966l-1.932-.517z"
                        fill="#000" fill-rule="nonzero"></path>
                </svg>
                <div id="pomoc">
                    <p>Ul. Jaworowa 46, Czestochowa 42-200</p>
                    <p> +48 666 112 997</p>
                    <p> astro-com@x-kom.pl</p>
                    <p style="color:darkgrey;"> pon.-niedz. 8:00 - 19:30</p>
                </div>
            </div>
            <div class="button1">
                <svg style="width: 100%;height: 100%;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22 22a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm0-1a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm-10 1a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm0-1a3 3 0 1 1 0 6 3 3 0 0 1 0-6zM8.098 6H4.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .488.393l3.5 16a.5.5 0 1 1-.976.214L8.098 6zM9.5 9a.5.5 0 0 1 0-1h15a.5.5 0 0 1 .488.608l-2 9A.5.5 0 0 1 22.5 18h-11a.5.5 0 1 1 0-1h10.599l1.778-8H9.5zm2 13v-1H22v1H11.5z"
                        fill="#000" fill-rule="nonzero"></path>
                </svg>
                <div id="koszyk">
                    <div id="przedmiot">
                        <img src="test.jpg">
                        <p>Nazwa przedmiotu</p>
                        <span style="color: grey;">Cena</span>
                    </div>
                    <div id="przedmiot">
                        <img src="test.jpg">
                        <p>Nazwa przedmiotu</p>
                        <span style="color: grey;">Cena</span>
                    </div>
                    <div id="przedmiot">
                        <img src="test.jpg">
                        <p>Nazwa przedmiotu</p>
                        <span style="color: grey;">Cena</span>
                    </div>
                    <div id="przedmiot">
                        <img src="test.jpg">
                        <p>Nazwa przedmiotu</p>
                        <span style="color: grey;">Cena</span>
                    </div>
                    <div id="przedmiot">
                        <img src="test.jpg">
                        <p>Nazwa przedmiotu</p>
                        <span style="color: grey;">Cena</span>
                    </div>
                    <div id="przedmiot">
                        <img src="test.jpg">
                        <p>Nazwa przedmiotu</p>
                        <span style="color: grey;">Cena</span>
                    </div>
                    <div id="zakup">
                        Przejdz do koszyka
                    </div>

                </div>
            </div>
        </div>
        <div id="szukaj">
            <input type="search" placeholder="Szukaj">
            <div> <svg style="width: 60%;height: 60%;margin-top:10px; margin-left:20%;"
                    xmlns="http://www.w3.org/2000/svg" version="1.0" width="1244.000000pt" height="1280.000000pt"
                    viewBox="0 0 1244.000000 1280.000000" preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path
                            d="M4025 12789 c-1029 -79 -1969 -501 -2704 -1214 -985 -955 -1456 -2292 -1285 -3650 156 -1244 849 -2360 1899 -3059 193 -129 272 -175 470 -274 452 -227 906 -362 1445 -429 207 -25 763 -25 970 0 404 50 752 138 1115 281 251 98 600 283 819 433 l80 54 1075 -1073 c3835 -3827 3770 -3762 3828 -3795 189 -105 411 -75 563 77 148 148 180 359 84 553 -21 43 -462 488 -2432 2459 -2212 2213 -2404 2408 -2392 2425 8 10 40 47 70 83 714 836 1088 1927 1031 3011 -32 610 -165 1136 -420 1664 -169 349 -340 615 -592 920 -106 128 -395 417 -524 524 -687 569 -1463 900 -2336 996 -174 19 -598 27 -764 14z m780 -949 c777 -118 1453 -463 1982 -1014 516 -536 829 -1194 930 -1951 24 -186 24 -618 0 -810 -54 -416 -158 -758 -342 -1125 -297 -593 -779 -1101 -1360 -1432 -964 -549 -2153 -590 -3152 -108 -975 470 -1667 1364 -1873 2420 -37 192 -51 323 -57 555 -6 258 4 423 42 651 161 971 742 1831 1588 2348 453 278 935 434 1512 490 22 2 164 3 315 1 217 -3 304 -8 415 -25z" />
                    </g>
                </svg></div>
        </div>
        <a href="admin.php">
            <div id="logo">
                <svg style="width: 100%;height: 100%;" version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="472.000000pt" height="108.000000pt" viewBox="0 0 472.000000 108.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,108.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M272 918 l-222 -130 0 -252 0 -253 223 -129 222 -130 220 127 220
127 0 257 0 258 -180 104 c-99 57 -198 115 -220 128 l-40 23 -223 -130z m428
-183 c0 -57 -31 -146 -66 -193 -23 -29 -27 -44 -25 -83 3 -50 -8 -79 -42 -116
-29 -32 -47 -29 -47 6 0 91 -78 151 -194 151 -42 0 -43 4 -16 48 21 34 87 71
126 72 13 0 33 15 48 35 37 49 89 86 149 106 29 10 55 18 60 19 4 0 7 -20 7
-45z" />
                        <path d="M1453 798 c-5 -7 -49 -127 -96 -266 -93 -271 -92 -267 -26 -260 30 3
34 8 52 61 l19 57 98 0 99 0 18 -57 18 -58 48 -3 c26 -2 47 1 47 6 0 18 -171
506 -182 519 -13 17 -82 17 -95 1z m81 -211 c16 -50 31 -98 33 -104 3 -10 -14
-13 -67 -13 -65 0 -71 2 -65 18 3 9 18 56 33 105 15 48 29 87 32 87 3 0 18
-42 34 -93z" />
                        <path d="M2142 761 c-8 -4 -16 -26 -19 -49 -4 -28 -11 -42 -24 -45 -28 -7 -27
-67 1 -74 19 -5 20 -14 20 -137 0 -151 7 -169 70 -186 67 -18 105 2 93 48 -3
15 -15 22 -37 24 l-31 3 -3 123 -3 122 25 0 c29 0 50 31 41 60 -4 14 -15 20
-36 20 -28 0 -29 2 -29 44 0 52 -29 72 -68 47z" />
                        <path d="M1861 669 c-49 -11 -82 -48 -88 -101 -7 -61 15 -91 89 -125 62 -29
82 -59 57 -89 -13 -16 -66 -16 -116 1 -18 6 -25 2 -34 -19 -17 -37 1 -53 74
-67 106 -22 178 27 179 120 1 55 -16 78 -82 111 -70 35 -92 66 -64 87 13 10
33 13 66 8 40 -5 49 -3 57 14 6 11 11 25 11 31 0 23 -94 41 -149 29z" />
                        <path d="M2386 663 l-29 -5 7 -75 c3 -42 6 -130 6 -195 l0 -119 43 3 42 3 3
140 c2 128 4 141 23 158 12 9 36 17 55 17 28 0 35 5 40 25 10 39 -1 55 -40 55
-23 0 -41 -8 -57 -24 -23 -24 -23 -24 -34 -3 -11 23 -18 26 -59 20z" />
                        <path d="M2710 652 c-54 -29 -80 -88 -80 -187 0 -137 55 -199 175 -199 118 0
166 53 173 190 6 103 -17 158 -77 192 -50 28 -141 30 -191 4z m145 -76 c26
-26 41 -96 31 -150 -16 -82 -87 -114 -137 -60 -21 23 -24 35 -24 106 0 75 2
81 28 104 36 30 71 31 102 0z" />
                        <path d="M3390 653 c-47 -25 -77 -73 -86 -139 -19 -156 45 -247 175 -248 63 0
127 18 135 39 3 8 -3 24 -12 35 -15 18 -21 20 -45 11 -31 -12 -87 -14 -112 -5
-28 11 -45 60 -45 129 0 61 3 69 30 97 27 27 36 30 73 25 23 -3 51 -9 63 -12
15 -5 23 0 33 21 19 43 -4 58 -97 62 -59 2 -85 -1 -112 -15z" />
                        <path d="M3770 659 c-80 -32 -121 -158 -89 -274 40 -145 255 -166 326 -31 26
48 24 190 -3 236 -33 57 -77 80 -148 79 -34 0 -72 -5 -86 -10z m115 -65 c26
-10 46 -61 46 -118 2 -97 -22 -136 -81 -136 -47 0 -69 23 -78 86 -18 117 36
197 113 168z" />
                        <path d="M4141 661 l-24 -6 2 -185 c1 -101 4 -187 7 -192 3 -4 23 -8 45 -8
l39 0 0 139 0 139 32 27 c23 20 38 25 57 20 14 -4 28 -9 31 -12 3 -2 7 -73 10
-156 l5 -152 39 -3 c24 -2 42 2 47 10 5 7 9 72 9 144 0 118 2 133 20 149 23
21 75 24 93 6 8 -8 13 -62 15 -162 l4 -150 41 3 42 3 3 145 c3 161 -6 212 -44
236 -36 24 -126 15 -159 -16 l-25 -23 -27 27 c-25 26 -33 28 -85 24 -42 -3
-64 -10 -81 -26 l-24 -22 -11 25 c-12 26 -20 28 -61 16z" />
                    </g>
                </svg>

            </div>
        </a>
    </header>
    <div id="navbar">
        <nav>
            <ul>
                <li>
                    <a onclick="dodawanie()">
                        <div class="obrazek">
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.627 15.47a5 5 0 1 0-7.07-7.07l-2.122 2.12-2.121-2.12a5 5 0 0 0-7.071 7.07l9.192 9.193 9.192-9.192zm-9.192-6.363l1.414-1.415a6 6 0 0 1 8.486 8.486l-9.9 9.9-9.9-9.9a6 6 0 1 1 8.486-8.486l1.414 1.415z"
                                    fill="#000" fill-rule="nonzero"></path>
                            </svg>
                        </div>
                        <div class="kategoria">Dodawanie</div>
                        
                    </a>
                    <a onclick="zamowienia()">
                        <div class="obrazek">
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.627 15.47a5 5 0 1 0-7.07-7.07l-2.122 2.12-2.121-2.12a5 5 0 0 0-7.071 7.07l9.192 9.193 9.192-9.192zm-9.192-6.363l1.414-1.415a6 6 0 0 1 8.486 8.486l-9.9 9.9-9.9-9.9a6 6 0 1 1 8.486-8.486l1.414 1.415z"
                                    fill="#000" fill-rule="nonzero"></path>
                            </svg>
                        </div>
                        <div class="kategoria">Zam??wienia</div>
                        
                    </a>
                </li>
            </ul>

        </nav>
    </div>
    <main>
        <div id="polecane">
           
        </div>
    </main>
</body>

</html>