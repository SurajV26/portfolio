<script>

    // header //
        document.addEventListener("DOMContentLoaded", function() {
            const barIcon = document.querySelector(".bar");
            const mobileMenu = document.querySelector(".mobile-menu");
            barIcon.addEventListener("click", function() {
                mobileMenu.classList.toggle("active");
            });
        });

        /* navbar */
        let prevScrollPos = window.pageYOffset;
        const navbar = document.querySelector('.navbarp');
        const mobileMenu = document.querySelector('.mobile-menu');

        window.addEventListener('scroll', function() {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollPos > currentScrollPos) {
                navbar.style.top = '0';
                mobileMenu.classList.remove('active');
            } else {
                navbar.style.top = `-${navbar.offsetHeight}px`;
                mobileMenu.classList.remove('active');
            }
            prevScrollPos = currentScrollPos;
        });

    // contact---container
    
    
</script>