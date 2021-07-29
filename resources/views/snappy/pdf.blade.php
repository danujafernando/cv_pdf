<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
             @page {
                margin: 0cm 0cm;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 2cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
            }

            /** Define the header rules **/
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 10.5cm;

                /** Extra personal styles **/
                text-align: center;
                line-height: 1.5cm;
                background-color: red;
            }

            /** Define the footer rules **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 1.5cm;
                font-size: 8px;
                /** Extra personal styles **/
                color:white;
                text-align: center;
                
            }

            * { font-family: DejaVu Sans, sans-serif; }
			html {
				line-height: 1.15;
				margin: 0;
			}
            body {
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                text-align: left;
                background-color: #fff;
                font-size: 10px;
                margin-left: 36pt;
                margin-right: 36pt;
                margin-top: 1px !important;
            }
            h4 {
                margin-top: 0;
                margin-bottom: 0.5rem;
            }
            p {
                margin-top: 0;
                margin-bottom: 1rem;
            }
            strong {
                font-weight: bolder;
            }
            img {
                vertical-align: middle;
                border-style: none;
            }
            table {
                border-collapse: collapse;
            }
            th {
                text-align: inherit;
            }
            h4, .h4 {
                margin-bottom: 0.5rem;
                font-weight: 500;
                line-height: 1.2;
            }
            h4, .h4 {
                font-size: 1rem;
            }
            .table-top {
                width: 100%;
                margin-bottom: 0;
                color: #212529;
            }
            .table {
                width: 100%;
                margin-bottom: 1rem;
                color: #212529;
            }
            .table th,
            .table td, 
            .table-top th, 
            .table-top td {
                padding: 0.25rem;
                vertical-align: top;
            }
            .table thead th,
            .table-top thead th {
                vertical-align: bottom;
                border-bottom: 2px solid #dee2e6;
            }
            .table tbody + tbody,
            .table-top tbody + tbody {
                border-top: 2px solid #dee2e6;
            }
            .mt-3 {
                margin-top: 1rem !important;
            }
            .mb-3{
                margin-bottom: 1rem !important;
            }
            .pr-0,
            .px-0 {
                padding-right: 0 !important;
            }
            .pl-0,
            .px-0 {
                padding-left: 0 !important;
            }
            .text-right {
                text-align: right !important;
            }
            .text-center {
                text-align: center !important;
            }
            .text-uppercase {
                text-transform: uppercase !important;
            }
            * {
                font-family: "DejaVu Sans";
            }
            body, h1, h2, h3, h4, h5, h6, table, th, tr, td, p, div {
                line-height: 1.1;
            }
            .party-header {
                font-size: 1.5rem;
                font-weight: 400;
            }
            .total-amount {
                font-size: 12px;
                font-weight: 700;
            }
            .border-0 {
                border: none !important;
            },
            hr{
                color: azure;
            }
            .item{
                padding: 0.75rem !important;
            }
            .border-th{
                border-top: 1px solid #dee2e6;
                border-bottom: 1px solid #dee2e6;
            }
            .border-td{
                border-bottom: 1px solid #dee2e6;
            }
            .page-break {
                page-break-after: always;
            }

    </style>
</head>
<body>
    <table class="table" class="table-top" border="0" cellpadding="0" cellspacing="0" >

    </table>
</body>
</html>