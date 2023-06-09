const trailer = document.getElementById("trailer");

const animateTrailer = (e, interacting) => {
    const x = e.clientX - trailer.offsetWidth / 2,
        y = e.clientY - trailer.offsetHeight / 2;

    const keyframes = {
        transform: `translate(${x}px, ${y}px) scale(${interacting ? 4 : 1})`,
    };

    trailer.animate(keyframes, {
        duration: 800,
        fill: "forwards",
    });
};

const getTrailerClass = (type) => {
    switch (type) {
        case "about":
            return "fa-solid fa-address-card";
        case "projects":
            return "fa-solid fa-list-check";
        case "achievement":
            return "fa-solid fa-trophy";
        case "contact":
            return "fa-solid fa-phone";
        case "link":
            return "fa-solid fa-link";
        case "arrow-down":
            return "fa-solid fa-caret-down";
        case "arrow-right":
            return "fa-solid fa-caret-right";
        case "arrow-left":
            return "fa-solid fa-caret-left";
        case "fill":
            return "fa-solid fa-keyboard";
        case "send":
            return "fa-solid fa-paper-plane";
        case "arrow-top":
            return "fa-solid fa-chevron-up";
        default:
            return "fa-solid fa-play";
    }
};

window.onmousemove = (e) => {
    const interactable = e.target.closest("#interactable"),
        interacting = interactable !== null;

    const icon = document.getElementById("trailer-icon");

    animateTrailer(e, interacting);

    trailer.dataset.type = interacting ? interactable.dataset.type : "";

    if (interacting) {
        icon.className = getTrailerClass(interactable.dataset.type);
    }
};

// HAMBURGER
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

const toggleHamburger = () => {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
};

hamburger.addEventListener("click", toggleHamburger);

// NAVBAR FIXED
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.scrollY > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};

// CLICK OUTSIDE HAMBURGER
window.addEventListener("click", function (e) {
    if (e.target != hamburger && e.target != navMenu) {
        hamburger.classList.remove("hamburger-active");
        navMenu.classList.add("hidden");
    }
});

// TEXT ANIMATION
const letters = "abcdefghijklmnopqRstuvwxyz";

document.querySelector("h5").onmouseover = (event) => {
    let iterations = 0;

    const interval = setInterval(() => {
        event.target.innerText = event.target.innerText
            .split("")
            .map((letter, index) => {
                if (index < iterations) {
                    return event.target.dataset.value[index];
                }
                return letters[Math.floor(Math.random() * 26)];
            })
            .join("");

        if (iterations >= event.target.dataset.value.length) {
            clearInterval(interval);
        }

        iterations += 1 / 5;
    }, 50);
};

// ACTIVE LINKS NAVBAR

// Ambil semua tautan pada navigasi
const navLinks = document.querySelectorAll("nav a");
const darkHtml = document.querySelector("html.dark");

// Ketika halaman di-scroll
window.addEventListener("scroll", () => {
    // Dapatkan posisi scroll saat ini
    const currentScroll = window.pageYOffset;

    // Loop melalui setiap bagian pada halaman
    document.querySelectorAll("section").forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;

        // Jika section ini sedang terlihat pada layar
        if (currentScroll > sectionTop - sectionHeight / 3) {
            // Dapatkan ID section ini
            const sectionId = section.getAttribute("id");

            // Loop melalui setiap tautan pada navigasi
            navLinks.forEach((link) => {
                // Hapus kelas aktif dari semua tautan
                link.classList.remove("active");
                link.classList.remove("dark:text-primary");

                // Jika tautan ini mengarah ke bagian yang sedang aktif
                if (link.getAttribute("href") === `#${sectionId}`) {
                    // Tambahkan kelas aktif pada tautan ini
                    if (
                        document.documentElement.classList.contains("dark")
                    ) {
                        // Jika sedang dalam dark mode
                        link.classList.add("dark:text-primary");
                    } else {
                        // Jika sedang dalam light mode
                        link.classList.add("active");
                    }
                }
            });
        }
    });
});

// ARROW TO TOP LOGIC
const arrowBtn = document.getElementById("arrow-btn");
const homeSection = document.getElementById("home");

window.addEventListener("scroll", () => {
    if (homeSection.getBoundingClientRect().top < 0) {
        arrowBtn.style.opacity = "1";
        arrowBtn.animate(
            [{ transform: "scale(0)" }, { transform: "scale(1)" }],
            {
                duration: 300,
                easing: "ease-in-out",
                fill: "forwards",
            }
        );
    } else {
        arrowBtn.animate(
            [{ transform: "scale(1)" }, { transform: "scale(0)" }],
            {
                duration: 300,
                easing: "ease-in-out",
                fill: "forwards",
            }
        ).onfinish = () => {
            arrowBtn.style.opacity = "0";
        };
    }
});

// DARKMODE LOGIC
const darkModeIcon = document.getElementById("dark-mode-icon");
const html = document.querySelector("html");

function toggleDarkMode() {
    // toggle the icon between sun and moon
    if (darkModeIcon.classList.contains("fa-sun")) {
        darkModeIcon.classList.remove("fa-sun");
        darkModeIcon.classList.add("fa-moon");
        // activate dark mode
        html.classList.add("dark");
        localStorage.theme = 'dark';
    } else {
        darkModeIcon.classList.remove("fa-moon");
        darkModeIcon.classList.add("fa-sun");
        // deactivate dark mode
        html.classList.remove("dark");
        localStorage.theme = 'light';
    }
}

// set icon based on localStorage or prefers-color-scheme
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    darkModeIcon.classList.remove("fa-sun");
    darkModeIcon.classList.add("fa-moon");
} else {
    darkModeIcon.classList.remove("fa-moon");
    darkModeIcon.classList.add("fa-sun");
}
const darkModeToggle = document.getElementById("dark-mode-toggle");
darkModeToggle.addEventListener("click", toggleDarkMode);
