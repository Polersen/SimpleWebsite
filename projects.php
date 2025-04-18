<?php
$title = "Om mig";
$content = '
<section>
    <h2>Projekt <button class="toggleHeader btn btn-sm btn-outline-success" data-target="projects" style="font-size: 0.5em;">Klicka här</button></h2>
    <div id="projects" style="display: none;">
        <div class="mb-3">
            <h4>Game Of Thrones API</h3>
            <p>Ett API anrop som hämtar data om specifika hus och karaktärer från Game Of Thrones böckerna.</p>
            <p>
                <a href="https://github.com/Polersen/GoT_API">Github Repo</a>
            </p>
        </div>

        <div class="mb-3">
            <h4>Filhanterare</h3>
            <p>En filhanterare som gör det möjligt att kopiera och flytta filer til och från olika mappar.</p>
            <p>
                <a href="https://github.com/Polersen/FileManager">Github Repo</a>
            </p>
        </div>

        <div class="mb-3">
            <h4>Temperaturomvandlare</h3>
            <p>En temperaturomvandlare som använder ett MAUI gränssnitt.</p>
            <p>
                <a href="https://github.com/Polersen/MauiTempConverter">Github Repo</a>
            </p>
        </div>
    </div>
</section>
';
include '_layout.php';
?>







