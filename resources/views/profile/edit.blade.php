@extends('layout.master')

@section('title')
profile
@endsection
@section('content')

<div class="container rounded bg-white mt-5 mb-5">

    <?php foreach ($profile as $a) { ?>


        <form action="/profile/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{ asset('image/' .$a->profil_picture) }}"><span class="font-weight-bold">{{ Auth::user()->name }}</span></div>

                </div>

                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings </h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="" value="<?= $a->username; ?>" name="username"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="{{ Auth::user()->name }}" name="namalengkap"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="" value="<?= $a->gender; ?>" name="gender"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Tanggal lahir</label><input type="text" class="form-control" placeholder="" value="<?= $a->date_of_birth; ?>" name="date"></div>
                        </div>
                        <div class="form-group required">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                </div>
            </div>
        </form>

</div>
<?php } ?>





@endsection