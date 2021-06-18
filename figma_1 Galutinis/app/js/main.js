//Mobile Navigacija
const mobileNav = document.querySelector(".mobile-nav");
const menuIcon = document.querySelector(".menu-icon");
const mobileMenuItems = document.querySelectorAll(".mobile-nav .menu-items li");

menuIcon.addEventListener("click", () => {
  mobileNav.classList.toggle("active");
});

mobileMenuItems.forEach((i) => {
  i.addEventListener("click", () => {
    mobileNav.classList.remove("active");
  });
});
//Mobile Navigacija BAIGTA

//Dekstop Navigacija
const options = {
    threshold: 0.4,
};
  
  const addActiveClass = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && entry.intersectionRatio >= 0.2) {
        //   console.log(entry.target);
        let currentActive = document.querySelector(".dekstop-navigation a.active");
  
        if (currentActive) {
          currentActive.classList.remove("active");
        }
  
        let newActive = document.querySelector(
          `.dekstop-navigation a[href="#${entry.target.getAttribute("id")}"]`
        );
  
        newActive.classList.add("active");
      }
    });
  };
  
  const observer = new IntersectionObserver(addActiveClass, options);
  
  const sections = document.querySelectorAll("section");
  
  sections.forEach((section) => {
    observer.observe(section);
  });