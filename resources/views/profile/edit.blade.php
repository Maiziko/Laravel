@extends('layout.master')

@section('title')
    Edit Profile
@endsection
@section('content')

<div class="container rounded bg-white mt-5 mb-5">

    <?php foreach ($profile as $a) { ?>


        <form action="/profile/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  <?php if ($a->profil_picture === null): ?>
                  <i class="typcn typcn-user-outline mr-0" style="font-size: 100px; color: #000000;"></i>
                  <?php else: ?>
                  <img class="rounded-circle mb-3" style="width: 150px; height: 150px;" src="{{ asset('image/' .$a->profil_picture) }}">
                  <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                  <?php endif; ?>
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
                            <div class="col-md-12">
                                <label class="labels">Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="">Choose Gender</option>
                                    <option value="Male" <?= ($a->gender == 'Male') ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?= ($a->gender == 'Female') ? 'selected' : ''; ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Tanggal lahir</label><input type="date" class="form-control" placeholder="" value="<?= $a->date_of_birth; ?>" name="date"></div>
                        </div>
                        <div class="form-group required">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control  " value="<?= $a->profil_picture; ?>">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                </div>
            </div>
        </form>

</div>
<?php } ?>





@endsection