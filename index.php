<?php

require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
$faker = Faker\Factory::create();
$dompdf = new Dompdf();

$nama = $faker->name();
$email = $faker->email();

$dompdf->loadHtml
("
    <table border='2'>
        <tr>
        <td>Nama</td>
        <td>Email</td>
        </tr>
        <tr>
        <td>".$nama."</td>
        <td>".$email."</td>
        </tr>
    </table>
");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();