const descriptions = document.querySelectorAll('.projectBig-desc');
const arrows = document.querySelectorAll('.project-arrow');

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
    });
}

putArrowRightPlace();
window.addEventListener('resize', putArrowRightPlace);
