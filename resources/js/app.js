import './bootstrap';
document.addEventListener("onloaded", function() {
    const elements = document.querySelectorAll(
    "[data-animate]"); // Select all elements with data-animate attribute

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            const element = entry.target;
            element.style.opacity = 0;

            // When the element is in view (intersecting)
            if (entry.isIntersecting) {
                const animationName = element.getAttribute("data-animate") ||
                ""; // Default to fadeUp
                const animationDelay = element.getAttribute("data-animate-delay") ||
                "0"; // Default to 0 if no delay

                // Trigger reflow to reset the animation
                void element.offsetWidth; // Forces a reflow, resetting animation

                // Re-add the data-animate attribute
                element.setAttribute("data-animate", animationName);

                // Apply the custom animation and delay directly via inline styles
                element.style.animation = `${animationName} 0.6s ease-out forwards`;
                element.style.animationDelay =
                `${animationDelay}ms`; // Apply the custom delay (in ms)

                // Check if the element has data-animate-once attribute
                if (element.hasAttribute('data-animate-once')) {
                    // Stop observing the element once the animation is triggered
                    observer.unobserve(element); // Stop observing this element
                    element.removeAttribute(
                    'data-animate'); // Optionally, remove the animation trigger attribute
                }
            } else {
                // When the element is out of view (not intersecting)
                // Reset the animation by removing the animation-related styles
                element.style.animation = ''; // Remove animation
                element.style.animationDelay = ''; // Reset delay
                element.style.opacity = 0; 

                // If element doesn't have data-animate-once, you can re-activate it when it comes back into view
                if (!element.hasAttribute('data-animate-once')) {
                    element.setAttribute("data-animate", element.getAttribute(
                        "data-animate") || '');
                }
            }
        });
    }, {
        threshold: 0 // Adjust the threshold if needed
    });

    elements.forEach((el) => observer.observe(el)); // Start observing the elements
});