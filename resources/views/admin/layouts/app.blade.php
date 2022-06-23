<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Boot Store Website Design Tutorial</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
{{-- 
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css"> --}}

</head>
<body>
    {!! Toastr::message() !!}

    @include('../admin.addBooks')


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
