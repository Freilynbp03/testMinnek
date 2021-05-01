<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
        <style>
            body {
            height: 100vh;
            display: grid;
            place-items: center center;
            font-family: 'Poppins', sans-serif;
        }

        .btn-raised {
            transition: box-shadow .4s cubic-bezier(.25, .8, .25, 1), transform .4s cubic-bezier(.25, .8, .25, 1);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .26)
        }

        .btn-raised:not([disabled]):active,
        .btn-raised:not([disabled]):focus,
        .btn-raised:not([disabled]):hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .4);
            transform: translate3d(0, -1px, 0)
        }

        .shadow {
            overflow: hidden;
            position: relative;
            transform: translate3d(0, 0, 0)
        }

        .shadow:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            pointer-events: none;
            background-image: radial-gradient(circle, #000 10%, transparent 10.01%);
            background-repeat: no-repeat;
            background-position: 50%;
            transform: scale(10, 10);
            opacity: 0;
            transition: transform .5s, opacity 1.5s
        }

        .shadow:active:before {
            transform: scale(0, 0);
            opacity: .1;
            transition: 0s
        }

        .my-button,
        .my-2 {
            margin-bottom: .5rem !important
            
        }

        .w-xs {
            width: 100px
        }

        .bg-white {
            background-color: #fff !important
        }

        .bg-white .fill {
            fill: #448bff
        }

        .red {
            background-color: #f44336;
            color: #fff
        }

        .red {
            background-color: #f44336;
            color: #fff
        }

        .indigo {
            background-color: #3f51b5;
            color: #fff
        }

        .purple {
            background-color: #9c27b0;
            color: #fff
        }
        a {
        color: black;
        text-decoration: none; 
        }
        a:hover {
        color: #555;
        }
        </style>

<body> 
    <center>
    <div class="my-button container">
        <button class="btn btn-raised shadow my-button w-xs bg-white"><a href="FirstExercise.php">First Exercise </a></button>
        <button class="btn btn-raised shadow my-button w-xs red"><a href="SecondExercise.php">Second Exercise </a></button>
        <button class="btn btn-raised shadow my-button w-xs indigo"><a href="ThirdExercise.php">Third Exercise </a></button>
        <button class="btn btn-raised shadow my-button w-xs purple"><a href="4Exercise.php">Fourth Exercise </a></button>
    </div>
    <div>
        <img src="index.jpg" alt="" width="50%">
    </div>
    </center>

</html>