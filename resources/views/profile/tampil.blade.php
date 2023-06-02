@extends('layout.master')

@section('title')
    Profile
@endsection
@section('content')
    <div class="container rounded bg-white mt-5 mb-5">

        <?php foreach ($profile as $a) { ?>

        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <?php if ($a->profil_picture === null): ?>
                    <i class="typcn typcn-user-outline mr-0" style="font-size: 100px; color: #000000;"></i>
                    <?php else: ?>
                    <img class="rounded-circle mb-3" style="width: 150px; height: 150px;" src="{{ asset('image/' .$a->profil_picture) }}">
                    <?php endif; ?>
                    <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                </div>
            </div>

            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings </h4>
                    </div>
                    <div class="row mt-2">

                        <div class="col-md-12"><label class="labels">Username : <?= $a->username ?></label><br>
                            <label class="labels">Nama : {{ Auth::user()->name }} </label>
                            <br>
                            <label class="labels" @disabled(true)>Email : {{ Auth::user()->email }} </label>
                            <br>
                            <label class="labels">Gender : {{ $a->gender }}</label>
                            <br>
                            <label class="labels">Tanggal Lahir : <?= $a->date_of_birth ?></label>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <a class="btn btn-primary profile-button" href="/profile/edit/{{ Auth::user()->id }}"
                            type="button">Edit Profile</a>
                    </div>
                </div>
            </div>

        </div>
        <?php } ?>
    @endsection
