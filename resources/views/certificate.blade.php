<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <style>
      .box{
    position: relative;
    width: 80%;
    padding: 10px;
    border: 5px solid rgb(0, 0, 0);
    margin: 0;
    margin: auto;
    background-image: url('/css/logos.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 600px;
    padding-top: 1px;
    padding: 10px;
}
img{
    width: 150px;
  padding-left:30px;
    
}
h1{
    font-weight: 900;
    text-align: center;
    font-size: xx-large;
    font-family: "Times New Roman", Times, serif;
}

h2{
    
    text-align: center;
    font-family: "Times New Roman", Times, serif;
    font-weight: 500;
}

.para{
    padding-left: 5%;
    word-spacing: 10px;
    font-size: larger;
    font-family: "Times New Roman", Times, serif;
    font-weight: 500;
    font-size: 20px;
    line-height: 40px;
}
.place{
  font-weight:600;
  margin-bottom:60px;
}
.date{
  font-weight:600;
  text-align:right;
}
p u:after {
  content: "\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0"; 
}
p u:before {
  content: "\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0\0a0"; 
}
#name{
  margin-left:70%;
}
#lal{
  float:right;
}
.dates{
  font-weight:600;
}


    </style>
    <title>Residential Address Certificate</title>
  </head>
  <body>
    <div class="box">
      
    <h1>OFFICE OF THE DEPUTY COMMISSIONER<br>AIZAWL DISTRICT:AIZAWL<br>(JUDICIAL BRANCH)</h1>

    <p class="date">Dated: {{$certificate->district}}, {{$certificate->date}}</p>
    <p class="date">Application No.: {{$certificate->Application_no}} </p>
    

    <br>
    

    <h2><u>Residential Certificate</u></h2>

    <br>
    <br>
    <br>

    <p class="para">This is to certify that Mr/Ms/Shri <u id="namess"><b>{{$certificate->name}}</b></u><br> Daughter/Son of <u><b>{{$certificate->father_Name}}</b></u>  is  residing at <u><b>{{$certificate->present_Address}}</b></u>in <br><u><b>{{$certificate->district}}</b></u> District in the State of<b>{{$certificate->state}}</p>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="place">
     <label for="place" id="place">Place: {{$certificate->district}}</label>
     <label for="sign" id="sign" style="float:right">Signature: <img onclick="window.print()" src="/css/signature.png" alt="signature"> </label>
     </div>
     <div class="dates">
     <label for="dates" id="dates">Date: {{$certificate->date}}</label>
     <label for="name" id="name">Name:</label><label for='lal' id="lal"> LALSANGLIANA</label>
    </div>

      <br>
      <br>

      <div>
        <h3>NOTE:</h3>
        <ul>
          <li>This order is digitally signed and therefore needs no physical signature.</li>
          <li>Authenticity of this order can be verified from  <a href="#">https://edistrict.mizoram.gov.in</a> This order is legally valid as per the Information Technology Act 2000 and its subsequent adament.</li>
          <li>Tempering of this order will attract Pemal Ation.</li>
        </ul>
      </div>
  </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>