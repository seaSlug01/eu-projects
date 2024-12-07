export default {
    init: () => {
        const projectSection = document.getElementById("projects");
        const contentContainer = projectSection.querySelector(".content");
        const sidebar = contentContainer.querySelector(".sidebar");
        const itemsWrapper = contentContainer.querySelector(".items-wrapper");
        const projectPreviewContainer = itemsWrapper.querySelector(".items");
        const itemsHeader = itemsWrapper.querySelector(".items-header h2");

        const createCard = (post) => {
            const { id, title: postTitle, image: imgSrc } = post;
            const container = document.createElement("a");
            container.setAttribute("target", "_blank");
            container.classList.add("card");
            container.href = `${window.location.origin}/eu-posts/${id}`;
            const imageCont = document.createElement("div");
            imageCont.classList.add("image");
            const image = document.createElement("img");
            imageCont.appendChild(image);
            image.src = rootImagePath + imgSrc;

            const titleCont = document.createElement("div");
            titleCont.classList.add("title");
            const title = document.createElement("p");
            title.textContent = postTitle;
            titleCont.appendChild(title);

            container.appendChild(imageCont);
            container.appendChild(titleCont);

            return container;
        };

        const createCategorizedPosts = (euCategories, euPosts) =>
            euCategories.reduce(
                (acc, { id, name }) => ({
                    ...acc,
                    [id]: {
                        name,
                        posts: euPosts.filter((post) =>
                            post.eu_categories.includes(id)
                        ),
                    },
                }),
                {
                    "*": {
                        name: "Προγράμματα ('Ολα)",
                        posts: euPosts,
                    },
                }
            );

        const changeCategory = (e, euPostsCategorized) => {
            const categoryId = e.target.getAttribute("data-category");
            if (categoryId) {
                if (e.target.classList.contains("active")) return;
                sidebar
                    .querySelector(".filterOpt.active")
                    .classList.remove("active");
                e.target.classList.add("active");
                projectPreviewContainer.innerHTML = "";
                const categoryPosts = euPostsCategorized[categoryId].posts;
                const categoryName = euPostsCategorized[categoryId].name;

                const ghostEl = document.createDocumentFragment();
                for (let post of categoryPosts) {
                    const card = createCard(post);
                    ghostEl.appendChild(card);
                }

                projectPreviewContainer.appendChild(ghostEl);
                itemsHeader.textContent = categoryName;
            }
        };

        const setupFilters = (data) => {
            const euPosts = data[0].euPosts;
            const euCategories = data[0].euCategories;
            const euPostsCategorized = createCategorizedPosts(
                euCategories,
                euPosts
            );

            sidebar.addEventListener("click", (e) =>
                changeCategory(e, euPostsCategorized)
            );
        };

        // Homepage is loaded without any posts on first render so that it boots faster without awaiting 100 euPosts
        // Then is auto rerendered with the defered posts data
        // From the Home Livewire Component(backend) I'm dispatching a 'deferedEuPostDataLoaded' event (custom name) with the post and categories data
        // Once the fetching is complete, the frontend can listen to the dispatched event and be ready to setup the filtering mechanism
        Livewire.on("deferedEuPostDataLoaded", setupFilters);

        const observer = new MutationObserver(() => {
            const newHeight = document.documentElement.scrollHeight;
            console.log("Document height changed to:", newHeight);
        });

        // Observe changes in the entire body
        observer.observe(document.body, { childList: true, subtree: true });
    },
};
