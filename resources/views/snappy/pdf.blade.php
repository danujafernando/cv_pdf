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
                margin-left: 0pt;
                margin-right: 0pt;
                margin-top: 0px !important;
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
                margin-top: 36pt;
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
            .main-section{
                clear:both; 
                position:relative;
                height: 100vh;
                margin: auto;
            }
            .left-section{
                position:absolute; 
                padding-right: 38px;
                padding-left: 38px;
                float: left;
                width: 553px;
            }
            .right-section{
                left: 0 !important;
                width: 240px;
                padding-bottom: 19px;
                padding-top: 38px;
                min-height: 297mm;
                float: right;
            }
            .right-side-text{
                font-size: 16px;
                color:white
            }
            .bg-color{
                background: #000;
            }
            .top-padding{
                padding-top: 42px !important;
            }
            .right-size-icon{
                width: 25px;
                height: 25px;
            }
            
            .right-side-first-padding{
                padding-left: 10px !important; 
                padding-right: 5px !important;
            }
            .right-side-second-padding{
                padding-left: 0px !important; 
                padding-right: 20px !important;
            }
    </style>
</head>
<body>
    <div class="main-section" style="page-break-after:auto;">
        <div class="left-section">
            LEFT COLUMN
        </div>
        <div class="right-section">
            <table class="table-top" border="0" cellpadding="0" cellspacing="0" >
                <tr style="padding-top: 10px">
                    <td class="bg-color right-side-first-padding top-padding"><img src="{{ asset($location_marker) }}" class="right-size-icon" /></td>
                    <td class="bg-color right-side-text right-side-second-padding top-padding">No 2, Fonseka rd, Laxshapathiya, <br>Moratuwa, <br>Sri Lanka</td>
                </tr>
                <tr >
                    <td class="bg-color right-side-first-padding"><img src="{{ asset($phone) }}" class="right-size-icon" /></td>
                    <td class="bg-color right-side-text right-side-second-padding">(+94)011 2 624 042</td>
                </tr>
                <tr >
                    <td class="bg-color right-side-first-padding"><img src="{{ asset($device_mobile) }}" class="right-size-icon" /></td>
                     <td class="bg-color right-side-text right-side-second-padding">(+94)071 1 552 445</td>
                </tr>
                <tr >
                    <td class="bg-color right-side-first-padding"><img src="{{ asset($mail) }}" class="right-size-icon" /></td>
                     <td class="bg-color right-side-text right-side-second-padding">ldashanfernando@gmail.com</td>
                </tr>
            </table>
        </div>
    </div>
    <!--
        
    -->
</body>
</html>