function checkTitleOverflow() {
    const titles = document.querySelectorAll('.projectBig-Title');

    titles.forEach(titleElement => {
        // Get the computed style for line height
        const computedStyle = window.getComputedStyle(titleElement);
        const lineHeight = parseFloat(computedStyle.lineHeight);
        
        // Get the height of the title element
        elementHeight = titleElement.offsetHeight;
        // Calculate the number of lines the title currently occupies
        const numberOfLines = Math.floor(elementHeight / lineHeight);
        console.log(elementHeight);
        console.log(lineHeight);
        // If the number of lines exceeds 3, enable the scrollbar
        if (numberOfLines > 3) {
            titleElement.style.overflowY = 'auto'; // Enable vertical scrollbar
        } else {
            // titleElement.style.overflowY = 'hidden'; // Disable scrollbar
        }
    });
}

// Call the function on window load and resize
window.onload = checkTitleOverflow;
window.onresize = checkTitleOverflow; // Re-check on window resize