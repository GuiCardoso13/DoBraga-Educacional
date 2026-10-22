document.querySelectorAll('.faq-question').forEach(btn => {
  btn.addEventListener('click', function() {
    const icon = btn.querySelector('.faq-icon');
    document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotate'));
    setTimeout(() => {
      const target = document.querySelector(btn.getAttribute('data-bs-target'));
      if (target.classList.contains('show')) {
        icon.classList.add('rotate');
      }
    }, 350);
  });
});

document.querySelectorAll('.prof-card').forEach(card => {
  card.addEventListener('click', function(e) {
    card.closest('.row').querySelectorAll('.prof-card').forEach(c => c.classList.remove('active'));
    card.classList.add('active');
  });
});

// ...existing code...
document.addEventListener("DOMContentLoaded", () => {
  const cardEls = Array.from(document.querySelectorAll(".espaco-card"));
  const btnShowMore = document.querySelector(".espacos button");
  if (!cardEls.length || !btnShowMore) return;

  const cols = cardEls.map(c => c.parentElement);
  const breakpoint = 768;
  let def = window.innerWidth < breakpoint ? 3 : 6;

  const updateDisplay = () => {
    cols.forEach((col, index) => {
      col.style.display = index < def ? "" : "none";
    });
    btnShowMore.style.display = def >= cols.length ? "none" : "";
  };

  updateDisplay();

  btnShowMore.addEventListener("click", () => {
    def += 3;
    updateDisplay();
  });

  window.addEventListener("resize", () => {
    const newDefault = window.innerWidth < breakpoint ? 3 : 6;
    if (def < newDefault) {
      def = newDefault;
      updateDisplay();
    }
  });
});