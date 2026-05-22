document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Fade-In & Slide-Up on Scroll (Intersection Observer)
    const revealElements = document.querySelectorAll('.scroll-reveal');
    
    if (revealElements.length > 0) {
        const revealOptions = {
            threshold: 0.15,
            rootMargin: "0px 0px -50px 0px"
        };
        
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                
                entry.target.classList.add('is-revealed');
                // Optional: Stop observing once revealed
                observer.unobserve(entry.target);
            });
        }, revealOptions);
        
        revealElements.forEach(el => {
            revealObserver.observe(el);
        });
    }

    // 2. Fallback for Sticky Navbar Scroll-Driven Animation
    // Check if browser supports animation-timeline
    if (!CSS.supports('(animation-timeline: scroll()) and (animation-range: 0% 100%)')) {
        const header = document.getElementById('main-nav');
        if (header) {
            const scrollDistance = 100;
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > scrollDistance) {
                    header.classList.add('nav-scrolled');
                } else {
                    header.classList.remove('nav-scrolled');
                }
            }, { passive: true });
            
            // Trigger once on load in case user is already scrolled down
            if (window.scrollY > scrollDistance) {
                header.classList.add('nav-scrolled');
            }
        }
    }

    // 3. FAQ Accordion Logic
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const toggleBtn = item.querySelector('.faq-toggle');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-toggle i');
        
        if (toggleBtn && content && icon) {
            toggleBtn.addEventListener('click', () => {
                const isOpen = content.style.maxHeight;
                
                // Close all other accordions
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        const otherContent = otherItem.querySelector('.faq-content');
                        const otherIcon = otherItem.querySelector('.faq-toggle i');
                        if (otherContent && otherIcon) {
                            otherContent.style.maxHeight = null;
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    }
                });
                
                // Toggle current
                if (isOpen) {
                    content.style.maxHeight = null;
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    // Set max height dynamically based on scrollHeight
                    content.style.maxHeight = content.scrollHeight + "px";
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        }
    });

});
