<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/statusPage.css" rel="stylesheet">
    <title>Status</title>
    <style>
      a{
        background-color: #52BE80;
        color: white;
        padding: 5px;
        text-decoration: none;
        border: 1px;
        border-radius: 22px;
      }
      a:hover {
        background-color: yellow;
        color: white;

        }
      #cert{

      }
    </style>
  </head>
  <body>
 
  <div>
  <form action="{{ url('/HomeSearch') }}" method="get">
  @csrf
    <input type="search" name="search" placeholder="Search Applicant">
    <button type="submit" class="btn btn-primary">Search</button>
    </form>
    </div>
    <h1>Check Applicant Status</h1>
<div class="box">
    <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Application No.</th>
      <th scope="col">Date</th>
      <th scope="col">Forwarder Status</th>
      <th scope="col">Circle Officer Status</th>
      <th scope="col">Mandal OfficerStatus</th>
      <th scope="cole">Certificate</th>
    </tr>
  </thead>
  @foreach($Application_no as $item)
  <tbody>
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->Application_no}}</td>
      <td>{{$item->date}}</td>
      <td>{{$item->Forwarder_Status}}</td>
      <td>{{$item->Circle_Officer_Status}}</td>
      <td>{{$item->Mandal_Officer_Status}}</td>
      @if($item->Circle_Officer_Status == 'Issued'|| $item->Mandal_Officer_Status == 'Issued')
      <td id="ackno"><a href="/acknowledgement/{{$item->id}}">Acknowledgement</a></td>
      <td id="cert"><a href="/certificate/{{$item->id}}">Certificate</a></td>
      @else
      <td style="text-align:center;">Pending</td>
      <td style="text-align:center;">Pending</td>
      @endif
    </tr>
  </tbody>
  @endforeach
</table>
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