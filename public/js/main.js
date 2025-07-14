// This is the main JavaScript file for site functionality
// Wait for DOM to load before initializing functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get mobile menu toggle button and navigation elements
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('nav.main-nav');

    // Initialize mobile menu functionality if elements exist
    if (menuToggle && mainNav) {
        // Add click event listener to mobile menu toggle
        menuToggle.addEventListener('click', function() {
            // Toggle aria-expanded attribute for accessibility
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            // Toggle menu open class to show/hide navigation
            mainNav.classList.toggle('menu-open');

            // Get the icon element inside the toggle button
            const icon = menuToggle.querySelector('i');
            // Change icon based on menu state if icon exists
            if (icon) {
                if (mainNav.classList.contains('menu-open')) {
                    // Change to close icon when menu is open
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                    menuToggle.setAttribute('aria-label', 'Close navigation menu');
                } else {
                    // Change to hamburger icon when menu is closed
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                    menuToggle.setAttribute('aria-label', 'Open navigation menu');
                }
            }
        });
    }

    // Initialize accordion functionality
    initializeAccordion();

    // Function to initialize accordion interface
    function initializeAccordion() {
        console.log("Initializing accordion with new code");
        // Get all accordion items on the page
        const accordionItems = document.querySelectorAll('.accordion-item');
        
        // Set initial state for each accordion item
        accordionItems.forEach(item => {
            const content = item.querySelector('.accordion-content');
            if (content) {
                if (item.classList.contains('active')) {
                    // Set height for active items to show content
                    content.style.maxHeight = content.scrollHeight + 'px';
                    console.log(`Initial active item content height: ${content.scrollHeight}px`);
                } else {
                    // Hide content for inactive items
                    content.style.maxHeight = '0';
                }
            }
        });
        
        // Add click event listeners to each accordion item
        accordionItems.forEach(item => {
            const title = item.querySelector('.accordion-title');
            if (!title) return; // Skip if no title element found
            
            // Add click handler to accordion title
            title.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default link behavior
                e.stopPropagation(); // Stop event bubbling
                
                // Check if this accordion item is currently active
                const isActive = item.classList.contains('active');
                console.log(`Accordion clicked. Was active: ${isActive}`);
                
                if (isActive) {
                    // Close this accordion if it's already open
                    toggleAccordion(item, false);
                } else {
                    // Close all other accordions first
                    accordionItems.forEach(otherItem => {
                        toggleAccordion(otherItem, false);
                    });
                    
                    // Open this accordion after a short delay
                    setTimeout(() => {
                        toggleAccordion(item, true);
                    }, 10);
                }
            });
        });
    }
    
    // Function to toggle accordion state (open/close)
    function toggleAccordion(item, open) {
        const content = item.querySelector('.accordion-content');
        if (!content) return; // Exit if no content element found
        
        if (open) {
            // Add active class to show accordion as open
            item.classList.add('active');
            console.log("Added active class");
            
            // Force reflow to ensure class change is applied
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
                // Listen for transition end to remove active class
                content.addEventListener('transitionend', transitionEndHandler);
            }
        }
    }
});