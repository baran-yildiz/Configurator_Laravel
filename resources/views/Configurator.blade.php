<html>
<head>
    <meta http-equiv="content-language" content="de">
    <meta name="language" content="de">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="Content-Type" content="text/html; charset= UTF-8"> -->
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
    <!--{{ asset('public/js/configurator2.js') }}
    {{ asset('public/js/ajax.js') }}-->
    <!--<script src="{{ mix('js/app.js') }}"></script>-->
    <!--<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">-->
    <link rel ="stylesheet" type= "text/css" href="/css/main.css">
</head>


<body style="margin-left: 0px;">

<div align="center">

    <h1>Litzen / Einzeladern</h1>


    <div class="div_product_overview">
        <form name="form1" action="submit" method="post">
            @csrf
            <h3>LITZEN-KABELKONFIGURATOR</h3>
    <div class="buyuk_div" style="width:920px; height:100px; border: 1px solid black; box-shadow:2px 3px silver; border-radius: 3px">

        <!--                 ***Left side of the picture...***                        -->
        <div class="kucuk_div" style="width:160px; height:100px; float: left">
            <img class = "img_kucuk" id= "imgLeft" src="/configurator photos/Aderendhuelse/Blau.png" style="width:160px; height: 100px">
        </div>
        <!--                 ****Middle of the picture...***                        -->
        <div class="orta_div" style="width:598px; height:100px; float: left">
            <img class="img_orta" id= "imgCenter" src="/configurator photos/litzen/Blau.png" style="width:598px; height:100px">
        </div>

        <!--                  ***Right side of the picture...***                        -->
        <div class="kucuk_div" style="width:160px; height:100px; float: left">
            <img class="img_kucuk" id= "imgRight" src="/configurator photos/Aderendhuelse/Blau.png" style="width:160px; height: 100px">
            <a style="color:black; font-family:Calibri; font-size:10px; float:right">Abbildung &aumlhnlich.</a>
        </div>


    </div>

    <div class="buyuk_div" align="center" style = "height: 220px;width: 930px;margin-top: 5px">
        <div class="korta_div" id = "divLeft" style="margin-left:0px; margin-top: 12px; float:left; width: 305px; height: 210px; background-color: silver; border-radius: 3px">
            <h3 style = "text-align:center;color: #120a8f; padding: 5px; font-size: 15px; border-bottom: 1px solid #120a8f ">LINKE SEITE</h3>
            <h4 style = "margin-top: 5px;color: #120a8f; padding-left: 5px; text-decoration: underline; float:left;margin-bottom: 5px; font-size: 13px">VERBINDER :</h4>
                <h5 style = "margin-top: 5px;color: #120a8f; padding-left: 5px; text-decoration: underline; float:left; margin-left: 90px;margin-bottom: 5px; font-size: 13px">ISOLIERUNG :</h5>
                <select class="sorta" onchange="changePhotoLeft()" name="linke" id="linke" style="font-family:Calibri; width:150px; margin-top:5px; border-radius: 3px; margin-left:2px; float:left">

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

                <select class="sorta" onchange = "closeOpts(this.name); changePhotoLeft1(); showBreite(this.name)" name="isol" id="isol" style="font-family:Calibri; width:140px; margin-top:5px; border-radius: 3px; margin-left:7px; float:left" disabled>

                    <option value="0">Bitte Auswaehlen</option>

                    <option value="isoliert">isoliert</option>

                    <option value="ohne isolation">ohne isolation</option>

                    <option value="ohne isolation(verzinnt)">ohne isolation(verzinnt)</option>

                    <option value="vollisoliert">vollisoliert</option>

                    <option value="abisoliert">abisoliert</option>

                    <option value="teilisoliert">teilisoliert</option>
                </select>

                <h5 style = "margin-top: 15px;color: #120a8f; padding-left: 5px; text-decoration: underline;float:left;width: 96px;margin-bottom: 5px">BREITE :</h5>
                <h4 style = "margin-top: 15px;color: #120a8f; padding-left: 5px; text-decoration: underline; float:left;width: 96px;margin-bottom: 5px; font-size: 13px">LANGE :</h4>
                    <h5 style = "margin-top: 15px;color: #120a8f; padding-left: 5px; text-decoration: underline; float:left;width: 96px;margin-bottom: 5px">FARBE  :</h5>

                    <select class="skucuk" onchange = "closeOpts(this.name);showLange(this.name)" name="widthl" id="widthl" style="font-family:Calibri; width:90px; margin-top:5px; border-radius: 3px; margin-left:2px" disabled>

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

                    <select class = "skucuk" onchange = "closeOpts(this.name); showFarbe(this.name)" name="lenl" id="lenl" style="font-family:Calibri; width:90px; margin-top:5px; border-radius: 3px; margin-left:10px" disabled>

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

                    <select class="skucuk" name="farbel" id="farbel" onchange="changePhotoLeft();" style="font-family:Calibri; width:90px; margin-top:5px; border-radius: 3px; margin-left:10px" disabled>

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

                    <h5 style = "color: #120a8f; padding-left: 5px; margin-top:20px;margin-bottom:5px;float:left; text-decoration: underline">BESCHRIFTUNG LINKS(+0.5 EUR):</h5>

                    <input type="number" id="beschlink" name="beschlink" value="0" min="0" style="    margin-top: 20px; width: 60px; float: right; border-radius: 3px; margin-right: 5px;margin-bottom: 3px;height: 11px;font-size: 12px;"/>

        </div>

        <div class="korta_div" style="margin-top:12px; float: left; margin-left: 12px; width: 300px; height: 210px; background-color:silver;border-radius:3px">
            <h3 style = "text-align:center; color: #120a8f; padding: 5px; font-size: 15px; border-bottom: 1px solid #120a8f">KABEL</h3>
            <h4 style = "color: #120a8f; padding-left: 5px; float:left;margin-top:5px; text-decoration: underline;margin-bottom: 5px; font-size: 13px">KABELTYP:</h4>
                <h5 style = "color: #120a8f; padding-left: 5px; margin-left:82px; margin-top:5px; text-decoration: underline;margin-bottom: 5px;float: left">KABELDICKE:</h5>
                <select class="skucuk" onchange = "filterSizeofCables()" name="kabeltyp" id="kabeltyp" style="font-family:Calibri;float:left; width:130px; height: auto; margin-top:5px; border-radius:3px; margin-left: 2px;margin-bottom: 5px">
                    <option value = "0" selected="selected">Bitte Auswaehlen</option>

                    <option value="1">UL 1007</option>

                    <option value="2">UL 1015</option>

                    <option value="3">UL 1061</option>

                    <option value="4">UL 1071</option>


                </select>

                <select class="skucuk" name="kabeldicke" id="kabeldicke" style="font-family:Calibri; width:130px; height: auto; float:left; margin-top: 5px; margin-left:34px; border-radius:3px" disabled>

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

                <h5 style = "color: #120a8f; padding-left: 5px; margin-top:15px;float:left; text-decoration: underline; width:100px;margin-bottom: 5px;clear:left">LANGE( MM ):</h5>

                <input type="number" id="lenk" name="lenk" min="0" placeholder="Bitte Schreiben.." style="margin-top:12px;width: 127px;float:right; border-radius: 3px; margin-right:4px;font-size: 12px;height: 16px"/>

                <h5 style = "color: #120a8f; padding-left: 8px; margin-top:10px;float:left; text-decoration: underline; width: 150px; clear:both; margin-bottom: 5px;text-align: left">FARBE:</h5>

                <select class="skucuk" onchange="resdegorta()" name="farbek" id="farbek" style="font-family:Calibri; width:123px; margin-top:10px; border-radius: 3px;margin-left: 15px;float: left;margin-bottom: 5px">

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

                <h5 style = "color: #120a8f; padding-left: 5px; margin-top:6px;float:left; text-decoration: underline;margin-bottom: 5px">BESCHRIFTUNG MITTE(+0.5 EUR):</h5>

                <input type="number" id="beschmid" name="beschmid" min="0" placeholder = "Bitte schreiben..." style="margin-top:4px;width: 59px;float:right; border-radius:3px; margin-right:4px;height: 11px;font-size: 11px"/>


        </div>

        <div class = "korta_div" id= "divRight" style="margin-top:12px; float:right;width: 300px; height: 210px; background-color: silver; margin-left: 10px; border-radius:3px">
            <h3 style = "text-align:center;color: #120a8f; padding: 5px; font-size: 15px; border-bottom: 1px solid #120a8f ">RECHTE SEITE</h3>
            <h5 style = "margin-top: 5px;color: #120a8f; padding-left: 5px; text-decoration: underline; float:left;margin-bottom: 5px">VERBINDER :</h5>
            <h5 style = "margin-top: 5px;color: #120a8f; padding-left: 5px; text-decoration: underline; float:left; margin-left: 90px;margin-bottom: 5px">ISOLIERUNG :</h5>
            <select class="sorta" onchange="changePhotoRight()" name="rechte" id="rechte" style="font-family:Calibri; width:150px; margin-top:5px; border-radius: 3px; margin-left:2px; float:left">

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

            <select class="sorta" onchange = "closeOpts(this.name);changePhotoRight1();showBreite(this.name)" name="isor" id="isor" style="font-family:Calibri; width:140px; margin-top:5px; border-radius: 3px; margin-left:7px; float:left" disabled>

                <option value="0">Bitte Auswaehlen</option>

                <option value="isoliert">isoliert</option>

                <option value="ohne isolation">ohne isolation</option>

                <option value="ohne isolation(verzinnt)">ohne isolation(verzinnt)</option>

                <option value="vollisoliert">vollisoliert</option>

                <option value="abisoliert">abisoliert</option>

                <option value="teilisoliert">teilisoliert</option>

            </select>

            <h5 style = "margin-top: 15px;color: #120a8f; padding-left: 5px; text-decoration: underline;float:left;width: 90px;margin-bottom: 5px">BREITE :</h5>
            <h5 style = "margin-top: 15px;color: #120a8f; padding-left: 5px; text-decoration: underline; float:left;width: 85px; margin-left: 5px;margin-bottom: 5px">LANGE :</h5>
            <h5 style = "margin-top: 15px;color: #120a8f; padding-left: 5px; text-decoration: underline; float:left;width: 85px; margin-left: 13px;margin-bottom: 5px">FARBE  :</h5>

            <select class="skucuk" onchange = "closeOpts(this.name);showLange(this.name)" name="widthr" id="widthr" style="font-family:Calibri; width:90px; margin-top:5px; border-radius: 3px; margin-left:2px" disabled>

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

            <select class="skucuk" onchange = "closeOpts(this.name);showFarbe(this.name)" name="lenr" id="lenr" style="font-family:Calibri; width:90px; margin-top:5px; border-radius: 3px; margin-left:10px" disabled>

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

            <select class="skucuk" onchange="changePhotoRight()" name="farber" id="farber" style="font-family:Calibri; width:90px; margin-top:5px; border-radius: 3px; margin-left:10px" disabled>

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

            <h5 style = "color: #120a8f; padding-left: 5px; margin-top:20px;float:left; text-decoration: underline">BESCHRIFTUNG RECHTS(+0.5 EUR):</h5>

            <input type="number" id="beschright" name="beschright" value="0" min="0" style="margin-top:18px;width: 50px;float:right; border-radius: 3px; margin-right: 4px;height: 11px;font-size: 11px" />

        </div>
    </div>
    <div class="buyuk_div" align="center" style="width: 930px">
        <div class="buyuk_div" style= "width: 930px; height: 50px; background-color: silver; border-radius: 3px; display: inline-block; margin-top: 10px; clear: left" >
            <h5 style = "color: #120a8f; padding-left: 5px;float:left; text-decoration: underline; font-size:12px; margin-top:25px">ANZAHL: </h5>
            <input type="number" id="anzahl" name="anzahl" value="0" min="0" style="width: 101px; border-radius:3px; margin-left:10px; margin-top: 20px;float: left"/>
        </div>
    </div>
    <div class="buyuk_div" align="center" style = "width: 930px">
        <div class="buyuk_div" style= "width: 930px; height: 210px; background-color: silver; border-radius: 3px; display: inline-block; margin-top: 10px;clear:left" >

            <table style="width:100%; height:210px">
                <tr>
                    <th style=" float:left; padding: 5px; border: 1px solid white; width:33%; height: 88%">ARTIKELNUMMER</th>
                    <th style=" float:left; padding: 5px; border: 1px solid white; width:30%; height: 88%">PREIS NETTO</th>
                    <th style=" float:left; padding: 5px; border: 1px solid white; width:33%; height: 88%">PREIS BRUTTO</th>
                </tr>
                <tr>
                    <td id= "artab" style=" float:left; padding: 5px; border: 1px solid white; width:33%; height: 87%; color: black"></td>
                    <td style=" float:left; padding: 5px; border: 1px solid white; width:30%; height: 87%"></td>
                    <td style=" float:left; padding: 5px; border: 1px solid white; width:33%; height: 87%"></td>
                </tr>
                <tr>
                    <td style=" float:left; padding: 5px; border: 1px solid white; width:33%; height: 100% ;color: black"></td>
                    <td style=" float:left; padding: 5px; border: 1px solid white; width:30%; height: 100%"></td>
                    <td style=" float:left; padding: 5px; border: 1px solid white; width:33%; height: 100%"></td>
                </tr>
            </table>

        </div>
    </div>

    <div class="buyuk_div" align="center" style="width: 940px;">
        <div class ="buyuk_div" style= "width: 940px; height: 50px; background-color: silver; border-radius: 3px; box-shadow: 2px 3px; display: inline-block; margin-top: 10px;clear: left;" >

            <button type="submit" name= "submit" style="border-radius: 3px; width:10%; height:40px; margin:5px; background-color: #120a8f; color: white; font-size: 10px;float: left">
                PRODUKT AKTUALISIEREN</button>

            <button  type="button" onclick="redirection()" name= "redirect" style="float: right; border-radius: 3px; width:10%; height:40px; margin:5px; background-color: #120a8f; color: white; font-size: 10px">
                ZUM PRODUKT</button>
        </div>
    </div>
        </form>

    </div>
</div>

 <script src="{{ URL::to('/') }}/js/configurator2.js"></script>
 <script src="{{ asset('js/ajax.js') }}"></script>
