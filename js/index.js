const threshold = 0.5;
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".nav li");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && entry.intersectionRatio >= threshold) {
          const id = entry.target.getAttribute("id");
          navLinks.forEach((link) => {
            link.classList.remove("active");
            const anchor = link.querySelector("a");
            if (anchor && anchor.getAttribute("href").substring(1) === id) {
              link.classList.add("active");
            }
          });
        }
      });
    },
    {
      threshold: [threshold],
      root: null,
    }
  );

  sections.forEach((section) => observer.observe(section));
});
