function menuToogle() {
  const containerMenu = document.getElementsByClassName("container-menu")[0];
  const mainNav = document.getElementsByClassName("main-menu")[0];

  containerMenu.addEventListener("click", () => {
    containerMenu.classList.toggle("change");
    if (containerMenu.classList.value === "container-menu change") {
      mainNav.style.display = "block";
    } else {
      mainNav.style.display = "none";
    }
  });
}

function searchBarToogle() {
  const searchBtn = document.getElementById("search-btn");
  const searchForm = document.getElementsByClassName("search-form")[0];
  const i = searchBtn.children[0].children[0];
  const mobileMenu = document.getElementsByClassName("container-menu")[0];

  searchBtn.addEventListener("click", () => {
    if (i.classList.contains("fa-search")) {
      i.classList.replace("fa-search", "fa-times");
      searchForm.style.display = "inline-block";
      mobileMenu.style.display = "none";
    } else {
      i.classList.replace("fa-times", "fa-search");
      searchForm.style.display = "none";
      mobileMenu.style.display = "flex";
    }
  });
}

menuToogle();
searchBarToogle();
