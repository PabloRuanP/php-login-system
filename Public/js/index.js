document.addEventListener('DOMContentLoaded', function() {
    // Clone sidebar nav items to offcanvas nav
    const sidebarNav = document.getElementById('sidebarNav');
    const offcanvasNav = document.getElementById('offcanvasNav');
    offcanvasNav.innerHTML = sidebarNav.innerHTML;

    // Close offcanvas when a nav item is clicked
    offcanvasNav.addEventListener('click', function(e) {
        if (e.target.classList.contains('nav-link')) {
            const offcanvasSidebar = bootstrap.Offcanvas.getInstance(document.getElementById(
                'sidebar'));
            offcanvasSidebar.hide();
        }
    });
});