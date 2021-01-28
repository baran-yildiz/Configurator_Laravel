<html>
<head>
    <meta http-equiv="content-language" content="de">
    <meta name="language" content="de">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <title>Litzen - TrommTEC Kaufen</title>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="keywords" content="litzen, einzeladern, haben, normen, standards, sortiert, entsprechend, welchen, hergestellt, darunter, finden, einzelnen, aktuell, verfügbaren, farben" />
    <meta name="description" content="Litzen - Unsere Einzeladern haben wir nach den Normen und Standards sortiert, entsprechend welchen Sie hergestellt werden. Darunter finden Sie ..." />
    <meta name="robots" content="index,follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        let ajax_url = "{{ route('ajax') }}",
            token = "{{ csrf_token() }}";
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>


<body style="margin-left: 0px;">

<div align="center">

    <h1>Litzen / Einzeladern</h1>


    <div class="div_product_overview">
        <form name="form1" action="submit" method="post">
            @csrf
            <h3>LITZEN-KABELKONFIGURATOR</h3>
    <div class="buyuk_div" id="imgDiv">

        <!--                 ***Left side of the picture...***                        -->
        <div class="kucuk_div">
            <img class = "img_kucuk" id= "imgLeft" src="/configurator photos/Aderendhuelse/Blau.png">
        </div>
        <!--                 ****Middle of the picture...***                        -->
        <div class="orta_div">
            <img class="img_orta" id= "imgCenter" src="/configurator photos/litzen/Blau.png">
        </div>

        <!--                  ***Right side of the picture...***                        -->
        <div class="kucuk_div">
            <img class="img_kucuk" id= "imgRight" src="/configurator photos/Aderendhuelse/Blau.png">
            <a>Abbildung &aumlhnlich.</a>
        </div>


    </div>

    <div class="buyuk_div" id = "leftSide">
        <div class="korta_div" id = "divLeft">
            <h3 >LINKE SEITE</h3>
            <h4 >VERBINDER :</h4>
                <h4 id= "isolh">ISOLIERUNG :</h5>
                <select class="verbinder" onchange="changePhotoLeft()" name="linke" id="linke">

                <option value="0">Bitte Auswaehlen</option>

                <option value="offenes Ende" style="display: none;">offenes Ende</option>

                <option value="Schnitt" style="display: none;">Schnitt</option>

                <option value="Verdrecht" style="display: none;">Verdrecht</option>

                <option value="Teilabzug" style="display: none;">Teilabzug</option>

                <option value="Aderendhuelse">Aderendhuelse</option>

                <option value="Ringkabelschuh" style="display: none;">Ringkabelschuh</option>

                <option value="Flachsteckhuelse" style="display: none;">Flachsteckhulse</option>

                <option value="Gabelkabelschuh" style="display: none;">Gabelkabelschuh</option>

                <option value="Flachsteckhuelse mit Abzweig">Flachsteckhuelse mit Abzweig</option>
                </select>

                <select class="iso" onchange = "closeOpts(this.name); changePhotoLeft1(); showBreite(this.name)" name="isol" id="isol" disabled>

                    <option value="0">Bitte Auswaehlen</option>

                    <option value="isoliert">isoliert</option>

                    <option value="ohne isolation">ohne isolation</option>

                    <option value="ohne isolation(verzinnt)">ohne isolation(verzinnt)</option>

                    <option value="vollisoliert">vollisoliert</option>

                    <option value="abisoliert">abisoliert</option>

                    <option value="teilisoliert">teilisoliert</option>
                </select>

                <h5 class = "breite" >BREITE :</h5>
                <h4 id= "lange" >LANGE :</h4>
                <h5 class= "farbe" >FARBE  :</h5>

                    <select class="skucuk" onchange = "closeOpts(this.name);showLange(this.name)" name="widthl" id="widthl" disabled>

                        <option value="0">Bitte Auswaehlen</option>

                        <option value="0.25">0,25 mm&#178</option>

                        <option value="0.34">0,34 mm&#178</option>

                        <option value="0.50">0,5 mm&#178</option>

                        <option value="0.75">0,75 mm&#178</option>

                        <option value="1.00">1,0 mm&#178</option>

                        <option value="1.42">1,42 mm&#178</option>

                        <option value="1.50">1,5 mm&#178</option>

                        <option value="2.50">2,5 mm&#178</option>

                        <option value="2.80">2,8 mm&#178</option>

                        <option value="4.00">4,0 mm&#178</option>

                        <option value="4.80">4,8 mm&#178</option>

                        <option value="6.00">6,0 mm&#178</option>

                        <option value="10.00">10,0 mm&#178</option>

                        <option value="16.00">16,0 mm&#178</option>

                        <option value="0.10">0,1 mm&#178</option>

                        <option value="0.14">0,14 mm&#178</option>

                        <option value="0.25">0,25 mm&#178</option>

                        <option value="1.40">1,4 mm&#178</option>

                        <option value="1.60">1,6 mm&#178</option>

                        <option value="0.30">0,3 mm&#178</option>

                        <option value="2.70">2,7 mm&#178</option>

                        <option value="6.30">6,3 mm&#178</option>

                        <option value="6.60">6,6 mm&#178</option>

                        <option value="3.80">3.8 mm&#178</option>

                        <option value="0.30">0,3 mm&#178</option>

                        <option value="0.80">0,8 mm&#178</option>

                    </select>

                    <select class = "skucuk" onchange = "closeOpts(this.name); showFarbe(this.name)" name="lenl" id="lenl" disabled>

                        <option value="0">Bitte Auswaehlen</option>

                        <option value="5.00">5 mm</option>

                        <option value="6.00">6 mm</option>

                        <option value="6.10">6,10 mm</option>

                        <option value="7.00">7 mm</option>

                        <option value="8.00">8 mm</option>

                        <option value="10.00">10 mm</option>

                        <option value="12.00">12 mm</option>

                        <option value="15.00">15 mm</option>

                    </select>

                    <select class="skucuk" name="farbel" id="farbel" onchange="changePhotoLeft();"  disabled>

                        <option value="0">Bitte auswaehlen</option>

                        <option value="blau">Blau</option>

                        <option value="schwarz">Schwarz</option>

                        <option value="braun">Braun</option>

                        <option value="rot">Rot</option>

                        <option value="orange">Orange</option>

                        <option value="gelb">Gelb</option>

                        <option value="grun">Grun</option>

                        <option value="grau">Grau</option>

                        <option value="weiss">Weiss</option>

                        <option value="rosa">Rosa</option>

                    </select>

                    <h5 id="beschlink">BESCHRIFTUNG LINKS(+0.5 EUR):</h5>

                    <input type="number" id="beschlink" name="beschlink" value="0" min="0"/>

        </div>

        <div class="korta_div">
            <h3 id = "kabel">KABEL</h3>
            <h4 id = "kabeltyp">KABELTYP:</h4>
                <h5 id = "kabeldicke">KABELDICKE:</h5>
                <select class="skucuk" onchange = "filterSizeofCables()" name="kabeltyp" id="kabeltyp" >
                    <option value = "0" selected="selected">Bitte Auswaehlen</option>

                    <option value="1">UL 1007</option>

                    <option value="2">UL 1015</option>

                    <option value="3">UL 1061</option>

                    <option value="4">UL 1071</option>
                </select>

                <select class="skucuk" name="kabeldicke" id="kabeldicke"  disabled>

                    <option value="0" selected="selected">Bitte Auswaehlen</option>

                    <option value="1">AWG 12</option>

                    <option value="2">AWG 14</option>

                    <option value="3">AWG 16</option>

                    <option value="4">AWG 18</option>

                    <option value="5">AWG 20</option>

                    <option value="6">AWG 22</option>

                    <option value="7">AWG 24</option>

                    <option value="8">AWG 26</option>

                    <option value="9">AWG 28</option>

                    <option value="10">AWG 30</option>

                </select>

                <h5 id= "lenort">LANGE( MM ):</h5>

                <input type="number" id="lenk" name="lenk" min="0" placeholder="Bitte Schreiben.." />

                <h5 id = "farbort" >FARBE:</h5>

                <select class="skucuk" onchange="resdegorta()" name="farbek" id="farbek" disabled>

                    <option value = "0">Bitte Auswaehlen</option>

                    <option value="Blau">Blau</option>

                    <option value="Schwarz">Schwarz</option>

                    <option value="Braun">Braun</option>

                    <option value="Rot">Rot</option>

                    <option value="Orange">Orange</option>

                    <option value="Gelb">Gelb</option>

                    <option value="Grun">Grun</option>

                    <option value="Grau">Grau</option>

                    <option value="Weiss">Weiss</option>

                    <option value="Rosa">Rosa</option>

                    <option value="Grungelb">GrunGelb</option>

                    <option value="Lila">Lila</option>

                </select>

                <h5 id="beschmid">BESCHRIFTUNG MITTE(+0.5 EUR):</h5>

                <input type="number" id="beschmid" name="beschmid" min="0" placeholder = "Bitte schreiben..."/>


        </div>

        <div class = "korta_div" id= "divRight">
            <h3 id="rechteh">RECHTE SEITE</h3>
            <h5 id="verbinder">VERBINDER :</h5>
            <h5 id="isorh">ISOLIERUNG :</h5>
            <select class="verbinder" onchange="changePhotoRight()" name="rechte" id="rechte">

                <option value="0">Bitte Auswaehlen</option>

                <option value="offenes Ende" style="display: none;">offenes Ende</option>

                <option value="Schnitt" style="display: none;">Schnitt</option>

                <option value="Verdrecht" style="display: none;">Verdrecht</option>

                <option value="Teilabzug" style="display: none;">Teilabzug</option>

                <option value="Aderendhuelse">Aderendhuelse</option>

                <option value="Ringkabelschuh" style="display: none;">Ringkabelschuh</option>

                <option value="Flachsteckhuelse" style="display: none;">Flachsteckhulse</option>

                <option value="Gabelkabelschuh" style="display: none;">Gabelkabelschuh</option>

                <option value="Flachsteckhuelse mit Abzweig">Flachsteckhuelse mit Abzweig</option>

            </select>

            <select class="iso" onchange = "closeOpts(this.name);changePhotoRight1();showBreite(this.name)" name="isor" id="isor" disabled>

                <option value="0">Bitte Auswaehlen</option>

                <option value="isoliert">isoliert</option>

                <option value="ohne isolation">ohne isolation</option>

                <option value="ohne isolation(verzinnt)">ohne isolation(verzinnt)</option>

                <option value="vollisoliert">vollisoliert</option>

                <option value="abisoliert">abisoliert</option>

                <option value="teilisoliert">teilisoliert</option>

            </select>

            <h5 class="breite">BREITE :</h5>
            <h5 id= "lenrh">LANGE  :</h5>
            <h5 class= "farbe">FARBE  :</h5>

            <select class="skucuk" onchange = "closeOpts(this.name);showLange(this.name)" name="widthr" id="widthr" disabled>

                <option value="0">Bitte Auswaehlen</option>

                <option value="0.25">0,25 mm&#178</option>

                <option value="0.34">0,34 mm&#178</option>

                <option value="0.50">0,5 mm&#178</option>

                <option value="0.75">0,75 mm&#178</option>

                <option value="1.00">1,0 mm&#178</option>

                <option value="1.42">1,42 mm&#178</option>

                <option value="1.50">1,5 mm&#178</option>

                <option value="2.50">2,5 mm&#178</option>

                <option value="2.80">2,8 mm&#178</option>

                <option value="4.00">4,0 mm&#178</option>

                <option value="4.80">4,8 mm&#178</option>

                <option value="6.00">6,0 mm&#178</option>

                <option value="10.00">10,0 mm&#178</option>

                <option value="16.00">16,0 mm&#178</option>

                <option value="0.10">0,1 mm&#178</option>

                <option value="0.14">0,14 mm&#178</option>

                <option value="0.25">0,25 mm&#178</option>

                <option value="1.40">1,4 mm&#178</option>

                <option value="1.60">1,6 mm&#178</option>

                <option value="0.30">0,3 mm&#178</option>

                <option value="2.70">2,7 mm&#178</option>

                <option value="6.30">6,3 mm&#178</option>

                <option value="6.60">6,6 mm&#178</option>

                <option value="3.80">3.8 mm&#178</option>

                <option value="0.30">0,3 mm&#178</option>

                <option value="0.80">0,8 mm&#178</option>

            </select>

            <select class="skucuk" onchange = "closeOpts(this.name);showFarbe(this.name)" name="lenr" id="lenr"  disabled>

                <option value="0">Bitte Auswaehlen</option>

                <option value="5.00">5 mm</option>

                <option value="6.00">6 mm</option>

                <option value="6.10">6,10 mm</option>

                <option value="7.00">7 mm</option>

                <option value="8.00">8 mm</option>

                <option value="10.00">10 mm</option>

                <option value="12.00">12 mm</option>

                <option value="15.00">15 mm</option>

            </select>

            <select class="skucuk" onchange="changePhotoRight()" name="farber" id="farber" disabled>

                <option value="0">Bitte auswaehlen</option>

                <option value="blau">Blau</option>

                <option value="schwarz">Schwarz</option>

                <option value="braun">Braun</option>

                <option value="rot">Rot</option>

                <option value="orange">Orange</option>

                <option value="gelb">Gelb</option>

                <option value="grun">Grun</option>

                <option value="grau">Grau</option>

                <option value="weiss">Weiss</option>

                <option value="rosa">Rosa</option>

            </select>
 
            <h5 id = "beschrecht">BESCHRIFTUNG RECHTS(+0.5 EUR):</h5>

            <input type="number" id="beschright" name="beschright" value="0" min="0"/>

        </div>
    </div>
    <div class="buyuk_div" id="anzahlMost">
        <div class="buyuk_div" id = "anzahlMiddle">
            <h5 id = "anzahl">ANZAHL: </h5>
            <input type="number" id="anzahl" name="anzahl" value="0" min="0"/>
        </div>
    </div>
    <div class="buyuk_div" id="tableMost">
        <div class="buyuk_div" id= "tableMiddle">

            <table>
                <tr>
                    <th>ARTIKELNUMMER</th>
                    <th>PREIS NETTO</th>
                    <th>PREIS BRUTTO</th>
                </tr>
                <tr>
                    <td id= "artab">de</td>
                    <td>dene</td>
                    <td>deneme</td>
                </tr>
                <tr>
                    <td>dene</td>
                    <td >deneme</td>
                    <td>deme4</td>
                </tr>
            </table>

        </div>
    </div>

    <div class="buyuk_div" id="final">
        <div class ="buyuk_div" id="finalChild">

            <button type="submit" id= "submit" name="submit">
                PRODUKT AKTUALISIEREN</button>

            <button  type="button" onclick="redirection()" name= "redirect" id="redirect" >
                ZUM PRODUKT</button>
        </div>
    </div>
        </form>

    </div>
</div>

 <script src="{{ asset('js/configurator2.js') }}"></script>
 <script src="{{ asset('js/ajax.js') }}"></script>
