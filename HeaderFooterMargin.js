window.addEventListener('load', adjustBodyMargins);
window.addEventListener('resize', adjustBodyMargins);

function adjustBodyMargins() {
    const headerHeight = document.querySelector('.header').offsetHeight;
    const footerHeight = document.querySelector('.footer').offsetHeight;

    const siteBody = document.querySelector('.site-body');
    const footerLinksLinks = document.querySelectorAll('.footer-Links img.button-icon');
    
    siteBody.style.marginTop = `${headerHeight}px`;
    siteBody.style.marginBottom = `${footerHeight}px`;

    const windowWidth = window.innerWidth;

    footerDivider = 1.5;

    if (windowWidth <= 600)
        footerDivider = 2;

    footerLinksLinks.forEach(img => {
        img.style.height = `${footerHeight/footerDivider}px`;
        img.style.width = 'auto';
    });
}