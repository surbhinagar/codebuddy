@extends('admin.main')
<div class="main">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user as $row)
    <tr>
      <th scope="row">1</th>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
     
    </tr>
   @endforeach
  </tbody>
</table>
</div>