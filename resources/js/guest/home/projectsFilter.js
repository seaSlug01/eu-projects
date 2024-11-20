import euProjects from "./euProjectsData"


export default {
    init: () => {
        const projectSection = document.getElementById("projects");
        const contentContainer = projectSection.querySelector(".content");
        const sidebar = contentContainer.querySelector(".sidebar");
        const itemsWrapper = contentContainer.querySelector(".items-wrapper");
        const projectPreviewContainer = itemsWrapper.querySelector(".items");
        const itemsHeader = itemsWrapper.querySelector(".items-header h2");

        function createLi(keyName, title, additionalClasses) {
            const li = document.createElement("li");
            li.classList.add("filterOpt")
            li.setAttribute("data-filter-value", keyName)
            li.textContent = title;

            if(additionalClasses) {
                additionalClasses.forEach(className => li.classList.add(className))  
            }

            return li;
        }

        function initiallizeProjectsHTML() {
            const ghostEl = document.createDocumentFragment();
            ghostEl.appendChild(createLi("*", "Όλα", ['active']))
            for(let keyName in euProjects) {
                const project = euProjects[keyName];
                const listItem = createLi(keyName, project.categoryName)

                ghostEl.appendChild(listItem)
            }

            sidebar.appendChild(ghostEl)

            createCards("*")
        }

        initiallizeProjectsHTML()
        
        function createCard(allItems, currentItemKey) {
            const {image: imgSrc, link, title: itemTitle } = allItems[currentItemKey];
            const container = document.createElement("a");
            container.setAttribute("target", "_blank");
            container.classList.add("card");
            container.href = link;
            const imageCont = document.createElement("div");
            imageCont.classList.add("image")
            const image = document.createElement("img");
            imageCont.appendChild(image);
            
            
            image.src =  rootImagePath + imgSrc
            const titleCont = document.createElement("div");
            titleCont.classList.add("title");
            const title = document.createElement("p");
            title.textContent = itemTitle;
            titleCont.appendChild(title);

            container.appendChild(imageCont);
            container.appendChild(titleCont);
            
            return container;
        }

        function createCards(filter) {
            let filteredItems;

            if(filter === "*") {
                filteredItems = Object.keys(euProjects).reduce(function (acc, key) {
                    return {...acc, items: {...acc.items, ...euProjects[key].items}}
                }, {categoryName: "All", items: {}});

                itemsHeader.textContent = "Προγράμματα (Όλα)"
            } else {
                filteredItems = euProjects[filter];
                itemsHeader.textContent = euProjects[filter].categoryName;
            }
            
            let ghostEl = document.createDocumentFragment();

            for(let key in filteredItems.items) {
                const card = createCard(filteredItems.items, key);
                ghostEl.appendChild(card);
            }

            projectPreviewContainer.appendChild(ghostEl);
        }


        

        sidebar.addEventListener("click", e => {
            if(e.target.classList.contains("active") || !e.target.classList.contains("filterOpt")) return;

            projectPreviewContainer.innerHTML = ""
            sidebar.querySelector(".filterOpt.active").classList.remove("active");
            e.target.classList.add("active");
            const filter = e.target.dataset.filterValue;
            
            createCards(filter, euProjects);

            contentContainer.scroll({
                top: 0,
                left: 0,
                behavior: "smooth",
            });
        })

        
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