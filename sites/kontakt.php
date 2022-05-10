<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Kontakt</title>

  

</head>
<body>
    
    <body>
        <div class="header ">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                   
                        <a class="navbar-brand" href="#">
                          <img src="../images/citiologo.png" width="249px" height="56px" alt="">
                        </a>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="../index.html"><span></span>Naslovnica</a></li>
                      <li><a href="../sites/obavijesti.html"><span></span>Obavijesti</a></li>
                      <li><a href="../sites/djelatnosti.html"><span></span>Djelatnosti</a></li>
                      <li><a href="../sites/kontakt.php"><span></span>Kontakt</a></li>
                      <li><a href="../sites/dokumentacija.html"><span></span>Dokumentacija</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
      </div>


      <main class="container ">
      <div class="kontakt row text-center">
  <div class="col-sm-3"><i class="glyphicon glyphicon-envelope"></i>
  <h2> E-mail</h2>
  <p> Računovodstvo: cito_doo@optinet.hr, racunovodstvo@cito-djakovo.hr <br> <br>
    Tehnička služba: mario.omazic@cito-djakovo.hr</p>
  </div>
  <div class="col-sm-3"><i class="glyphicon glyphicon-time"></i>
    <h2> Radno vrijeme
    </h2>
  <p> ponedjeljak-petak: <br> 07:00-15:00 </p></div>
  <div class="col-sm-3"><i class="glyphicon glyphicon-map-marker"></i>
    <h2>Sjedište/adresa</h2>
  <p> Đakovo (Grad Đakovo), Matije Gupca 13</p></div>
  <div class="col-sm-3"><i class="glyphicon glyphicon-earphone"></i>
    <h2> Telefon</h2>
  <p>031 821 164, 031 811 161</p></div>

</div>

<div class="form-container">
<form action="contact.php" method="post">
        <div class="input-row">
            <label style="padding-top: 20px;">Ime i Prezime</label> <input
                type="text" class="input-field" name="visitor_name"
                id="userName" required> 
        </div>
        <div class="input-row">
            <label>Email</label><input type="email"
                class="input-field" name="visitor_email" id="userEmail" required>
        </div>
        <div class="input-row">
            <label>Naslov</label><input type="text"
                class="input-field" name="email_title" id="subject" required/>
        </div>
        <div class="input-row">
            <label>Poruka</label>
            <textarea name="visitor_message" id="content"
                class="input-field" cols="60" rows="6"></textarea>
        </div>
        <div class="input-row">
    <label for="department-selection">Odaberi poslovnu jedinicu:</label>
    <select id="department-selection" name="concerned_department" required>
    <option value="teh"> Tehnička služba</option>
        <option value="rac">Računovodstvo</option>

    </select>
  </div>
        <div>
            <input type="submit" name="send" class="button-send" required
                value="Pošalji" />
        </div>
    </form>
</div>



      </main>
      <small><a href="https://www.openstreetmap.org/?mlat=45.30945&amp;mlon=18.41311#map=19/45.30945/18.41311">Prikaži veću kartu</a></small>
      <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=18.411342501640323%2C45.30861335294706%2C18.41488301753998%2C45.31027710244374&amp;layer=mapnik&amp;marker=45.30944523379998%2C18.41311275959015" ></iframe>
        <footer class="row"> 
        <div>
        <div class="col-sm-4 f1"><img src="../images/citiologo.png" alt=""></div>
        <div class="col-sm-4">
        <h2>CITO ĐAKOVO d.o.o. za usluge</h2>
        <p>MBS: 01455133 <br> OIB: 50537533179 <br>Tel: 031 821 164, 031 811 161
          <br>Sjedište/adresa:
          Đakovo (Grad Đakovo), Matije Gupca 13
          
          <br> Direktor Ivan Šimić, dipl. iur. direktor@cito-djakovo.hr
          <br>
          Voditelj tehničke službe:
           Mario Omazić
          mario.omazic@cito-djakovo.hr
          <br>
          Osnivač društva: 
               Grad Đakovo, Đakovo, Trg dr.Franje Tuđmana 4, OIB: 23632093169
               <br> Temeljni kapital
               40.000,00 kuna
                <br> IBAN
                PBZ HR1323400091110137738
        
        
        </p>
        


        </div>
        <div class="col-sm-4">
       
            <p>
                 <br>Podaci o poslovnom subjektu, izvadak iz Sudskog registra:
                 <br> https://sudreg.pravosudje.hr/registar/f?p=150:28:0::NO:28:P28_SBT_MBS:030065317# 
                <h4>Poslovne jedinice:</h4>
                Računovodstvo: cito_doo@optinet.hr, racunovodstvo@cito-djakovo.hr <br>
                Tehnička služba: mario.omazic@cito-djakovo.hr
                
                
                
                
                
                
                
                
                
                
                
                </p>
            
            
            </div>
        </div>
        
        </footer>
</body>
</html>