
@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Application number</th>
                    <th scope="col">Purpose</th>
                    </tr>
                </thead>
                @foreach($circles as $item)
                @if($item->Circle_Officer_Status == '')
                <tbody>
                    <tr>
                    <td>{{$item->id}}</td>
                    <td><a href="/circleData/{{$item->id}}">{{$item->name}}</a></td>
                    <td>{{$item->Application_no}}</td>
                    <td>{{$item->purpose_For_Residential_Certificate}}</td>
                    </tr>
                @endif
                </tbody>
                @endforeach
                </table>
               

               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
               