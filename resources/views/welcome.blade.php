@extends('_layouts.main') 

@section('content')






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Slideshow Otomatis 4 Gambar</title>
<style>
    .slide-container {
        width: 100%;
        overflow: hidden;
        position: relative;
    }
    .slide-wrapper {
        display: flex;
        transition: transform 0.5s ease;
    }
    .slide-item {
        flex: 0 0 auto;
        width: 100%;
        max-width: 100%;
        overflow: hidden;
    }
    .slide-item img {
        width: 100%;
        height: auto;
        display: block;
    }
</style>
</head>
<body>

<div class="slide-container">
    <div class="slide-wrapper" id="slideshow">
        <?php
       
        $gambar1 = 'src/images/car/mobil-02.jpg';
        $gambar2 = 'src/images/car/mobil-03.jpg';
        $gambar3 = 'src/images/car/mobil-04.jpg';
        $gambar4 = 'src/images/car/mobil-05.jpg';

        $gambarArray = [$gambar1, $gambar2, $gambar3, $gambar4];

       
        foreach ($gambarArray as $gambar) {
            echo '<div class="slide-item"><img src="' . $gambar . '" alt="Gambar"></div>';
        }
        ?>
    </div>
</div>

<script>
    var currentSlide = 0;
    var slides = document.querySelectorAll('.slide-item');
    var totalSlides = slides.length;

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        var offset = -100 * currentSlide;
        document.getElementById('slideshow').style.transform = 'translateX(' + offset + '%)';
    }

    setInterval(nextSlide, 3000); // Ganti gambar setiap 3 detik
</script>

</body>
</html>


@endsection
