export default {
    init: () => {
        let timerId;
        const header = document.getElementById("header")
        const navItems = header.querySelectorAll(".nav-item:not(.login-link)");
        const sections = Array.from(navItems).map(navItem => {
            const section = document.getElementById(navItem.href.split("#")[1].slice(0, navItem.href.length - 1))
            return {navItem, 
                    section: {
                    el: section,
                    coordinates: section.getBoundingClientRect()
                },
            }
        });

        document.addEventListener("scroll", () => {
            if(timerId) {
                clearTimeout(timerId);
            }
            const scrollPosition = window.scrollY + 160;
            timerId = setTimeout(() => {
                sections.forEach(({navItem, section}) => {
                    const topInView = scrollPosition > section.coordinates.top;
                    const bottomInView = scrollPosition < section.coordinates.bottom;



                    topInView && bottomInView ? navItem.classList.add("active") : navItem.classList.remove("active");
                })
            }, 100)
        })
    }
}
