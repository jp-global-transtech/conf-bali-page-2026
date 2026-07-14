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
        progress: 0,
        hide() {
            this.progress = 100;
            this.isLoading = false;
        },
        init() {
            this.progress = 10;
            // Animate progress to ~70% while waiting
            const progressInterval = setInterval(() => {
                if (this.progress < 70) {
                    this.progress += Math.random() * 10;
                }
            }, 300);

            const done = () => {
                clearInterval(progressInterval);
                this.progress = 100;
                setTimeout(() => this.hide(), 200);
            };

            // Minimum splash time: 1500ms (biar terlihat)
            const minTime = setTimeout(done, 1500);

            // Wait for window load (all assets including images)
            if (document.readyState === 'complete') {
                // load event already fired
            } else {
                window.addEventListener('load', () => {
                    clearTimeout(minTime);
                    done();
                });
            }

            // Fallback maximum: 3000ms
            setTimeout(() => {
                clearTimeout(minTime);
                if (this.isLoading) done();
            }, 3000);
        }
    });

    // Note: Alpine.store() auto-calls init() if defined, so we skip manual call.

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
