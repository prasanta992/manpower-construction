document.addEventListener("DOMContentLoaded", () => {

    /* ==========================
       NAVBAR SCROLL EFFECT
    ========================== */

    const nav = document.getElementById("master-nav");

    if (nav) {
        window.addEventListener("scroll", () => {

            if (window.scrollY > 80) {

                nav.classList.add(
                    "bg-stone-950/90",
                    "backdrop-blur-md",
                    "border-b",
                    "border-stone-800",
                    "py-4"
                );

                nav.classList.remove("py-6");

            } else {

                nav.classList.remove(
                    "bg-stone-950/90",
                    "backdrop-blur-md",
                    "border-b",
                    "border-stone-800",
                    "py-4"
                );

                nav.classList.add("py-6");
            }
        });
    }

    /* ==========================
       SCROLL REVEAL
    ========================== */

    const revealElements =
        document.querySelectorAll(".reveal-scroll");

    const observer = new IntersectionObserver(
        (entries) => {

            entries.forEach((entry) => {

                if (entry.isIntersecting) {

                    entry.target.classList.add("is-visible");

                    observer.unobserve(entry.target);
                }
            });

        },
        {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        }
    );

    revealElements.forEach((el) => {
        observer.observe(el);
    });

    /* ==========================
       IMAGE TILT EFFECT
    ========================== */

    const cards = document.querySelectorAll(".tilt-card");

    cards.forEach((card) => {

        card.addEventListener("mousemove", (e) => {

            const rect = card.getBoundingClientRect();

            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX =
                (y - centerY) / 20;

            const rotateY =
                (centerX - x) / 20;

            card.style.transform =
                `perspective(1000px)
                rotateX(${rotateX}deg)
                rotateY(${rotateY}deg)
                scale(1.03)`;
        });

        card.addEventListener("mouseleave", () => {

            card.style.transform =
                `perspective(1000px)
                rotateX(0deg)
                rotateY(0deg)
                scale(1)`;
        });
    });

    /* ==========================
       TESTIMONIAL SLIDER
    ========================== */

    const slider =
        document.getElementById("testimonial-slider");

    const dots =
        document.querySelectorAll(".dot");

    if (slider && dots.length > 0) {

        let current = 0;

        function updateSlider() {

            slider.style.transform =
                `translateX(-${current * 100}%)`;

            dots.forEach((dot, index) => {

                if (index === current) {

                    dot.classList.add(
                        "bg-amber-500",
                        "w-8"
                    );

                    dot.classList.remove(
                        "bg-stone-700"
                    );

                } else {

                    dot.classList.remove(
                        "bg-amber-500",
                        "w-8"
                    );

                    dot.classList.add(
                        "bg-stone-700"
                    );
                }
            });
        }

        dots.forEach((dot, index) => {

            dot.addEventListener("click", () => {

                current = index;

                updateSlider();
            });
        });

        updateSlider();

        setInterval(() => {

            current =
                (current + 1) % dots.length;

            updateSlider();

        }, 4000);
    }

    /* ==========================
       COUNTER ANIMATION
    ========================== */

    const counters =
        document.querySelectorAll(".counter");

    counters.forEach((counter) => {

        const target =
            Number(counter.dataset.target);

        let current = 0;

        const increment = target / 100;

        const updateCounter = () => {

            if (current < target) {

                current += increment;

                counter.innerText =
                    Math.ceil(current);

                requestAnimationFrame(updateCounter);

            } else {

                counter.innerText = target;
            }
        };

        updateCounter();
    });

});