// Navigation Toggle
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('nav.main-nav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function() {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            mainNav.classList.toggle('menu-open');

            const icon = menuToggle.querySelector('i');
            if (icon) {
                if (mainNav.classList.contains('menu-open')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                    menuToggle.setAttribute('aria-label', 'Close navigation menu');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                    menuToggle.setAttribute('aria-label', 'Open navigation menu');
                }
            }
        });
    }

    // Accordion Functionality
    initializeAccordion();

    function initializeAccordion() {
        console.log("Initializing accordion with new code");
        const accordionItems = document.querySelectorAll('.accordion-item');
        
        // Set initial heights
        accordionItems.forEach(item => {
            const content = item.querySelector('.accordion-content');
            if (content) {
                if (item.classList.contains('active')) {

                    content.style.maxHeight = content.scrollHeight + 'px';
                    console.log(`Initial active item content height: ${content.scrollHeight}px`);
                } else {
                    content.style.maxHeight = '0';
                }
            }
        });
        
        // Handle click events
        accordionItems.forEach(item => {
            const title = item.querySelector('.accordion-title');
            if (!title) return;
            
            title.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const isActive = item.classList.contains('active');
                console.log(`Accordion clicked. Was active: ${isActive}`);
                
                if (isActive) {

                    toggleAccordion(item, false);
                } else {

                    accordionItems.forEach(otherItem => {
                        toggleAccordion(otherItem, false);
                    });
                    

                    setTimeout(() => {
                        toggleAccordion(item, true);
                    }, 10);
                }
            });
        });
    }
    
    function toggleAccordion(item, open) {
        const content = item.querySelector('.accordion-content');
        if (!content) return;
        
        if (open) {

            item.classList.add('active');
            console.log("Added active class");
            

            void item.offsetWidth;
            
            // Then animate the content height
            content.style.maxHeight = content.scrollHeight + 'px';
            console.log(`Opening: Set max-height to ${content.scrollHeight}px`);
        } else {
            // First animate the content closed
            content.style.maxHeight = '0';
            console.log("Closing: Set max-height to 0");
            
            // Only remove active class if we're actually closing
            if (item.classList.contains('active')) {
                // Wait for animation to finish before removing active class
                const transitionEndHandler = function() {
                    item.classList.remove('active');
                    console.log("Removed active class after transition");
                    content.removeEventListener('transitionend', transitionEndHandler);
                };
                content.addEventListener('transitionend', transitionEndHandler);
            }
        }
    }
});