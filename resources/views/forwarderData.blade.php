<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="/css/forwarderData.css" rel="stylesheet">
    <title>Application Data</title>
  </head>
  <body>
    <h1 class="head">Applicant Data</h1>
  <div class="box">
    <table class="table table-striped table-hover table-bordered">
    
         <tr>
            <th>Application number: </th>
           <td>{{$forwarderData->Application_no}}</td>
        </tr>
        <tr>
            <th>Name: </th>
           <td>{{$forwarderData->name}}</td>
        </tr>
        <tr>
            <th>Age: </th>
           <td>{{$forwarderData->age}}</td>
        </tr>
        <tr>
            <th>Gender: </th>
           <td>{{$forwarderData->gender}}</td>
        </tr>
        <tr>
            <th>email: </th>
           <td>{{$forwarderData->email}}</td>
        </tr>
        <tr>
            <th>Contact: </th>
           <td>{{$forwarderData->contact}}</td>
        </tr>
        <tr>
            <th>Place Of Birth: </th>
           <td>{{$forwarderData->place_Of_Birth}}</td>
        </tr>
        <tr>
            <th>Occupation: </th>
           <td>{{$forwarderData->occupation}}</td>
        </tr>
        <tr>
            <th>Monthly Income: </th>
           <td>{{$forwarderData->monthly_Income}}</td>
        </tr>
        <tr>
            <th>Education: </th>
           <td>{{$forwarderData->education}}</td>
        </tr>
        <tr>
            <th>Father's Name: </th>
           <td>{{$forwarderData->father_Name}}</td>
        </tr>
        <tr>
            <th>Mother's Name: </th>
           <td>{{$forwarderData->mother_Name}}</td>
        </tr>
        <tr>
            <th>Spouse Name: </th>
           <td>{{$forwarderData->spouse_Name}}</td>
        </tr>
        <tr>
            <th>Present Address: </th>
           <td>{{$forwarderData->present_Address}}</td>
        </tr>
        <tr>
            <th>Sub Locality1: </th>
           <td>{{$forwarderData->sub_Locality1}}</td>
        </tr>
        <tr>
            <th>Sub Locality2: </th>
           <td>{{$forwarderData->sub_Locality2}}</td>
        </tr>
        <tr>
            <th>Location: </th>
           <td>{{$forwarderData->location}}</td>
        </tr>
        <tr>
            <th>District: </th>
           <td>{{$forwarderData->district}}</td>
        </tr>
        <tr>
            <th>State: </th>
           <td>{{$forwarderData->state}}</td>
        </tr>
        <tr>
            <th>Pincode: </th>
           <td>{{$forwarderData->pinCode}}</td>
        </tr>
        <tr>
            <th>Country: </th>
           <td>{{$forwarderData->country}}</td>
        </tr>
        <tr>
            <th>Police Station: </th>
           <td>{{$forwarderData->police_Station}}</td>
        </tr>
        <tr>
            <th>Post Office: </th>
           <td>{{$forwarderData->post_Office}}</td>
        </tr>
        <tr>
            <th>Detail Of Residence for the last 20 years: </th>
           <td>{{$forwarderData->detail_Of_Residence}}</td>
        </tr>
        <tr>
            <th>Constituency No: </th>
           <td>{{$forwarderData->constituency_No}}</td>
        </tr>
        <tr>
            <th>Constituency Name: </th>
           <td>{{$forwarderData->constituency_Name}}</td>
        </tr>
        <tr>
            <th>Id Card: </th>
           <td>{{$forwarderData->id_Card}}</td>
        </tr>
        <tr>
            <th>Year Of Residence: </th>
           <td>{{$forwarderData->year_Of_Residence}}</td>
        </tr>
        <tr>
            <th>Purpose for Residential Certificate: </th>
           <td>{{$forwarderData->purpose_For_Residential_Certificate}}</td>
        </tr>
        <tr>
            <th>Date: </th>
           <td>{{$forwarderData->date}}</td>
        </tr>
        <tr>
            <th>Voter Id Card: </th>
           <td><button id="views" class="btn btn-primary"><a href="/public/images/{{$forwarderData->file1}}" target="_blank" id='in'>View</a></button> <button id="downloads" class="btn btn-info"> <a href="/download1/{{$forwarderData->id}}" id="out">Download</a></button></td>
        </tr>
        <tr>
            <th>Village Council Paper: </th>
            <td><button id="views" class="btn btn-primary"><a href="/public/images/{{$forwarderData->file2}}" target="_blank" id="in">View</a></button> <button id="downloads" class="btn btn-info"> <a href="/download2/{{$forwarderData->id}}" id="out">Download</a></button></td>
        </tr>
        <tr>
            <th>Other Documents: </th>
           <td><button id="views" class="btn btn-primary"><a href="/public/images/{{$forwarderData->file3}}" target="_blank" id="in">View</a></button> <button id="downloads" class="btn btn-info"> <a href="/download3/{{$forwarderData->id}}" id="out">Download</a></button></td>
        </tr>
    
</table>
</div>
<form action="/status/{{$forwarderData->id}}" method="POST">
@csrf
<div class="butt">
<div class="text-center">
   <button type="submit" class="btn btn-success" name="approve" value="approve">Approve</button>
   <button type="submit" class="btn btn-danger" name="reject" value="reject">Reject</button>
<div> 
<div>
</form>
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