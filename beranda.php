<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie - Pesan Makanan Online</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #ff6b6b, #feca57);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
        }

        .search-bar {
            flex: 1;
            max-width: 500px;
            margin: 0 2rem;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 12px 20px 12px 45px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        .nav-icons {
            display: flex;
            gap: 1.5rem;
        }

        .nav-icons i {
            font-size: 1.4rem;
            color: white;
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            transition: background 0.3s;
        }

        .nav-icons i:hover {
            background: rgba(255,255,255,0.2);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23f8f9fa" width="1200" height="600"/><circle fill="%23ff6b6b" cx="200" cy="150" r="80"/><circle fill="%23feca57" cx="800" cy="200" r="100"/><circle fill="%2348dbfb" cx="1000" cy="400" r="60"/><rect fill="%23ff9ff3" x="400" y="300" width="150" height="80" rx="10"/></svg>');
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.2s both;
        }

        .cta-button {
            background: linear-gradient(45deg, #ff6b6b, #feca57);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            animation: fadeInUp 1s ease 0.4s both;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255,107,107,0.4);
        }

        /* Categories */
        .categories {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .category-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .category-card i {
            font-size: 3rem;
            color: #ff6b6b;
            margin-bottom: 1rem;
        }

        .category-card h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        /* Popular Restaurants */
        .restaurants {
            padding: 0 2rem 5rem;
            background: #f8f9fa;
        }

        .restaurant-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .restaurant-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }

        .restaurant-card:hover {
            transform: translateY(-5px);
        }

        .restaurant-img {
            height: 200px;
            background: linear-gradient(45deg, #ff6b6b, #feca57);
            position: relative;
        }

        .restaurant-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .restaurant-info {
            padding: 1.5rem;
        }

        .restaurant-name {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .rating {
            color: #feca57;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .delivery-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #666;
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .nav {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }
            
            .search-bar {
                margin: 0;
                order: 3;
            }
            
            .category-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <div class="logo">🍕 Foodie</div>
            <div class="search-bar">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Cari makanan favoritmu...">
            </div>
            <div class="nav-icons">
                <i class="fas fa-user"></i>
                <i class="fas fa-heart"></i>
                <i class="fas fa-shopping-cart"></i>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Pesan Makanan<br>Lezat Sekarang!</h1>
            <p>Makanan favoritmu dalam 30 menit atau gratis</p>
            <button class="cta-button">
                <i class="fas fa-search"></i> Cari Restoran
            </button>
        </div>
    </section>

    <!-- Categories -->
    <section class="categories">
        <h2 class="section-title">Pilih Kategori</h2>
        <div class="category-grid">
            <div class="category-card">
                <i class="fas fa-pizza-slice"></i>
                <h3>Pizza</h3>
            </div>
            <div class="category-card">
                <i class="fas fa-hamburger"></i>
                <h3>Burger</h3>
            </div>
            <div class="category-card">
                <i class="fas fa-drumstick-bite"></i>
                <h3>Ayam Goreng</h3>
            </div>
            <div class="category-card">
                <i class="fas fa-utensils"></i>
                <h3>Nasi</h3>
            </div>
            <div class="category-card">
                <i class="fas fa-coffee"></i>
                <h3>Minuman</h3>
            </div>
            <div class="category-card">
                <i class="fas fa-ice-cream"></i>
                <h3>Dessert</h3>
            </div>
        </div>
    </section>

    <!-- Popular Restaurants -->
    <section class="restaurants">
        <h2 class="section-title">Restoran Populer</h2>
        <div class="restaurant-grid">
            <div class="restaurant-card">
                <div class="restaurant-img">
                    <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 200'><rect fill='%23ff6b6b' width='300' height='200' rx='10'/><text x='150' y='100' font-size='20' fill='white' text-anchor='middle' dy='.3em'>Pizza Hut</text></svg>" alt="Pizza Hut">
                </div>
                <div class="restaurant-info">
                    <div class="restaurant-name">Pizza Hut</div>
                    <div class="rating">⭐ 4.8 (1.2k)</div>
                    <div class="delivery-info">
                        <span>Gratis ongkir</span>
                        <span>25 menit</span>
                    </div>
                </div>
            </div>
            <div class="restaurant-card">
                <div class="restaurant-img">
                    <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 200'><rect fill='%23feca57' width='300' height='200' rx='10'/><text x='150' y='100' font-size='20' fill='white' text-anchor='middle' dy='.3em'>KFC</text></svg>" alt="KFC">
                </div>
                <div class="restaurant-info">
                    <div class="restaurant-name">KFC</div>
                    <div class="rating">⭐ 4.7 (2.5k)</div>
                    <div class="delivery-info">
                        <span>Rp 5.000</span>
                        <span>20 menit</span>
                    </div>
                </div>
            </div>
            <div class="restaurant-card">
                <div class="restaurant-img">
                    <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 200'><rect fill='%2348dbfb' width='300' height='200' rx='10'/><text x='150' y='100' font-size='20' fill='white' text-anchor='middle' dy='.3em'>McDonald's</text></svg>" alt="McDonald's">
                </div>
                <div class="restaurant-info">
                    <div class="restaurant-name">McDonald's</div>
                    <div class="rating">⭐ 4.9 (3.1k)</div>
                    <div class="delivery-info">
                        <span>Gratis ongkir</span>
                        <span>15 menit</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Search functionality
        document.querySelector('.search-input').addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
        });

        document.querySelector('.search-input').addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
        });

        // Category card click
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('click', function() {
                const category = this.querySelector('h3').textContent;
                document.querySelector('.search-input').value = category;
                document.querySelector('.search-input').focus();
            });
        });

        // CTA button scroll
        document.querySelector('.cta-button').addEventListener('click', function() {
            document.querySelector('.categories').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>