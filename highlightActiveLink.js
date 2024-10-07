document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".site-section");
    const navLinks = document.querySelectorAll(".nav-link");

    function changeLinkState() {
        let scrollPosition = window.scrollY + 60; // Adjust for the header height
        let currentIndex = -1;

        // Loop through all sections to find the current one in view
        sections.forEach((section, index) => {
            if (scrollPosition >= section.offsetTop) {
                currentIndex = index;
            }
        });

        // Remove the 'active' class from all links
        navLinks.forEach((link) => link.classList.remove("active"));

        // Add 'active' class to the current section link
        if (currentIndex >= 0) {
            navLinks[currentIndex].classList.add("active");
        }
    }

    // Add scroll event listener
    window.addEventListener("scroll", changeLinkState);
    // Call the function once to set the active state on load
    changeLinkState();
});
