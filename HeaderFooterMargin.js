window.addEventListener('load', adjustBodyMargins);
window.addEventListener('resize', adjustBodyMargins);

function adjustBodyMargins() {
    const headerHeight = document.querySelector('.header').offsetHeight;
    const footerHeight = document.querySelector('.footer').offsetHeight;

    const siteBody = document.querySelector('.site-body');
    const footerLinksLinks = document.querySelectorAll('.footer-Links img.button-icon');
    
    siteBody.style.marginTop = `${headerHeight}px`;
    siteBody.style.marginBottom = `${footerHeight}px`;

    

    footerLinksLinks.forEach(img => {
        img.style.height = `${footerHeight/1.5}px`;
        img.style.width = 'auto';
    });
}