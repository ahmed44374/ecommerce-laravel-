<!DOCTYPE html>
<html>

<head>
    <x-home-css/>
    <title>
        Giftos
    </title>
</head>

<body>
<div class="hero_area">

    <x-home-header/>
    <x-home-slider/>
</div>
<!-- end hero area -->

<!-- shop section -->

    <x-home-shop-section></x-home-shop-section>

<!-- end shop section -->







<!-- contact section -->
<x-contact></x-contact>
<!-- end contact section -->



<!-- info section -->

<x-info></x-info>
<!-- end info section -->


<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
