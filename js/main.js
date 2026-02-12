// Mobile Menu Toggle
const mobileToggle = document.querySelector('.mobile-toggle');
const navMenu = document.querySelector('.nav-menu');

if (mobileToggle) {
    mobileToggle.addEventListener('click', () => {
        mobileToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
    });
}

// Close mobile menu when clicking on a link
const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        mobileToggle.classList.remove('active');
        navMenu.classList.remove('active');
    });
});

// Navbar scroll effect
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    // Add 'scrolled' class when scrolled down, remove when at the top
    if (window.scrollY > 50) { // You can adjust this value (e.g., 50px)
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Stats counter animation
const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px'
};

const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const statNumber = entry.target.querySelector('.stat-number');
            if (statNumber && !statNumber.classList.contains('counted')) {
                animateCounter(statNumber);
                statNumber.classList.add('counted');
            }
        }
    });
}, observerOptions);

// Observe all stat items
document.querySelectorAll('.stat-item').forEach(stat => {
    statsObserver.observe(stat);
});

function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target + (element.textContent.includes('+') ? '+' : '');
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current);
        }
    }, 16);
}

// Form validation
const contactForm = document.querySelector('.contact-form form');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = contactForm.querySelector('input[type="text"]').value;
        const email = contactForm.querySelector('input[type="email"]').value;
        const subject = contactForm.querySelectorAll('input[type="text"]')[1].value;
        const message = contactForm.querySelector('textarea').value;

        // Basic validation
        if (!name || !email || !subject || !message) {
            alert('Please fill in all fields');
            return;
        }

        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address');
            return;
        }

        // Success message (you can replace this with actual form submission)
        alert('Message sent successfully! We will get back to you soon.');
        contactForm.reset();
    });
}

// Scroll animations for elements
const scrollElements = document.querySelectorAll('.service-card, .portfolio-item, .team-member, .testimonial-card');

const elementInView = (el, offset = 100) => {
    const elementTop = el.getBoundingClientRect().top;
    return (elementTop <= (window.innerHeight || document.documentElement.clientHeight) - offset);
};

const displayScrollElement = (element) => {
    element.style.opacity = '1';
    element.style.transform = 'translateY(0)';
};

const hideScrollElement = (element) => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(30px)';
};

const handleScrollAnimation = () => {
    scrollElements.forEach((el) => {
        if (elementInView(el, 100)) {
            displayScrollElement(el);
        }
    });
};

// Initialize scroll elements
scrollElements.forEach(el => {
    el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
    hideScrollElement(el);
});

window.addEventListener('scroll', handleScrollAnimation);
window.addEventListener('load', handleScrollAnimation);

// Lazy loading for images
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    const lazyImages = document.querySelectorAll('img.lazy');
    lazyImages.forEach(img => imageObserver.observe(img));
}

// Page load animation
window.addEventListener('load', () => {
    document.body.classList.add('loaded');
});



// Initialize Owl Carousel
$(document).ready(function () {
    $(".portfolio-carousel").owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoHeight: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        },
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
    });
});

// Modal Logic
const modal = document.getElementById("projectModal");
const modalImg = document.getElementById("modalImg");
const modalTitle = document.getElementById("modalTitle");
const modalCategory = document.getElementById("modalCategory");
const modalDesc = document.getElementById("modalDesc");
const modalTech = document.getElementById("modalTech");
const closeModal = document.querySelector(".close-modal");

function openProjectModal(element) {
    const title = element.getAttribute("data-title");
    const category = element.getAttribute("data-category");
    const image = element.getAttribute("data-image");
    const desc = element.getAttribute("data-desc");
    const tech = element.getAttribute("data-tech");

    modalTitle.innerText = title;
    modalCategory.innerText = category;
    modalImg.src = image;
    modalDesc.innerText = desc || "No description available.";
    modalTech.innerText = tech || "N/A";

    modal.style.display = "block";
    setTimeout(() => {
        modal.classList.add("show");
    }, 10);
    document.body.style.overflow = "hidden"; // Prevent scrolling
}

// Close Modal
function closeProjectModal() {
    modal.classList.remove("show");
    setTimeout(() => {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    }, 300);
}

if (closeModal) {
    closeModal.onclick = function () {
        closeProjectModal();
    }
}

// Close on outside click
window.onclick = function (event) {
    if (event.target == modal) {
        closeProjectModal();
    }
}

// Close on Escape key
document.addEventListener('keydown', function (event) {
    if (event.key === "Escape" && modal.style.display === "block") {
        closeProjectModal();
    }
});

console.log('dopagency website loaded successfully! 🚀');
