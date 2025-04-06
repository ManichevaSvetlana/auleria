<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Your Artifact — AULERIA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="/img/fav.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/fav.ico" type="image/x-icon">
    <style>
        body {
            margin: 0;
            background: #0c0c0c;
            color: #f5f5f5;
            font-family: 'Cormorant Garamond', serif;
            padding: 0 5vw 5rem;
        }
        .product-image {
            text-align: center;
            margin-top: 5vh;
        }
        .product-image img {
            width: 40%;
            max-width: 300px;
            border-radius: 1rem;
            margin-bottom: 2rem;
            transition: opacity 0.5s ease;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        label {
            font-size: 1.1rem;
        }
        input, select {
            padding: 0.7rem;
            border: 1px solid #f5f5f5;
            background: transparent;
            color: #f5f5f5;
            font-family: inherit;
            font-size: 1rem;
        }
        button {
            padding: 1rem 2rem;
            border: 1px solid #f5f5f5;
            background: transparent;
            color: #f5f5f5;
            font-size: 1rem;
            text-transform: uppercase;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background: #f5f5f5;
            color: #0c0c0c;
        }
        .success {
            background: #14532d;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            text-align: center;
            color: #d1fae5;
        }
        .warning {
            font-size: 1rem;
            opacity: 0.7;
            margin-top: 2rem;
            text-align: center;
        }
    </style>
</head>

<body>

<h1>Begin Your Awakening</h1>

{{-- Блок с фото продукта --}}
<div class="product-image">
    <img id="selected-product-image" src="" alt="Selected Artifact" style="display: none;">
</div>

@if(session('success'))
    <div class="success">{{ session('success') }}</div>
@endif

{{-- Форма --}}
<form method="POST" action="{{ route('order.submit') }}">
    @csrf

    <label for="product">Select Product</label>
    <select name="product" id="product" required>
        <option value="">-- Choose your artifact --</option>
        <option value="board" {{ request('product') == 'board' ? 'selected' : '' }}>Board of Destiny</option>
        <option value="earrings" {{ request('product') == 'earrings' ? 'selected' : '' }}>Sacred Earrings</option>
        <option value="bracelet" {{ request('product') == 'bracelet' ? 'selected' : '' }}>Sacred Bracelet</option>
        <option value="pendant" {{ request('product') == 'pendant' ? 'selected' : '' }}>Sacred Pendant</option>
    </select>

    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" required>

    <label for="birth_date">Date of Birth</label>
    <input type="date" id="birth_date" name="birth_date" required>

    <label for="birth_time">Time of Birth</label>
    <input type="time" id="birth_time" name="birth_time" required>

    <label for="birth_place">Place of Birth</label>
    <input type="text" id="birth_place" name="birth_place" required>

    <label for="contact_method">Preferred Contact Method</label>
    <select name="contact_method" id="contact_method" required>
        <option value="">-- Choose contact method --</option>
        <option value="facebook">Facebook</option>
        <option value="instagram">Instagram</option>
        <option value="whatsapp">WhatsApp</option>
        <option value="viber">Viber</option>
        <option value="telegram">Telegram</option>
    </select>

    <label for="contact_info">Your Nickname / Phone</label>
    <input type="text" id="contact_info" name="contact_info" required>

    <p class="warning">After submitting, we will contact you personally with the next steps and sacred instructions for creating your artifact.</p>

    <button type="submit">Submit</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const productSelect = document.getElementById('product');
        const productImage = document.getElementById('selected-product-image');

        const productImages = {
            board: '/img/board-bg-2.png',
            earrings: '/img/amulets-ear.png',
            bracelet: '/img/amulets-braslet.png',
            pendant: '/img/amulets-kulon.png',
        };

        function updateProductImage() {
            const selectedValue = productSelect.value;
            if (productImages[selectedValue]) {
                productImage.src = productImages[selectedValue];
                productImage.style.display = 'block';
                productImage.style.opacity = '1';
            } else {
                productImage.style.display = 'none';
                productImage.style.opacity = '0';
            }
        }

        updateProductImage();

        productSelect.addEventListener('change', updateProductImage);
    });
</script>

</body>
</html>
