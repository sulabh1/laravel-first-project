<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Hello <b>{{Auth::user()->name}}</b>
           <b style="float: right;">Total Users:
        <span class="badge badge-success">{{count($users)}}</span>
        </b>
        </h2>
    </x-slot>
<div class="container">
    <div class="row">
    <div class="py-12">
<table class="table">
  <thead>
    <tr>
      <th scope="row">SL No.</th>
      <th>Name</th>
      <th>email</th>
      <th>Created_At</th>
    </tr>
  </thead>
  <tbody>
     @foreach ($users as $user)


    <tr>
        <th class="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>

    </tr>
    @endforeach


  </tbody>
</table>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
