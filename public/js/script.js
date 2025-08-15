document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("hamburger-button");
    const menu = document.getElementById("mobile-menu");
    const icon = document.getElementById("hamburger-icon");

    let isOpen = false;

    toggleButton.addEventListener("click", function () {
        isOpen = !isOpen;

        // Toggle menu
        menu.classList.toggle("hidden");

        // Ganti ikon
        if (isOpen) {
            icon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            `;
        } else {
            icon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            `;
        }
    });

    // Tutup menu jika klik di luar (opsional)
    document.addEventListener("click", function (e) {
        if (!toggleButton.contains(e.target) && !menu.contains(e.target)) {
            if (isOpen) {
                menu.classList.add("hidden");
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                `;
                isOpen = false;
            }
        }
    });
});

// Navbar scroll efek
// const header = document.getElementById("main-header");
// const navLinks = document.getElementById("nav-links");
// const logoText = document.getElementById("logo-text");
// const hamburgerIcon = document.getElementById("hamburger-button");

// window.addEventListener("scroll", () => {
//     if (window.scrollY > 50) {
//         header.classList.remove("bg-transparent");
//         header.classList.add("bg-red-700", "shadow");
//     } else {
//         header.classList.remove("bg-red-700", "shadow");
//         header.classList.add("bg-transparent");
//     }
// });

document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("main-header");

    // Periksa apakah halaman saat ini adalah halaman beranda
    const isBeranda =
        window.location.pathname === "/" ||
        window.location.pathname === "/home";

    if (isBeranda && header) {
        function handleScroll() {
            if (window.scrollY > 50) {
                header.classList.remove("bg-transparent");
                header.classList.add("bg-red-600");
            } else {
                header.classList.add("bg-transparent");
                header.classList.remove("bg-red-600");
            }
        }

        // Jalankan saat load dan saat scroll
        handleScroll();
        window.addEventListener("scroll", handleScroll);
    }
});
