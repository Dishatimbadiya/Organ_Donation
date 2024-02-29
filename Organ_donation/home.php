<?php

include_once('helper/connection.php');
include_once('helper/header.php');
?>
<style>
    #hero {
        text-align: center;
        padding: 100px 20px;
        color: #fff;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('static/home.jpg') center/cover no-repeat;
    }

    #hero h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .logo {
        height: 180px;
        width: 180px;
        border-radius: 50%;
        border: 4px solid tan;
    }

    .cta-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: tan;
        color: black;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .cta-button:hover {
        background-color: #696865;
    }

    section {
        background-color: #fff;
        margin: 20px 0;
        padding: 40px 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-size: 2rem;
        color: #000000;
        margin-bottom: 20px;
    }
</style>

<section id="hero">
    <img class="logo" src="static/home.jpg" alt="Organ Donation Hero Image">
    <h1>Give the Gift of Life: Become an Organ Donor</h1>
    <a href="donation_form/donationform1.php" class="cta-button">Sign Up Now</a>
</section>

<!-- About Us Section -->
<section id="about-us">
    <h2>About Us</h2>
    <p>Mission statement and organization details go here.</p>
    <p>Highlight the impact of organ donation on saving lives.</p>
    <p>Share key statistics related to organ donation.</p>
</section>

<!-- Organ Donation Information Section -->
<section id="organ-donation-info">
    <h2>Organ Donation Information</h2>
    <p>Explain why organ donation is important and how it works.</p>
    <p>Provide a step-by-step guide on how to become an organ donor.</p>
    <p>Address common myths and facts about organ donation.</p>
</section>

<!-- Get Involved Section -->
<section id="get-involved">
    <h2>Get Involved</h2>
    <p>Real-life donor stories, volunteer opportunities, and events go here.</p>
</section>

<!-- Call-to-Action Section -->
<section id="cta">
    <h2>Make a Difference Today</h2>
    <a href="donation_form/donationform1.php" class="cta-button">Register as a Donor</a>
    <p>Share the message with your friends and family.</p>
</section>

<!-- Support Section -->
<section id="support">
    <h2>Support</h2>
    <p>Links to resources, contact information, and chat support.</p>
</section>
<footer>
    <a href="mailto:dishatimbadiya055@gmail.com" style="color:white;">Email</a>
    <p>© 2023 All rights reserved.</p>
</footer>

</html>