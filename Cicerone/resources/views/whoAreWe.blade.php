@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: white;
        }


        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <br>
    <div class="d-flex align-self-stretch">
        <div class="card p-4">
            <img src="/img/ErikVergine.jpeg" style="width: 100%">
            <h2>Erik Vergine</h2>
            <p class="title">Project Manager & Programmer</p>
            <p>Università degli studi di Bari - Aldo Moro</p>
            <a herf="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <p><button class="btn btn-info">Contact</button></p>
        </div>
        <div class="card p-3">
            <img src="/img/DavideCarone.jpeg" style="width:100%;">
            <h2>Davide Carone</h2>
            <p class="title">Project Manager & Programmer</p>
            <p>Università degli studi di Bari - Aldo Moro</p>
            <a herf="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <p><button class="btn btn-info">Contact</button></p>
        </div>
        <div class="card p-3">
            <img src="/img/EmidioSchirano.png" style="width:100%">
            <h2>Emidio Schirano</h2>
            <p class="title">Project Manager & Programmer</p>
            <p>Università degli studi di Bari - Aldo Moro</p>
            <a herf="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <p><button class="btn btn-info">Contact</button></p>
        </div>
        <div class="card p-4">
            <img src="/img/AndreaNisio.jpg" style="width:100%">
            <h2>Andrea Nisio</h2>
            <p class="title">Project Manager & Programmer</p>
            <p>Università degli studi di Bari - Aldo Moro</p>
            <a herf="https://www.instagram.com/andrea_nisio.blade.php"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/andrea-nisio-bb4820191/"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.facebook.com/andrea.nisio"><i class="fa fa-facebook"></i></a>
            <p><button href="https://andreanisio97@gmail.com" class="btn btn-info ">Contact</button></p>
        </div>

    </div>

@endsection
