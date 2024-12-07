import gsap from "gsap";

export default {
    init: () => {
        const tl = gsap.timeline();

        const heroImage = document.querySelector(".hero__image__box img");

        tl
            // .fromTo(".hero__image__box img", {
            //     opacity: 0.5,
            //     x: - heroImage.offsetWidth
            // }, {
            //     x: 0,
            //     duration: 1,
            //     opacity: 1,
            // })
            .fromTo(
                ".hero__borderline",
                {
                    height: "0%",
                },
                { height: "90%", duration: 1 }
            )
            .fromTo(
                ".hero__header__box > *",
                {
                    opacity: 0,
                    y: 150,
                },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    stagger: 0.3,
                    ease: "power2.out",
                },
                "<"
            );
    },
};
