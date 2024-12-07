import navLinks from "./navLinks";
import projectFilters from "./projectsFilter";
import heroSection from "./heroSection";

document.addEventListener("DOMContentLoaded", () => {
    [navLinks, heroSection, projectFilters].forEach((module) => module.init());
});
