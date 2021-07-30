<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
                margin: 0cm 0cm;
        }
    body {
        position: relative;
    }
    .col{
        page-break-before: avoid;
        width: 250px;
        height: 297mm;
    }
    .col1-1 {
        text-align: right;
        background-color: #00dd00;
        position: absolute;
        top: 0px;
        left: 0px;
    }

    .col1-2 {
        text-align: right;
        position: absolute;
        background-color: #1c94c4;
        top: 0px;
        left: 270px;
    }
    </style>
</head>
<body>
    <div class="col col1-1"></div>
    <div class="col col1-2"></div>
</body>
</html>

