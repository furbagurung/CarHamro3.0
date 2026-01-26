<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iceland Cabin Card</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="w-full max-w-sm bg-white rounded-3xl shadow-2xl overflow-hidden">
        <!-- Image Container -->
        <div class="relative h-96">
            <img
                src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=800&q=80"
                alt="Iceland Cabin"
                class="w-full h-full object-cover"
                id="cabinImage"
            />
            
            <!-- Pagination Dots -->
            <div class="absolute top-4 left-1/2 transform -translate-x-1/2 flex gap-1.5">
                <div class="w-1.5 h-1.5 rounded-full bg-white dot" data-index="0"></div>
                <div class="w-1.5 h-1.5 rounded-full bg-white/50 dot" data-index="1"></div>
                <div class="w-1.5 h-1.5 rounded-full bg-white/50 dot" data-index="2"></div>
            </div>
            
            <!-- Content Overlay -->
            <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/70 via-black/40 to-transparent">
                <!-- Title -->
                <h2 class="text-3xl font-bold text-white mb-3">Iceland Cabin</h2>
                
                <!-- Description -->
                <p class="text-gray-200 text-sm mb-6 leading-relaxed">
                    Cozy cabin nestled in Iceland's breathtaking landscape, offering stunning views of mountains and Northern Lights.
                </p>
                
                <!-- Read More Button -->
                <button 
                    class="w-full bg-white text-gray-900 font-semibold text-lg py-4 rounded-full hover:bg-gray-100 transition-colors duration-200 shadow-lg"
                    id="readMoreBtn"
                >
                    Read more
                </button>
            </div>
        </div>
    </div>

    <script>
        // Image carousel data
        const images = [
            'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=800&q=80',
            'https://images.unsplash.com/photo-1542718610-a1d656d1884c?w=800&q=80',
            'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&q=80'
        ];

        let currentImageIndex = 0;
        const cabinImage = document.getElementById('cabinImage');
        const dots = document.querySelectorAll('.dot');
        const readMoreBtn = document.getElementById('readMoreBtn');

        // Function to update active dot
        function updateDots(index) {
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-white/50');
                    dot.classList.add('bg-white');
                } else {
                    dot.classList.remove('bg-white');
                    dot.classList.add('bg-white/50');
                }
            });
        }

        // Function to change image
        function changeImage(index) {
            currentImageIndex = index;
            cabinImage.src = images[index];
            updateDots(index);
        }

        // Auto-rotate images every 3 seconds
        setInterval(() => {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            changeImage(currentImageIndex);
        }, 3000);

        // Click on dots to change image
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                changeImage(index);
            });
            // Add cursor pointer
            dot.style.cursor = 'pointer';
        });

        // Read More button click handler
        readMoreBtn.addEventListener('click', () => {
            alert('Opening cabin details...');
            // You can replace this with actual navigation or modal
            // window.location.href = '/cabin-details';
        });
    </script>
</body>
</html>