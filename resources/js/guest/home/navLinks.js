export default {
    init: () => {
        let timerId;
        const header = document.getElementById("header");
        const navItems = header.querySelectorAll(".nav-item:not(.login-link)");
        const sections = Array.from(navItems).map((navItem) => {
            const section = document.getElementById(
                navItem.href.split("#")[1].slice(0, navItem.href.length - 1)
            );
            return {
                navItem,
                section: {
                    el: section,
                    coordinates: section.getBoundingClientRect(),
                },
            };
        });

        document.addEventListener("scroll", () => {
            if (timerId) {
                clearTimeout(timerId);
            }
            const scrollPosition = window.scrollY + 160;
            timerId = setTimeout(() => {
                sections.forEach(({ navItem, section }) => {
                    const topInView = scrollPosition > section.coordinates.top;
                    const bottomInView =
                        scrollPosition < section.coordinates.bottom;

                    // if (section.el.id === "projects") {
                    //     console.log(
                    //         bottomInView,
                    //         "Srollposition: ",
                    //         scrollPosition,
                    //         "is less than sections.bottom: ",
                    //         section.coordinates.bottom,
                    //         topInView && bottomInView
                    //     );
                    // }

                    // section is bigger than
                    console.log(
                        section.el.id,
                        section.coordinates.height,
                        document.documentElement.clientHeight,
                        window.innerHeight
                    );
                    if (section.coordinates.height > window.innerHeight) {
                        // I only need to know
                        console.log(
                            section.el.id,
                            topInView,
                            bottomInView,
                            topInView && bottomInView
                        );

                        // return (
                        //     (topInView || bottomInView) &&
                        //     navItem.classList.add("active")
                        // );
                    }

                    // If the section is bigger than the screen topInView and bottomInView can never be truth

                    topInView && bottomInView
                        ? navItem.classList.add("active")
                        : navItem.classList.remove("active");
                });
            }, 100);
        });
    },
};
