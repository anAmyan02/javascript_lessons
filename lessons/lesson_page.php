<?php
session_start(); 

if(!isset($_SESSION['username'])) {
    header("Location: ../login/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="lesson_page.css">
    <title>lesson</title>

</head>
<body>
    <!-- main navbar -->
    <div class="nav">
        <img class="js-logo" src="../images/JS_logo.png" />
            <a class="links main-page" href="../main/index.php">Գլխավոր</a href=""> 
            <a class="links" style="left: 550px;" href="../testing_rules/testing_rules.html ">Թեստեր</a href="">
            <a class="links" style="left: 750px;" href="../about_us/about_us.html">Մեր մասին</a href="">
            <img class="earth-icon" src="../images/icons8-earth-50.png" />
            <div class="earth-text">AM</div>
            <div class="nav-line"></div>
            <div style="width: 36px; height: 39px; left: 1130px; top: 24px; position: absolute">
                <i class="fa-solid fa-magnifying-glass search-icon" style="color: #fafafa;"></i>
            </div>
            <div class = "mode">
                <img src="../images/moon.png" class="sun-icon" alt="">
            </div>            
            <div class = "open-user"><i class="fa-regular fa-user" style="color: #fcfcfc;"></i></div>
            <!-- user window open -->
            <div class="user-window" style = "display: none">
                <img class="tringle-icon" src="../images/icons8-triangle-40.png" alt="" srcset="">
                <div class = "user"><i class="fa-regular fa-user" style="color: #fcfcfc;"></i></div>

                <p class="user-name"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></p>
                <span>120 <img src="../images/icons8-star-96.png" alt="" srcset=""></span>
                <button class="log-out-user">Դուրս գալ</button>
                <i class="fa-solid fa-gears settings-icon" style="color: #ffffff;"></i>
            </div>
                   
    </div>  

    <img class="bg-image" src="../images/lesson-page/lesson_page_bg.jpg" />

    <!-- left navbar -->
    <div class="left-navbar-container">
        <div class="left-navbar-container-bground"></div>
        <div class="left-navbar">
            <a href="#" style="top: 30px; ">Ներածություն</a>
            <p class="left-navbar-title">Գլուխ</p>
            <p class="left-navbar-title" style="top: 61px;">Գրականություն</p>
            <a href="#" style="top: 101px;">Ինչ է JavaScript-ը</a>
            <a href="#second" style="top: 140px;">Ի՞նչ կարող է անել <br/>JavaScript-ը բրաուզերում:</a>
            <a href="#third" style="top: 203px;">Ի՞նչ ՉԻ ԿԱՐՈՂ անել <br/>JavaScript-ը բրաուզերում:</a>
            <a href="#fourth" style="top: 270px;">Ի՞նչն է JavaScript-ին <br/>դարձնում յուրահատուկ։</a>
            <a href="#fifth" style="top: 340px;">JavaScript-ի վրա<br/>հիմնված լեզուներ</a>
            <a href="#fifth" style="top: 396px;">Ամփոփում</a>
            <a href="#sixth" style="top: 441px;">Մեկնաբանություններ</a>
        </div>
    </div>

    <!-- second navbar -->
    <div class="second-navbar-container">
        <div class="second-navbar">
            <div class="second-navbar-bg"></div>
            <div class="second-navbar-address">
                <img  class="home-icon" src="../images/lesson-page/icons8-home-500.png" />
                <img class="arrow-icon" style="padding-left: 20px;" src="../images/lesson-page/icons8-arrow-100.png" alt="" srcset="">
                <div class="second-navbar-head">JavaScript լեզու</div>
                <img class="arrow-icon" style="padding-left: 150px;" src="../images/lesson-page/icons8-arrow-100.png" alt="" srcset="">
                <div class="second-navbar-chapter">Ներածություն</div>
            </div>
            <div class="second-navbar-date">
                <img class="calendar-icon" src="../images/lesson-page/icons8-calendar-100.png" />
                <div class="date">Հոկտեմբեր 22, 2023</div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="info-container" style=" top: 143px; ">
        <h1 class="info-title">JavaScript-ի ներածություն</h1>
        <div class="info-box">
            <div class="info" style="top: 55px;">Եկեք տեսնենք, ինչ յուրահատկություններ կան JavaScript-ում, ինչ կարող ենք անել դրա օգնությամբ և ինչ այլ տեխնոլոգիաններ կարող են աշխատել JAvaScript-ի հետ։</div>
            <div class="part-title">Ինչ է JavaScript-ը</div>
            <div class="info" style="top: 178px;">Ի սկզբանե JavaScript-ը ստեղծվել էր client-side scripting language, որը նախատեսված էր մեր վեբ կայքերը ավելի ինտերակտիվ դարձնելու համար։<br/><br/>Այս լեզվով գրված ծրագրերը կոչվում են script: Այն կարելի է գրել անմիջապես HTML-կոդում։ Բրաուզերը հեշտությամբ կարողանում է կարդալ JavaScript կոդը։<br/><br/>Այս առումով JavaScript-ը շատ տարբերվում է Java կոչվող մեկ այլ լեզվից:</div>
        </div>

        <div class="i-box">
            <div class="first-i-box">
                <img class="i-icon" src="../images/lesson-page/icons8-i-67.png" />
                <div class="first-i-box-title">Ինչու՞ է այն կոչվում Java Script</div>
                <div class="first-i-box-info">Երբ ստեղծվել է JavaScript-ը,այն ի սկզբանե ունեցել է մեկ այլ անվանում՝ &lt;&lt;LiveScript&gt;&gt;: Բայց այդ ժամանակ Java-ն եղել է շատ հայտնի, այդ իսկ պատճառով որոշվել է, որ նոր լեզուն որպես Java-ի «փոքր եղբայր» անվանելը կօգնի:</div>
            </div>
            <div class="second-i-box">Բայց քանի որ JavaScript-ը զարգանում էր, այն դարձավ ամբողջովին անկախ լեզու՝ իր յուրահատկությամբ, որը կոչվում է ECMAScript, և այժմ ընդհանրապես կապ չունի Java-ի հետ:</div>
        </div>
        <div class="info-box" style="top: 856px; height: 450px;">
            <div style="width: 702px; left: 24px; top: 15px; position: absolute">
                <span class="info2">Այսօր JavaScript-ը կարող է իրականացվել ոչ միայն բրաուզերում, այլ նաև սերվերի վրա կամ ցանկացած սարքի վրա, որտեղ տեղադրված է հատուկ ծրագիր, որը կոչվում է JavaScript շարժիչ (
                    <u>the JavaScript engine</u>):
                    <br/><br/>Բրաուզերն ունի ներկառուցված շարժիչ, որը երբեմն կոչվում է «JavaScript վիրտուալ մեքենա»:</span>
            </div>
            
            <div style="width: 702px; left: 24px; top: 172px; position: absolute">
                <span class="info2">Տարբեր շարժիչներ ունեն տարբեր «կոդային անուններ»: Օրինակ`<br/></span>
                <span class="info2">
                    <ul>
                        <li>V8 - Chrome-ում, Opera-ում, Edge-ում</li>
                        <li>SpiderMonkey - FireFox-ում</li>
                        <li>...Կան այլ ծածկանուններ, ինչպիսիք են «Chakra» IE-ի համար, «JavaScriptCore», «Nitro» և «SquirrelFish» Safari-ի համար և այլն:</li>
                    </ul>
                </span>
                <span class="info2">Վերոնշյալ տերմինները օգտակար է հիշել, քանի որ դրանք օգտագործվում են ծրագրավորողների հոդվածներում ինտերնետում: Մենք էլ դրանք կօգտագործենք։ Օրինակ, եթե «X ֆունկցիան աջակցվում է V8-ի կողմից», ապա այն հավանաբար աշխատում է Chrome-ում, Opera-ում և Edge-ում:</span>
            </div>
        </div>

        <div class="i-box" style="top: 1346px;">
            <div class="second-i-box" style="left: 55px; top: 190px;">Շարժիչը կիրառում է օպտիմալացումներ գործընթացի յուրաքանչյուր փուլում: Այն նույնիսկ դիտարկում է կոմպիլացված script-ի կատարումը, վերլուծում է դրա միջով անցնող տվյալները և հետագայում օպտիմիզացնում է մեքենայի կոդը՝ հիմնվելով այդ ամենի վրա։</div>
            <div class="first-i-box" style="width: 460px; height: 310px; left: 409px; top: 0px; position: absolute; z-index: 1;">
                
                <div  class="first-i-box-title" style="left: 70px; top: 20.64px;">Ինչպե՞ս են աշխատում շարժիչները:</div>
                <div class="first-i-box-info" style="left: 40px; top: 90px;">
                    <span class="second-i-box-info" >Շարժիչները բարդ են. Բայց հիմունքները պարզ են.<br/></span>
                    <ul>
                        <li>Շարժիչը (ներկառուցված, եթե դա բրաուզեր է) կարդում է («վերլուծում») script-ը,</li>
                        <li>Այնուհետև այն փոխակերպում է («կազմում») script մեքենայի կոդի,</li>
                        <li>Եվ հետո մեքենայի կոդը բավականին արագ աշխատում է,</li>
                    </ul>
                </div>
                <img style="width: 28px; height: 29.62px; left: 29px; top: 18.52px; position: absolute" src="../images/lesson-page/icons8-i-67.png"/>
            </div>
        </div>

        <div id="second" class="second-title">Ի՞նչ կարող է անել բրաուզերում ներկառուցված JavaScript-ը</div>

            <div class="min-info-container">
                <div  style="width: 411px; left: 20px; top: 10px; position: absolute; color: black; font-size: 18px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word; border-radius: 15px; border: 1px black solid;padding: 15px;">Ժամանակակից JavaScript-ը «անվտանգ» ծրագրավորման լեզու է: Այն չի ապահովում ցածր մակարդակի հիշողություն կամ պրոցեսորի հասանելիություն, քանի որ այն ի սկզբանե ստեղծվել է բրաուզերների համար, որոնք դա չեն պահանջում:</div>
            </div>
            <div class="min-info-container" style="left: 507px; top: 2105px;">
                <div style="width: 423px; left: 37px; top: 5px; position: absolute; color: black; font-size: 18px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word;border-radius: 15px; border: 1px black solid;padding: 15px;">JavaScript-ի հնարավորությունները մեծապես կախված են այն միջավայրից, որտեղ այն աշխատում է: Օրինակ, Node.js-ն աջակցում է գործառույթներ, որոնք թույլ են տալիս JavaScript-ին կարդալ/գրել կամայական ֆայլեր, կատարել ցանցային հարցումներ և այլն:</div>
            </div>
            <div class="min-info-container" style="left: 175px; top: 2275px;">
                <div style="width: 423px; left: 9px; position: absolute; color: black; font-size: 18px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word;border-radius: 15px; border: 1px black solid;padding: 15px; padding-right: 0px;">Բրաուզերում JavaScript-ը կարող է անել ամեն ինչ՝ կապված վեբ էջերի մանիպուլյացիայի, օգտագործողի և վեբ սերվերի հետ շփվելու հետ:
            </div>
        </div>
        <div style="width: 395px; left: 469px; top: 2436px; position: absolute; color: black; font-size: 18px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word;border-radius: 15px; border: 1px black solid;padding: 15px;">Օրինակ, բրաուզերում ներկառուցված JavaScript-ը կարող է.</div>
        <div class="arrows-box">
            <div class="arrows-line"></div>
            <img class="arrow-icon-right" style="padding-top: 80px;" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset="">
            <img class="arrow-icon-right" style="padding-top: 85px;" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset="">
            <img class="arrow-icon-right" style="padding-top: 100px;" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset="">
            <img class="arrow-icon-right" style="padding-top: 105px;" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset="">
            <img class="arrow-icon-right" style="padding-top: 78.7px;" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset="">
        </div>
        
        <div class="min-info-box" style="top: 2589px; ">Էջին ավելացնել նոր HTML, փոխել առկա բովանդակությունը, փոխել style-ը:</div>
        <div class="min-info-box" style="top: 3008px;">Ստանալ և տեղադրել cookie-ներ, հարցեր տալ այցելուներին, ցուցադրել հաղորդագրություններ:</div>
        <div class="min-info-box" style="top: 3158px;">Հիշել օգտատիրոջ տվյալները («ժամանակավոր պահեստավորմամբ»):</div>
        <div class="min-info-box" style="width: 473px; top: 2858px; left: 260px;">Ցանցով հարցումներ ուղարկել հեռավոր սերվերներին, վերբեռնել և ներբեռնել ֆայլեր (այսպես կոչված AJAX և COMET տեխնոլոգիաներ):</div>
        <div class="min-info-box" style="width: 462px; top: 2703px; left: 270px;">Արձագանքել օգտատիրոջ գործողություններին, մկնիկի սեղմումներին, ցուցիչի շարժումներին, ստեղնաշարի հարվածներին:</div>

        <div id="third" class="second-title"  style="top: 3305px;">
            Ի՞նչ <FONT COLOR="#DD0A0A">ՉԻ ԿԱՐՈՂ </FONT>անել բրաուզերում ներկառուցված JavaScript-ը
        </div>

        <div class="red-info-box" style="border: 1px black solid;">Բրաուզերում JavaScript-ի հնարավորությունները սահմանափակ են՝ օգտատիրոջ անվտանգությունն ապահովելու համար: Նպատակն է կանխել վնասակար վեբ էջի մուտքը մասնավոր տեղեկատվության կամ վնաս հասցնելու օգտատերերի տվյալներին:</div>
        <div class="red-info-box" style="width: 283px; left: 732px; top: 3498px; background-color: white;"><b>Նման սահմանափակումների օրինակները ներառում են.</b></div>
        <div class="red-info-box" style="width: 537px; left: 311px; top: 3597px;">Վեբ էջի JavaScript-ը չի կարող կամայական ֆայլեր կարդալ/գրել կոշտ սկավառակի վրա, պատճենել դրանք կամ ծրագրեր իրականացնել: Այն չունի անմիջական մուտք դեպի ՕՀ(օպերացիոն համակարգ)-ի գործառույթներ:<br/></div>
        <div style="left: 792px; top: 3727px; position: absolute">
            <div style="width: 288px; height: 0px; left: 47.50px; top: 0px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; border: 3px black solid"></div>
            <img class="arrow-icon-right" style="padding-top: 100px" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset=""><br>
            <img class="arrow-icon-right" style="padding-top: 120px" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset="">
        </div>
        <div class="text-box">Ժամանակակից բրաուզերները թույլ են տալիս JS-ին աշխատել ֆայլերի հետ, սակայն մուտքը սահմանափակ է և տրամադրվում է միայն այն դեպքում, երբ օգտատերը որոշակի գործողություններ կատարի, օրինակ՝ <br/>ֆայլը «գցելով» բրաուզերի պատուհանը կամ ընտրելով այն՝ օգտագործելով &lt;&lt;input&gt;&gt; թեգը:</div>
        <div class="text-box" style="top: 3956px;"> Գոյություն ունեն տեսախցիկի/խոսափողի և այլ սարքերի հետ փոխազդելու եղանակներ, սակայն դրանք պահանջում են օգտատիրոջ հստակ ույլտվություն: Այսպիսով, JavaScript-ով միացված էջը չի կարող գաղտնի կերպով միացնել վեբ-տեսախցիկը, վերահսկել դրա շրջակայքը և տեղեկատվություն ուղարկել NSA-ին:</div>
        <div class="red-info-box" style="width: 537px; left: 311px; top: 4141px;">Տարբեր ներդիրներ/պատուհաններ ընդհանրապես չգիտեն միմյանց մասին: Երբեմն, օրինակ, երբ մի պատուհան օգտագործում է JavaScript-ը՝ մյուսը բացելու համար: Բայց նույնիսկ այն դեպքում, JavaScript-ը մի էջից կարող է չկարողանալ մուտք գործել մեկ այլ էջ, եթե դրանք գալիս են տարբեր կայքերից (այլ դոմենից, արձանագրությունից կամ պորտից):</div>       
        <div class="text-box" style="top: 4376px;">Սա կոչվում է նույն ծագման քաղաքականություն: Այս խնդիրը շրջանցելու համար երկու էջերն էլ պետք է համաձայնեն տվյալների փոխանակմանը և պարունակեն հատուկ JavaScript կոդ, որը կարգավորում է դրանք: Մենք այս թեմային կանդրադառնանք ձեռնարկում:</div>
        <div class="text-box" style="top: 4556px;">Այս սահմանափակումը, կրկին, ստեղծված է օգտագործողի անվտանգության համար: Էջը, որը օգտատերը բացել է http://anysite.com-ից, չպետք է կարողանա, http://gmail.com օրինակ, մուտք գործել բրաուզերի մեկ այլ ներդիր URL-ով և այնտեղից տեղեկություն գողանալ։</div>
        <div class="red-info-box" style="width: 600px; height: 600px;top: 4751px; left: 250px;">
            <div style="text-align: start;" >JavaScript-ը կարող է հեշտությամբ հաղորդակցվել ցանցի միջոցով այն սերվերի հետ, որտեղից եկել է ընթացիկ էջը: Բայց այլ կայքերից/տիրույթներից տվյալներ ստանալու նրա հնարավորությունը սահմանափակ է: Թեև դա հնարավոր է, այն պահանջում է բացահայտ համաձայնություն (HTTP) մյուս կողմից: Եվս մեկ անգամ սա անվտանգության սահմանափակում է:</div>
            <img style="width: 500px; padding-left: 8%; padding-top: 3%;" src="../images/lesson-page/Screenshot1.png" alt="" srcset="">
        </div> 

        <div style="left: 792px; top: 4343px; position: absolute">
            <div class="black-line"></div>
            <img class="arrow-icon-right" style="padding-top: 80px" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset=""><br>
            <img class="arrow-icon-right" style="padding-top: 120px" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset="">
        </div>
       
        <div style="width: 47.50px; height: 1268px; left: 901px; top: 3579px; position: absolute">
            <div style="width: 1259px; height: 0px; left: 47.50px; top: 0px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; border: 3px #FF0000 solid"></div>
            <img class="arrow-icon-right" style="padding-top: 60px" src="../images/lesson-page/icons8-red-arrow-100.png" alt="" srcset=""><br>
            <img class="arrow-icon-right" style="padding-top: 540px" src="../images/lesson-page/icons8-red-arrow-100.png" alt="" srcset=""><br>
            <img class="arrow-icon-right" style="padding-top: 540px" src="../images/lesson-page/icons8-red-arrow-100.png" alt="" srcset=""><br>
        </div>

        <div id="fourth" class="second-title"  style="top: 5450px;">
            <div>Ի՞նչն է JavaScript-ին դարձնում յուրահատուկ</div>
        </div>
        
        <div class="text-box" style="top: 5530px;left: 127px;">Նման սահմանափակումները չեն կիրառվում, եթե JavaScript-ն օգտագործվում է բրաուզերից դուրս, օրինակ՝ սերվերի վրա: Ժամանակակից բրաուզերները տրամադրում են պլագիններ/ընդլայնումներ, որոնք թույլ են տալիս պահանջել լրացուցիչ թույլտվություններ`</div>
        <div class="text-box" style="left: 260px; top: 5720px;">Ամբողջական ինտեգրում HTML/CSS-ի հետ:<br/>Թույլ է տալիս վեբ հավելվածներն դարձնել ավելի դինամիկ <br/>Բոլոր հիմնական բրաուզերների կողմից միացված է լռելյայն(default):</div>
        <div style="width: 94px; height: 112.37px; left: 210px; top: 5659px; position: absolute">
            <div style="width: 112.37px; height: 0px; left: 0px; top: 0px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; border: 2px black solid"></div>
            <img class="arrow-icon-right" style="padding-top: 93px; position: relative; left: -4.8px;" src="../images/lesson-page/icons8-arrow-100.png" alt="" srcset="">
        </div>
        <div id="fifth" class="second-title"  style="top: 5890px;">
            <div>JavaScript-ի վրա հիմնված լեզուներ</div>
        </div>
        <div class="text-box" style="left: 170px; top: 5988px;">Քանի որ բրաուզերն անմիջական կապ ունի  միայն JavaScriptի հետ, բայց երբեմն պետք է լինում այլ լեզուների կիրառություն, վերջերս շատ նոր լեզուներ են հայտնվել, որոնք փոխակերպվում են JavaScript-ի, նախքան բրաուզերում գործարկվելը:<br/><br/>Նման լեզուների օրինակներ.</div>

        <div style="height: 137.47px; left: 264px; top: 6212.34px; position: absolute">
            <img class="script-icon" src="../images/lesson-page/icons8-coffeescript.png" />
            <div class="script-icon-name">CoffeeScript</div>
        </div>
        <div style="width: 105px; height: 142.41px; left: 268px; top: 6443.76px; position: absolute">
            <div class="script-icon-name" style="top: 118.68px; left: 10px;">TypeScript</div>
            <img class="script-icon" src="../images/lesson-page/icons8-typescript-500.png" />
        </div>
        <div style="width: 88px; height: 137.47px; left: 276px; top: 6680.12px; position: absolute">
            <div class="script-icon-name" style="top: 113.73px; left: 35px;">Dart</div>
            <img class="script-icon" src="../images/lesson-page/icons8-dart-500.png" />
        </div>
        <div style="height: 137.47px; left: 271px; top: 6911.53px; position: absolute">
            <div class="script-icon-name" style="left: 25px; top: 113.73px;">Kotlin</div>
            <img class="script-icon" src="../images/lesson-page/icons8-kotlin-500.png" />
        </div>

        <div class="script-info-box" >
            <div class="script-info">Այն ներկայացնում է ավելի կարճ syntax՝ թույլ տալով մեզ գրել ավելի հստակ և ճշգրիտ կոդ: Սովորաբար Ruby մշակողներին  դուր են գալիս:</div>
        </div>
        <div class="script-info-box" style="top: 6420.02px;">
            <div class="script-info" style="top: 21.76px;">Այն կենտրոնացած է «խիստ տվյալների մուտքագրում» ավելացնելու վրա՝ բարդ համակարգերի մշակումն ու սպասարկումը պարզեցնելու համար: Այն մշակվել է Microsoft-ի կողմից:</div>
        </div>
        <div class="script-info-box" style="top: 6663.31px;">
            <div class="script-info" style="top: 11.87px; height: 167px;">Այն ինքնուրույն լեզու է, որն ունի իր սեփական շարժիչը(движок), այն աշխատում է ոչ բրաուզերային միջավայրերում (օրինակ՝ բջջային հավելվածներում), բայց կարող է նաև փոխակերպվել JavaScript-ում: Մշակված է Google-ի կողմից:</div>
        </div>
        <div class="script-info-box" style="top: 6901.65px;">
            <div class="script-info" style="top: 20.77px;">ժամանակակից, հակիրճ և ապահով ծրագրավորման լեզու է, որը նախատեսված է բրաուզերի կամ Node-ի համար:</div>
        </div>
        <div class="script-info-box" style="left: 155px; top: 6973px; transform: rotate(180deg); transform-origin: 0 0">
            <div style="width: 800.07px; height: 0px; left: -46px; top: 0px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; border: 3px black solid"></div>
            <img class="script-arrow" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset=""><br>
            <img class="script-arrow" style="padding-top: 190px;" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset=""><br>
            <img class="script-arrow" style="padding-top: 190px;" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset=""><br>
            <img class="script-arrow" style="padding-top: 160px;" src="../images/lesson-page/icons8-arrow-right-100.png" alt="" srcset="">            
        </div>
        
        <div class="summary-box">
            <div class="summary">Ամփոփում</div>
                <div class="summary-info">JavaScript-ը ի սկզբանե ստեղծվել է որպես զննարկիչի համար նախատեսված լեզու, սակայն այժմ այն ​​օգտագործվում է շատ այլ միջավայրերում:
                    <br/>Այսօր JavaScript-ը եզակի դիրք է գրավում որպես դիտարկիչի ամենատարածված լեզու, որը լիովին ինտեգրված է HTML/CSS-ին:
                    <br/>Կան բազմաթիվ լեզուներ, որոնք «տրանսպիլացված» են JavaScript-ի մեջ և ապահովում են հատուկ գործառույթ: Խորհուրդ է տրվում ուսումնասիրել դրանք JavaScript-ին տիրապետելուց հետո:
                </div>
        </div>
       
        <!-- comments -->
            <div class="comments-link-container">
                <!-- <div  class="comments-link-box">
                    <a class="good">Լավը</a>
                    <a class="new">Նորը</a>
                    <a class="old">Հինը</a>
                </div> -->
        
                <div style="width: 100%; height: 198.81px;top: 7560px; left:20%; position: absolute;">
                    <div >
                        <img src="../images/icons8-comments-80.png" alt="" srcset="" style="width: 30px; height: 30px;">
                    </div>
        
                    <!-- <div class = "comments-write-box">
                        <input class="comments-input" type="text" placeholder="Միացեք քննարկմանը․․․">
                            <div class="user-icon">U</div>
                    </div> -->
                    <div class = "comments-write-box">
                <form id="commentForm" method="POST" action="save_com.php">
                    <textarea name="comment"  class="comments-input" type="text" placeholder="Միացեք քննարկմանը․․․"></textarea>
                    <input type="submit" name="submit" class="com-btn" value="Ուղարկել">
                    <div class="user-icon">U</div>
                </form>
            </div>
                </div>
        
                <p id="sixth" class="before-comments">Գրելուց առաջ...</p>
                
                <div class="comments-box">
                    <div class="comments-title" style = "color:black">Մեկնաբանություններ </div>
                    <div class="comments"><span class="comment-count">
                    <?php 
                        include '../config.php';

                        $sql = "SELECT COUNT(id) AS count FROM lessons_comm"; // Corrected SQL query
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<span>' . $row["count"] . '</span>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                    ?>

                    </span> մեկնաբանություն</div>
                </div>
            </div>
        </div>
    </div>

    <div class="comm-container">
    <?php 
    include '../config.php';

    $sql = "SELECT * FROM lessons_comm ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="comment-container" style = "margin-left: 0vh;">' .
            '<span class="com-username">' . $row["username"] . '</span>' . 
            '<div class="comment-details">' .
                '<div class="com-time">' . $row["com_time"] . '</div>' .
                '<div class="com-comment">' . $row["comment"] . '</div>' . 
            '</div>' . 
            '<div class="likes-box">' .
                '<div class="like-container" data-comment-id="' . $row["id"] . '">' .
                '<img class="likes like-button" src="../images/light-mode/black-like.png" alt="" srcset="" data-liked="0">' .
                '<span class="like-count">' . $row["com_likes"] . '</span>' .
            '</div>' .
            '</div>' .
            '</div>' . 
            '<br>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>

<script>
    // localStorage doesnt work correctlyyy:(

document.addEventListener('DOMContentLoaded', function() {
    const likeButtons = document.querySelectorAll('.like-button');

    // Load like button states from local storage
    likeButtons.forEach(function(button) {
        const commentId = button.closest('.like-container').dataset.commentId;
        const isLiked = localStorage.getItem('like_state_' + commentId);

        if (isLiked !== null) {
            button.dataset.liked = isLiked;
            if (isLiked === '1') {
                button.src = "../images/main/like_blue.png";
            } else {
                button.src = "../images/light-mode/black-like.png";
            }
        }
    });

    likeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const commentId = this.closest('.like-container').dataset.commentId;
            const isLiked = parseInt(this.dataset.liked);

            if (isLiked === 0) {
                this.src = "../images/main/like_blue.png";
                this.dataset.liked = "1";
                localStorage.setItem('like_state_' + commentId, '1');
                updateLikeCount(commentId, 1); 
            } else {
                this.src = "../images/light-mode/black-like.png";
                this.dataset.liked = "0";
                localStorage.setItem('like_state_' + commentId, '0');
                updateLikeCount(commentId, -1);
            }
        });
    });

    function updateLikeCount(commentId, increment) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'update_likes.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                const likeCount = this.responseText;
                const likeCountElement = document.querySelector('.like-container[data-comment-id="' + commentId + '"] .like-count');
                if (likeCountElement) {
                    likeCountElement.textContent = likeCount;
                }
            } else {
                console.error('Request failed. Error: ' + xhr.statusText);
            }
        };
        xhr.send('like_button=true&comment_id=' + encodeURIComponent(commentId) + '&increment=' + increment);
    }
});

</script>
    <script src="../functions.js"></script>
    
</body>
</html>