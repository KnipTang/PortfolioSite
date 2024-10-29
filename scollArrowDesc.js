const descriptions = document.querySelectorAll('.projectBig-Text');
const arrows = document.querySelectorAll('.project-arrow');
const paddingelement = document.querySelector('.project-big');

function isScrollAtEnd(desc) {
    return desc.scrollTop + desc.clientHeight >= desc.scrollHeight - 1;
}

function checkScroll() {
    descriptions.forEach((desc, index) => {
        if (isScrollAtEnd(desc)) {
            arrows[index].style.display = 'none'; 
        } else {
            arrows[index].style.display = 'block';
        }
    });
}

descriptions.forEach(desc => desc.addEventListener('scroll', checkScroll));

function putArrowRightPlace() {
    descriptions.forEach((desc, index) => {
        const descStyle = window.getComputedStyle(desc);
        const descWidth = parseFloat(descStyle.width);
        const descRect = desc.getBoundingClientRect();
        const descPos = descRect.left;
        const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;

        arrows[index].style.left = `${descPos + (descWidth / 2) - (arrows[index].clientWidth / 2) - scrollbarWidth}px`;
        
        const stylepadding = window.getComputedStyle(paddingelement);
        const paddingBottom = parseFloat(stylepadding.getPropertyValue("padding-bottom"));

        // Get the current top position using getBoundingClientRect and set it explicitly
        // const arrowRect = arrows[index].getBoundingClientRect();
        // const initialTop = arrowRect.top; // Relative to document

        // if(paddingBottom <= 20)
        //     arrows[index].style.top = `${initialTop + 36}px`;

        // console.log(`Padding Bottom: ${paddingBottom}px`);
        // console.log(`Arrow Top Position: ${arrows[index].style.top}`);
    });
}

putArrowRightPlace();
window.addEventListener('resize', putArrowRightPlace);
