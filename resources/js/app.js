import './bootstrap';

import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse'

Alpine.plugin(collapse)

window.Alpine = Alpine;


// Scroll Reveal Data for Alpine.js
document.addEventListener('alpine:init', () => {
    // Global loading state
    Alpine.store('loading', {
        isLoading: true,
        hide() {
            this.isLoading = false;
        }
    });

    // Hide loading screen after page load
    setTimeout(() => {
        Alpine.store('loading').hide();
    }, 800);

    // Reusable scroll reveal component
    Alpine.data('scrollReveal', (delay = 0) => ({
        visible: false,
        init() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            this.visible = true;
                        }, delay);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            observer.observe(this.$root);
        }
    }));
});

Alpine.start();
