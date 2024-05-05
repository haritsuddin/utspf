@extends('layout.app')
@section('content')
<h2 style="margin-left: 10px;" class="fw-bold">{{ $pageTitle }}</h2>
    <div class="row ">
        <div class="col ">
            <div class="card roundeed-lg " style="color :white; background-color: #37517e">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <h4>
                        PROFILE
                        </h4>
                        <hr>
                        <img src="{{ Vite::asset('resources/images/profile.jpeg') }}" alt="" style="width: 250px;">
                    </div>

                </div>
                <div class="text-center">
                    <h3>ASAWINKA HARITSUDDIN</h3>
                </div>
                <div class="container mt-2">
                    <div class="row">
                        <div class="col">
                            <div class="rounded text-center  bg-primary text-white" style="margin-left: 3rem;">Free Fire</div>
                        </div>
                        <div class="col">
                            <div class="rounded  text-center  bg-primary text-white" style="margin-right: 3rem;">Mobile Legends</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="rounded mt-2  text-center  bg-primary text-white" style="margin-right: 8rem; margin-left: 8rem;">PUBG Mobile</div>
                    </div>

                </div>
                <div class="container mt-3 text-center">
                    <a style="text-decoration:none; color:white;" >clash royale</a>
                    <div class="progress mx-5 ">
                        <div class="progress-bar " role="progressbar" style="width: 85%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="container mt-3 text-center">
                    <a style="text-decoration:none; color:white;" >Mobile Legends</a>
                    <div class="progress mx-5 ">
                        <div class="progress-bar " role="progressbar" style="width: 95%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="container mt-3 mb-4 text-center">
                    <a style="text-decoration:none; color:white;" >PUBG Mobile</a>
                    <div class="progress mx-5 ">
                        <div class="progress-bar " role="progressbar" style="width: 75%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card " style="color :white; background-color: #37517e">
                <div class="card-body ">
                    <div>
                        <h3>
                            BIO
                        </h3>
                    </div>
                    <div>
                    <p>Halo! Saya Haritsuddin dengan NIM 1204220092, seorang mahasiswa yang suka berolahraga dan sepertinya saya salah jurusan karena minat dan bakat ada pada olahraga jadi sebaiknya unesa olahraga ga sih</p>
                        </>
                    </div>
                </div>
            </div>
            <div class="card mt-4" style="color :white; background-color: #37517e">
                <div class="card-body ">
                    <div>
                        <h3>
                            HOBI
                        </h3>
                    </div>
                    <div>
                        1.Sepak Bola <br>
                        2.Billiard <br>
                        3.Gym <br>
                        4.Pargoy
                    </div>
                </div>
            </div>
            <div class="card  mt-4" style="color :white; background-color: #37517e">
                <div class="card-body ">
                    <div>
                        <h3>
                            Fav Fod
                        </h3>
                    </div>
                    <div>
                    1.Otak <br>
                        2.Ayam <br>
                        3.Ayam <br>
                        4.Dan Ayam lagi
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card " style="color :white; background-color: #37517e">
                <div class="card-body text-center ">
                <h3>
                        Fav Gradient
                        </h3>

                </div>
                <div class="container text-center">
                    <img src="{{ Vite::asset('resources/images/atas.png') }}" alt="" style="width: 350px;">
                    <img class="mt-3" src="{{ Vite::asset('resources/images/tengah.png') }}" alt="" style="width: 340px; height:100px;">
                    <img  class="mt-3 mb-3" src="{{ Vite::asset('resources/images/bawah.png') }}" alt="" style="width: 330px; height:264px;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
