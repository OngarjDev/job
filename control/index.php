<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-pzjw8/9eYfoi1bLN4tye3Hcv3weHAHaFjQbFi4FpFT8fxjqs9xZPIJSKkSf5C5q8" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <style>
    .navbar-brand {
        color: #FE6D43;
        /* หรือรหัสสีหรือชื่อสีที่ต้องการ */
    }

    /* nuvbar  */
    .nav-item {
        position: relative;
    }

    .nav-item::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        /* ความสูงของเส้นที่ต้องการ */
        background-color: transparent;
        /* สีของเส้นที่ต้องการ */
        bottom: 0;
        left: 0;
        transition: background-color 0.3s ease;
        /* เพื่อให้มีการเปลี่ยนสีค่อยๆ */
    }

    .nav-item:hover::after {
        background-color: #FE6D43;
        /* สีที่ต้องการเมื่อโฮเวอร์ */
    }

    /* nuvbar  */

    @font-face {
        font-family: 'Mitr';
        src: url('../font/Mitr-Light.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    body {
        font-family: 'Mitr', sans-serif;
    }

    .navbar-underline {
        border-bottom: 3px solid #FE6D43;
        /* ปรับขนาดและสีของขีดเส้นตามต้องการ */
    }

    .line {
        float: left;
        border-right: 2px solid Silver;
        padding-right: 0.3rem;
        margin-right: 0.5rem;
    }

    .card {
        overflow: hidden;
    }

    .card img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    
    </style>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>