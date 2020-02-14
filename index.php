<?php

$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
else
    $ipaddress = 'UNKNOWN';

$SERVICE_KEY = 'S67AZOQKDNFlfJF';

$url = "http://pro.ip-api.com/json/$ipaddress?key=$SERVICE_KEY&lang=ro&fields=city";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$city = curl_exec($ch);
$city = json_decode($city, true);

$commentTime = date('d.m.Y');
$tomorrow  = date('d.m.Y', strtotime('-2 days'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link
            href="https://fonts.googleapis.com/css?family=Mitr|Roboto:300,400,500,700|Work+Sans:400,500&display=swap"
            rel="stylesheet"
    />
    <link href="./css/style.css" rel="stylesheet"/>
</head>
<body>
<header id="up">
    <div class="menu">
        <div class="text">
            <a href="http://call2me.life/ro/Horoscope-2020-1/" class="left-text">
                <img src="img/logo_blog.svg" alt=""/>
                <p>blog</p>
            </a>

            <a href="http://call2me.life/ro/Horoscope-2020-1/" class="right-text">
                <img src="img/search.svg" alt=""/>
                <img src="img/menu.svg" alt=""/>
            </a>
        </div>
    </div>

    <div class="social">
        <div>
            <a href="http://call2me.life/ro/Horoscope-2020-1/">
                <img src="img/inst.svg" alt=""/>
                <img src="img/fk.svg" alt=""/>
                <img src="img/twitter.svg" alt=""/>
                <img src="img/like-1.svg" alt=""/>
            </a>
        </div>
    </div>
</header>

<main>
    <div class="news">
        <a href="http://call2me.life/ro/Horoscope-2020-1/" class="dataNews">
            <div>
                <p><?php echo $tomorrow; ?></p>
            </div>
            <div><p>Astrology</p></div>
        </a>

        <div class="textNews">
            <h1>
            <span class="mainSpan">
              Cum o singură convorbire cu un astrolog m-a ajutat ca într-un
              singur an să pot obține tot ceea ce am visat toată viața!
            </span>
            </h1>
            <a href="http://call2me.life/ro/Horoscope-2020-1/"><img src="img/2899407-1.jpg" alt=""/></a>
            <p>
                Până acum un an eram foarte departe de felul în care mă știu toți
                acum: un om de succes, fericită și încrezătoare în sine. Anul acesta
                m-a ajutat să-mi schimb radical viața și să realizez ceea ce nici nu
                îndrăznisem vreodată să visez. Am propria afacere, o casă (nu un
                apartament, ci o ditamai casa!), călătoresc, sunt iubită ... Totul,
                într-un singur an! Îți voi povesti cum s-au întâmplat acestea. Mulți
                dintre cei care mă urmăresc s-ar putea să nu creadă cele ce urmează
                să spun, dar scriu tocmai pentru cei care, asemenea mie, acum un an,
                aveau nevoie de un astfel de ajutor, atât de important și necesar.
            </p>
            <p>
                Cei care mă cunosc știu că acum un an am fost literalmente în pragul sinuciderii: am fost concediată de
                la locul de muncă pe care îl adoram, la început fiind transferată pe o poziție inferioară și cu un
                salariu de nimic, persoana în care am avut o încredere oarbă m-a înșelat și m-a părăsit, spunându-mi că
                nu m-a iubit niciodată. Părinții, în loc să mă sprijine, mi-au spus că doar au sunt de vină și că mi-am
                ratat viața ... Rezultatul a fost că m-am îmbolnăvit grav și am ajuns într-o stare mai mult decât
                jalnică...
            </p>
            <p class="boldP">
                Hai să începem cu începutul și să vă spun întreaga poveste și cum am ajuns unde sunt astăzi.
            </p>
            <p>
                După cum știți, sunt una dintre cele mai sceptice persoane și nu am crezut niciodată în astrologie,
                ghicitori, magie și alte chestii mistice. Prin urmare, atunci când, în urmă cu aproximativ un an, am dat
                peste un site de pe internet, unde poți obține o prognoză astrologică pentru viitorul an, m-am prăpădit
                de râs.
            </p>
            <a href="http://call2me.life/ro/Horoscope-2020-1/"><img src="img/55-1.jpg" alt=""/></a>
            <p>
                <a href="http://call2me.life/ro/Horoscope-2020-1/"
                >Mai întâi a trebuit să introduc numărul de telefon pentru a accesa site-ul.</a
                >
                Dar aveam atât de multe probleme care mă presau, plus o splină hiper obosită și o dispoziție deprimată,
                așa că m-am bucurat că am mai avut puterea de a râde ... Așa că m-am decis să-l ascult pe acest
                astrolog, pentru că nu se știe niciodată de unde sare iepurele, nu? Oricum aveam opțiunea de a-l ignora,
                așa că am luat totul ca pe o chestie de distracție, care să mă ajute să uit pentru câteva minute de
                starea mea nasoală.
            </p>
            <p>
                Nici atunci nu am crezut cele ce mi-a spus. Totul mi s-a părut o glumă. Cu toate acestea, am decis să
                ascult mesajul: la urma urmei, femeia asta s-a zbătut pentru mine, pentru a-mi face o prognoză
                personală, iar
                <span>
                prețul pentru utilizarea serviciului audio este unul foarte accesibil.</span
                >
            </p>
            <a href="http://call2me.life/ro/Horoscope-2020-1/"><img src="img/2899409-1.jpg" alt=""/></a>

            <p class="boldP">
                Am introdus numărul meu de telefon pentru identificare și am apăsat pe butonul „Sună”.
            </p>
            <p>
                Astrologul avea o voce foarte caldă și relaxantă. Am simțit că pot avea încredere în ea și să-i
                povestesc despre necazurile și nemulțumirile mele legate de viața. Dar a vorbit numai ea. Și spre
                surprinderea mea, din ce în ce mai mare, mi-am dat seama că știe despre necazurile mele și poate chiar
                mai mult decât aș fost eu dispusă să-i spun.
            </p>

            <p>
                Apoi a continuat cu predicțiile despre ceea ce mă așteaptă în anul care vine. A vorbit despre
                evenimentele și motivele din trecutul meu care au dus la ele - și îmi spunea niște lucruri pe care doar
                eu le știam. Realmente, am fost șocata!
            </p>

            <p>
                În același timp, mi-a dictat o listă întreagă de recomandări simple, a căror implementare ar trebui să
                mă ajute să îmi rezolv problemele, atât în ceea ce privește munca, cât și cu viața personală (mai exact,
                absența acesteia) și să scap de stările negative care mă devorează.
            </p>

            <p>
                Am ascultat mesajul audio de la început până la sfârșit. Viața mea tocmai îmi fusese povestită dintr-o
                perspectivă pe care numai eu o știam. Iar sfaturile astrologului erau foarte clar integrate în această
                poveste. Mi-am dat seama atunci că, fără astfel de sfaturi, nu aș fi putut să merg mai departe .
            </p>

            <p>
                După ce am închis telefonul am simțit cum mă cuprinde liniștea sufletească. Apoi am început să realizez
                că în curând totul va funcționa. Tot ceea ce trebuia să fac era doar să urmez cu atenție sfaturile
                primite. Da, îmi dau seama cât de ciudat sună toate acestea când vi le spun, dar exact asta am
                experimentat atunci, vă jur!
            </p>

            <p>
                Treaba asta se întâmpla pe la mijlocul lunii Decembrie.
                <a href="http://call2me.life/ro/Horoscope-2020-1/">Și, în curând, am început să observ lucrurile despre
                    care mi-a spus astrologul</a>
                Totul s-a adeverit până la cele mai mici detalii! Dar eram pregătita pentru tot ceea ce urma să se
                întâmple: pur și simplu am acționat așa cum mi-a recomandat astrologul și nu așa cum eram obișnuită să
                acționez. Nu a durat mult până când schimbările au început să se vadă!
            </p>
            <a href="http://call2me.life/ro/Horoscope-2020-1/"><img src="img/2899408-1.jpg" alt=""/></a>
            <p>
                Am văzut noi perspective pe piața de muncă, iar după câteva luni, cu ajutorul sfaturilor astrologului,
                mi-am deschis propria afacere, ceea ce acum îmi aduce acum un câștig foarte bun. Poate vi se pare că
                acest lucru s-a întâmplat de la sine, dar dacă mă uit înapoi, tocmai recomandările astrologului au
                condus la acest rezultat.

            </p>

            <p>
                Pe la începutul verii am întâlnit un bărbat, iar relația noastră s-a dezvoltat atât de natural, încât
                părea că soarta ne-a adus împreună.
                <a href="http://call2me.life/ro/Horoscope-2020-1/"
                ><span
                > Da, ați putea spune că a fost Destinul, dar din nou, sfaturile primite în acea înregistrare audio m-au adus în acel punct.</span
                >.</a
                >
            </p>

            <p>
                2019 se apropie de sfârșit, iar acum pot spune cu siguranță că a fost cel mai important, cel mai intens
                și cel mai fericit an din viața mea de până acum. Chiar dacă a fost unul de cotitură. Un an în care am
                obținut mai mult decât în toți ​​cei 32 de ani de viață.
                <span
                >Și privind în urmă, pot fi sigură că toate acestea se datorează faptului că am decis să ascult prognoza astrologică de pe acel site, de care am râs atunci. În acest an, absolut tot ceea ce mi-a spus astrologul a devenit realitate.</span
                >
                Toate sfaturile ei, pe care le-am urmat în mod clar, m-au ajutat să evit necazurile, dar și să fac
                alegerea corectă la momentul oportun. Iar rezultatul a fost că am obținut tot ceea ce am visat.
            </p>

            <p>
                În acest an mă voi concentra pe consolidarea succesului obținut: voi face din nou testul pe site-ul
                astrologului pentru a obține prognoza și sfaturile pentru anul viitor. La urma urmei, am simțit pe
                propria piele că este ceva adevărat și care funcționează!
            </p>

            <p class="boldP">
                Am verificat, site-ul este acolo, așa că voi suna din nou cât mai repede. Sunt sigură că, mulțumită
                astrologului, anul 2020 va fi și mai frumos, mai luminos și mai reușit decât a fost 2019, pentru care îi
                sunt la fel de recunoscătoare!
            </p>
            <p>
                Sunt foarte conștientă de faptul că mulți dintre cei care mă urmăresc experimentează și ei o stare de
                incertitudine, se simt confuzi, au depresii sau poate nu știu ce să facă într-o anumită situație.
                Dacă te regăsești printre ei, atunci îți las mai jos un link către site-ul astrologului, datorită căruia
                viața mea este acum armonioasă, plină de iubire și bogăție.
            </p>

            <p class="boldP">
                Vă doresc să aveți propriul miracolul de Anul Nou, așa cum mi s-a întâmplat mie!
            </p>

            <p>
                <a href="http://call2me.life/ro/Horoscope-2020-1/"
                >Am și câteva sfaturi pentru voi: răspundeți la întrebările de pe site cât se poate de sincer și
                    asigurați-vă că ascultați până la sfârșit mesajul astrologului.</a
                >
                În acest fel veți obține toate elementele care să vă facă să acționați în mod corect în toate situațiile
                ce vă așteaptă în 2020. Iar aceste acțiuni vă vor conduce la rezultate uimitoare în toate domeniile
                vieții!
            </p>
        </div>

        <div class="btn">
            <div>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    <span>Accesează site-ul astrologului</span>
                </a>
            </div>

            <p>
                <span>P.S.</span> Cine a primit deja predicții și sfaturi? Hai să vorbim în secțiunea de comentarii!
            </p>
            <p>
                Vă îmbrățișez pe toți și vă doresc din tot sufletul fericire și mult noroc!
            </p>
        </div>

        <div class="niki">
            <a href="http://call2me.life/ro/Horoscope-2020-1/">
                <img src="img/avat320.jpg" alt=""/>
                <p>
                    ANASTASIA POPESCU
                </p>
            </a>

            <a href="http://call2me.life/ro/Horoscope-2020-1/">
                <img src="img/like.svg" alt=""/>
                <p>1563</p>
            </a>
        </div>
    </div>

    <div class="comments">
        <div class="contain">
            <h2>
                Comentarii
            </h2>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/272.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Doru <br/>
                    <span>
                15 min ago
              </span>
                </a>

                <div class="textComment">
                    <p>
                    Scumpa mea, te îmbrățișez cu toată dragostea! Ai avut parte de atât de multă nefericire și îmi pare foarte bine că ești fericită acum! Și îți mulțumesc că împărtășește cu ceilalți secretul reușitelor tale! Mai mult ca sigur că voi suna și eu la acest astrolog și sper cu adevărat că voi atinge același nivel de fericire ca în cazul tău.
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/258.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Corina <br/>
                    <span>
                32 min ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Trebuie făcută distincția între un astrolog și un ghicitor. Pentru că astrologia este o știință,
                        cu toate că, este prezentă și o oarecare doză de misticism.
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/260.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Tudor <br/>
                    <span>
                48 min ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Chiar vrei să credem toate astea? Chestia cu Destinul și alte bla-bla-bla-uri? Cum că Raiul este
                        un bărbat chipeș care a apărut din senin în viața ta, după ce ți-ai deschis o afacere de succes
                        și ți-ai cumpărat o casă și voiajezi din greu. Cred doar că ai visat frumos în timp ce altcineva
                        a făcut toate astea. Tipic feminin. Și apoi vii să ne povestești cum ai reușit totul de una
                        singură. Un tătic sau un amant cu mână largă - așa realizează femeile totul. Și nu ne aburesc cu
                        povești cu astrologi.
                    </p>
                </div>
                <p class="reply">Reply</p>

                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/259.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Andreea <br/>
                    <span>
                1 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Ești un tip care nu știe decât să jignească femeile. Atâta răutate și negativism. Tata este un
                        simplu muncitor, iar soțul meu câștigă jumătate din cât câștig eu. Iar mașina și casa sunt pe
                        numele amândurora. Ce spui de asta?
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/261.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Sonia <br/>
                    <span>
                3 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Povestea mea este foarte asemănătoare cu a Anastasiei. Și pentru mine lucrurile au mers prost.
                        Soțul meu s-a dovedit a fi un nenorocit, care m-a abandonat și m-a lăsat cu un copil de crescut.
                        Apoi am fost concediată din cauza reducerilor bugetare. Se pare că un lucru rău aduce după el
                        alte lucruri nasoale. Și eu eram pregătită să fac orice. Ea a sunat astrologul. Pentru că atunci
                        când te apucă disperarea, nu știi încotro să o apuci. Iar telefonul ăla a fost ca un declic în
                        viața ei. Lucrurile au început să îi meargă bine pe plan personal, și-a găsit un nou loc de
                        muncă, chiar mai bun decât spera. Crezi sau nu. Poate, desigur, aceasta nu este decât o
                        coincidență. Astfel de mesaje îți oferă pur și simplu speranță și încredere în sine - ce ți se
                        pare în neregulă cu treaba asta? Cu siguranță merită bănuțul ăla pe care îl percep pentru apel.
                    </p>
                </div>
                <p class="reply">Reply</p>
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/user_icon.svg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Andrei <br/>
                    <span>
                5 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Nu cred. Niște prostii
                    </p>
                </div>
                <p class="reply">Reply</p>
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/group-15.svg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Constantin <br/>
                    <span>
                5 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Nu te obligă nimeni să crezi! Nici să citești. Uneori, oamenii au nevoie doar de câteva cuvinte
                        de susținere și de niște sfaturi despre cum să iasă din prăpastia în care au căzut. Așa că nu
                        este nimic în neregulă cu astfel de servicii.
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/263.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Marieta <br/>
                    <span>
                7 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Vecina mea a apelat la acest serviciu și viața i s-a îmbunătățit. Dacă am văzut că este pe bune,
                        am sunat și eu. Astrologul mi-a oferit sfaturi pentru toate problemele mele! Acum aștept să am
                        parte de fericire.
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/user_icon.svg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Mădălina <br/>
                    <span>
                7 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Mi se pare că oamenii s-au obișnuit să creadă că cineva decide pentru ei ce se întâmplă.
                        Consider că poți reuși în viață și fără șarlatani și să-ți construiești fericirea pe cont
                        propriu.
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/270.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Ana <br/>
                    <span>
                9 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Unii omeni au nevoie de un imbold, de cuvinte de susținere, de speranță sau orice altceva. Iar
                        astrologia este o știință, nu o chestie de ghicit. Atunci când nu știi despre ce este vorba, mai
                        bine nu zici nimic.
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/267.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Beatrice <br/>
                    <span>
                12 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Mă număr printre cei cu probleme. Voi suna și eu. Dacă sfaturile astrologului mă ajută cu
                        adevărat?
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/user_icon.svg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Felicia <br/>
                    <span>
                16 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Prietena mea a sunat la acest serviciu. Lucrurile au mers foarte prost în viața ei - rudele i-au
                        murit una câte una (au avut parte de niște morți oribile), casa i-a ars și, colac peste pupăză,
                        și-a pierdut și locul de muncă. Pe scurt, situația arăta nasol de tot. Era complet singură, fără
                        sprijin și persoane dragi lângă ea, într-un oraș străin. Și, din disperare, a sunat la aceea
                        astroloagă. Care, din ce mi-a spus ea, a fost foarte prietenoasă și amabilă. Pur și simplu îți
                        spune pe un ton calm ce a fost, ce este și ce va fi. În niciun caz nu este o chestie ca la
                        ghicitoare. Îți spune unde te poate duce viața, bazându-te pe ceea ce experimentezi în acele
                        momente. Și îți oferă recomandări și sfaturi despre cum să depășești greutățile vieții. Fără
                        magie și abureli. În acest moment viața prietenei mele este din ce în ce mai bună și lucrurile
                        au început să-i meargă bine!
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/group-23.svg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Corneliu
                    <br/>
                    <span>
                16 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Am sunat și eu. Încă nu m-a lovit fericirea. Dar o aștept. În momentul de față, tot ce mi-a spus
                        că se va întâmpla, într-un fel sau altul, a avut loc.
                    </p>
                </div>
                <p class="reply">Reply</p>
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/264.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Eduard
                    <br/>
                    <span>
                16 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Ce tare! Ghicitorii au început să vorbească prin mesaje audio. Secolul 21, frate!
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/269.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Geta
                    <br/>
                    <span>
                17 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Nu este vorba despre nicio ghicitoare. Nu știi să citești bine!? Este vorba despre un astrolog.
                        Și, da. Chiar este pe bune! Orice ar spune scepticii!
                    </p>
                </div>
                <p class="reply">Reply</p>
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/268.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Eliza
                    <br/>
                    <span>
                17 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Voi suna și eu. Simt că prințul meu într-un Mercedes alb mă așteaptă undeva după colț, dar nu
                        știu care este colțul către care trebuie să mă uit.
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/266.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Marius
                    <br/>
                    <span>
                18 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Dacă glumești - nu merită. Dacă într-adevăr intenționezi să suni - atunci îți doresc multă
                        bafta! Eu mi-am luat porția de bine pe anul acesta. Am să sun și înainte de Anul Nou. Pentru
                        a-mi fi bine și în anul care vine.
                    </p>
                </div>
                <p class="reply">Reply</p>
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/user_icon.svg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Toma
                    <br/>
                    <span>
                18 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Nu cred că astrologii te pot ajuta dacă ești urât și gras.
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/265.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Antonia
                    <br/>
                    <span>
                30 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Dacă îți spune cineva ce trebuie să faci, atunci da, poți să scapi și de grăsime și de urâțenie.
                        Trebuie doar să suni pe cine trebuie.
                    </p>
                </div>
            </div>
            <div class="coment">
                <a href="http://call2me.life/ro/Horoscope-2020-1/" class="imgName">
                    <img src="img/271.jpg" alt=""/>
                </a>
                <a href="http://call2me.life/ro/Horoscope-2020-1/">
                    Maria
                    <br/>
                    <span>
                32 hrs ago
              </span>
                </a>
                <div class="textComment">
                    <p>
                        Am sunat anul trecut. M-a ajutat. Cine nu crede - mai bine să nu sune și să stea să tragă mâța
                        de coadă. În ceea ce mă privește, treaba a fost cât se poate de adevărată. Așa că, acum,
                        lucrurile au început să-mi meargă bine! Nu pot decât să îi mulțumesc d-nei astrolog pentru
                        sfaturile date.
                    </p>
                </div>
            </div>
            <div class="comentSend">
                <a href="http://call2me.life/ro/Horoscope-2020-1/"><img src="img/user_icon.svg" alt=""/></a>
                <input type="text" placeholder="scrie un comentariu..."/>
                <img class="send" src="img/icon_send.svg" alt=""/>
            </div>
            <div class="moderat disNone">
                <img src="img/attantion.svg" alt=""/>
                <p>
                    Îţi mulţumim! Recenzia ta va fi publicată după ce va fi moderata.
                </p>
            </div>
        </div>
    </div>
</main>

<footer>
    <div>
        <a href="http://call2me.life/ro/Horoscope-2020-1/">
            <img src="img/logo_blog.svg" alt=""/>
        </a>
        <p>
            2020©
        </p>
    </div>
</footer>
<a href="#up" id="arrowTop" class="scroll-to" hidden
><img src="img/up.svg" alt=""
/></a>
<script src="./js/main.js"></script>
</body>
</html>