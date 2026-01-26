<?php
$pageTitle = "CarHamro";
$container = "max-w-[1304px] mx-auto px-4";
require __DIR__ . "/components/head.php";
require __DIR__ . "/components/header.php";
?>

<main class=" <?= $container ?> max-w-7xl mx-auto px-4">
    <?php require __DIR__ . "/components/hero.php"; ?>
    <?php include __DIR__ . "/components/browse-by-type.php"; ?>
    <?php
    $href = "/sell-your-car.php";
    $img  = "./assets/images/banners/promo-banner.gif";
    $alt  = "Sell your car on CarHamro";

    include __DIR__ . "/components/ad-banner-image.php";
    ?>

    <?php
    $sectionId = "mostSearchedCars";
    $title = "Most Searched Cars";
    $viewAllLink = "/most-searched.php";

    $tabs = [
        ["key" => "0-3",  "label" => "0-3 Lakhs"],
        ["key" => "3-5",  "label" => "3-5 Lakhs"],
        ["key" => "5-10", "label" => "5-10 Lakhs"],
        ["key" => "10+",  "label" => "Above 10 Lakhs"],
    ];

    $cards = [
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-1.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-2.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-3.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-4.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-5.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-6.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-7.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-8.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-9.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-10.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-11.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "0-3", "title" => "Ford EcoSport Titanium (First Owner)", "img" => "./assets/images/cars/demo-12.jpg", "miles" => "50 Miles", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 28–36 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ];

    include __DIR__ . "/components/car-cards-section.php";
    ?>

    <?php
    $sectionId = "recentlyAddedUsedCars";
    $title = "Recently Added Used Cars";
    $viewAllLink = "/used-cars.php";

    $tabs = [
        ["key" => "all",    "label" => "All"],
        ["key" => "suv",    "label" => "SUV"],
        ["key" => "sedan",  "label" => "Sedan"],
        ["key" => "ev",     "label" => "Electric"],
    ];

    $cards = [
        ["tab" => "all", "title" => "Hyundai Creta (2021) - Single Owner", "img" => "./assets/images/cars/demo-1.jpg", "miles" => "18,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 45–52 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "Kia Seltos (2020) - Well Maintained", "img" => "./assets/images/cars/demo-2.jpg", "miles" => "22,000 km", "fuel" => "Petrol", "trans" => "Manual", "price" => "NPRs 42–49 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "BYD Atto 3 (2023) - Like New", "img" => "./assets/images/cars/demo-3.jpg", "miles" => "6,000 km", "fuel" => "Electric", "trans" => "Automatic", "price" => "NPRs 75–85 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "Toyota Corolla (2019) - Clean", "img" => "./assets/images/cars/demo-4.jpg", "miles" => "35,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 38–44 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "Hyundai Creta (2021) - Single Owner", "img" => "./assets/images/cars/demo-1.jpg", "miles" => "18,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 45–52 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "Kia Seltos (2020) - Well Maintained", "img" => "./assets/images/cars/demo-2.jpg", "miles" => "22,000 km", "fuel" => "Petrol", "trans" => "Manual", "price" => "NPRs 42–49 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "BYD Atto 3 (2023) - Like New", "img" => "./assets/images/cars/demo-3.jpg", "miles" => "6,000 km", "fuel" => "Electric", "trans" => "Automatic", "price" => "NPRs 75–85 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "Toyota Corolla (2019) - Clean", "img" => "./assets/images/cars/demo-4.jpg", "miles" => "35,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 38–44 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "Hyundai Creta (2021) - Single Owner", "img" => "./assets/images/cars/demo-1.jpg", "miles" => "18,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 45–52 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "Kia Seltos (2020) - Well Maintained", "img" => "./assets/images/cars/demo-2.jpg", "miles" => "22,000 km", "fuel" => "Petrol", "trans" => "Manual", "price" => "NPRs 42–49 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "BYD Atto 3 (2023) - Like New", "img" => "./assets/images/cars/demo-3.jpg", "miles" => "6,000 km", "fuel" => "Electric", "trans" => "Automatic", "price" => "NPRs 75–85 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
        ["tab" => "all", "title" => "Toyota Corolla (2019) - Clean", "img" => "./assets/images/cars/demo-4.jpg", "miles" => "35,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 38–44 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ];

    include __DIR__ . "/components/car-cards-section.php";
    ?>
    <?php include __DIR__ . "/components/promo-banner.php"; ?>
    <?php include __DIR__ . "/components/emi-calculator.php";   ?>
    <?php include __DIR__ . "/components/popular-brands.php";   ?>
    <?php include __DIR__ . "/components/blog-section.php";   ?>
    <?php include __DIR__ . "/components/reviews-section.php";   ?>

    <?php include __DIR__ . "/components/why-carhamro.php";   ?>
    <?php include __DIR__ . "/components/FAQ.php";   ?>

</main>
<?php

include __DIR__ . "/components/footer.php";   ?>

<!-- <script src="."></script> -->
<script src="js/main.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@motionone/dom/dist/motion-one.min.js"></script> -->
<script type="module" src="js/motion-carousel.js"></script>

</body>

</html>