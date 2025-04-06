<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULERIA — Light Within</title>

    <!-- SEO -->
    <meta name="description" content="AULERIA — Sacred artifacts hand-crafted in places of ancient power, aligned with the stars. Board of Destiny and Body Amulets born from earth and breath.">
    <meta name="keywords" content="AULERIA, sacred artifacts, Board of Destiny, Body Amulets, spiritual jewelry, handmade, mystical gifts">
    <meta name="author" content="AULERIA">
    <link rel="canonical" href="https://auleria.com/" />
    <meta property="og:title" content="AULERIA — Light Within">
    <meta property="og:description" content="Sacred artifacts hand-crafted in ancient places, aligned with the stars. Discover your destiny.">
    <meta property="og:image" content="https://auleria.com/images/share-image.jpg">
    <meta property="og:url" content="https://auleria.com/">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AULERIA — Light Within">
    <meta name="twitter:description" content="Discover sacred artifacts aligned with your destiny.">
    <meta name="twitter:image" content="https://auleria.com/images/share-image.jpg">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            background: linear-gradient(to bottom, #0c0c0c, #1a1a1a);
            color: #f5f5f5;
            font-family: 'Cormorant Garamond', serif;
            overflow-x: hidden;
            padding: 0 5vw;
        }

        header {
            padding: 5vh 0 5vh;
            text-align: left;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        header p {
            font-size: 1.2rem;
            opacity: 0.8;
            margin-bottom: 2rem;
            max-width: 90%;
        }

        .scroll-btn {
            background: none;
            border: 1px solid #f5f5f5;
            color: #f5f5f5;
            padding: 0.8rem 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: background 0.3s;
            display: inline-block;
            font-size: 0.9rem;
        }

        .scroll-btn:hover {
            background: #f5f5f5;
            color: #0c0c0c;
        }

        section {
            padding: 5vh 0;
        }

        .intro, .about {
            text-align: left;
        }

        .intro h2, .about h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .intro p, .about p {
            font-size: 1.1rem;
            opacity: 0.8;
            line-height: 1.6;
            max-width: 90%;
        }

        .products {
            display: flex;
            flex-direction: column;
            gap: 5rem;
        }

        .product {
            text-align: left;
            position: relative;
        }

        .product img {
            width: 100%;
            border-radius: 0.3rem;
        }

        .product .img-board {
            width: 150px;
            position: absolute;
            z-index: -1;
            right: 0;
            top: -75px;
        }

        .product .img-amulete {
            width: 130px;
        }

        .product h3 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .product p {
            font-size: 1rem;
            opacity: 0.8;
            margin-bottom: 1rem;
        }

        .product .price {
            font-size: 1.4rem;
            color: #b2711d;
            margin-bottom: 1rem;
        }

        .product a {
            display: inline-block;
            padding: 0.7rem 1.4rem;
            border: 1px solid #f5f5f5;
            color: #f5f5f5;
            text-decoration: none;
            font-size: 0.9rem;
            transition: background 0.3s;
        }

        .product a:hover {
            background: #f5f5f5;
            color: #0c0c0c;
        }

        footer {
            text-align: left;
            padding: 5vh 0 2vh;
            font-size: 0.8rem;
            opacity: 0.5;
        }

        @media (min-width: 768px) {
            header h1 {
                font-size: 3rem;
            }
            .intro h2, .about h2, .product h3 {
                font-size: 2rem;
            }
            .product .img-board {
                top: -67px;
                left: 214px;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>The light that remembers your name.</h1>
    <p>Breath of the body. Call of the earth. Mystery of the stars.</p>
    <button class="scroll-btn" onclick="document.getElementById('products').scrollIntoView({behavior: 'smooth'})">Begin the path</button>
</header>

<section class="intro">
    <h2>Where the Sacred Takes Form</h2>
    <p>Hand-crafted in places of ancient power, at the perfect alignment of stars. Through the dance of your breath and the touch of the earth.</p>
</section>

<section id="products" class="products">
    <div class="product">
        <img class="img-board" src="/img/board-bg.png" alt="Board of Destiny">
        <h3>Board of Destiny</h3>
        <p>Created during sacred planetary alignments, from living clay, gold, and your breath. Protects your family, your home, your destiny.</p>
        <div class="price">15,000 $</div>
        <a href="/product/board-of-destiny">Learn More</a>
    </div>

    <div class="product">
        <img class="img-amulete" src="/img/amulets.png" alt="Body Amulets">
        <h3>Body Amulets</h3>
        <p>Lightweight amulets carrying gold and ancient stones, fused with your time and place of birth. Guarding your essence.</p>
        <div class="price">4,000 $</div>
        <a href="/product/body-amulets">Learn More</a>
    </div>
</section>

<section class="about">
    <h2>About Us</h2>
    <p>We create sacred artifacts through clay, breath, and ancient signs. Each piece is born in moments when Earth listens and stars align.</p>
</section>

<footer>
    &copy; 2025 AULERIA. All rights reserved.
</footer>

</body>
</html>
