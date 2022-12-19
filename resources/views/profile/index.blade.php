@extends('layouts.master')

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('navbar')
    @include('part.navbar')
@endsection

@section('content')
    <div class="card">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary">Profile</h1>
        </div>
        <div class="row">
            <div class="col-auto ml-5 mr-5 my-4">
                @if ($profile->profile_picture != null)
                    <img src="{{ asset('/images/photoProfile/' . $profile->photoProfile) }}"
                        style="width:150px;height:150px;border-radius:100px">
                @else
                    <img src="{{ asset('template/img/boy.png') }}" style="width:100px;height:100px;border-radius:50px">
                @endif
            </div>
            <div class="col-auto mx-4">
                <div class="form-group">
                    <label for="name" class="text-lg text-primary font-weight-bold">Full Name</label>
                    <h4>{{ $profile->user->name }}</h4>
                </div>

                <div class="form-group">
                    <label for="emlpolyee" class="text-lg text-primary font-weight-bold">Emlployee Code</label>
                    <h4>{{ $profile->employee_code }}</h4>
                </div>

                <div class="form-group">
                    <label for="gender" class="text-lg text-primary font-weight-bold">Gender</label>
                    <h4>{{ $profile->gender }}</h4>
                </div>

                <div class="form-group">
                    <label for="prodi" class="text-lg text-primary font-weight-bold">Address</label>
                    <h4>{{ $profile->address }}</h4>
                </div>

                <div class="form-group ">
                    <label for="prodi" class="text-lg text-primary font-weight-bold">Phone Number</label>
                    <h4>{{ $profile->phone_number }}</h4>
                </div>

            </div>
        </div>
        <div class="edit d-flex justify-content-end my-4 mx-4">
            <a href="/profile/{{ $profile->id }}/edit" class="btn btn-primary px-5">Edit Profile</a>
        </div>
    </div>
@endsection
