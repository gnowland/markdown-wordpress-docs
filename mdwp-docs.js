document.querySelectorAll('.wrap a[href^="#"]').forEach(trigger => {
  trigger.onclick = function (e) {
    e.preventDefault();
    let hash = this.getAttribute('href');
    let target = document.querySelector(hash);
    if( target ) {
      let headerOffset = 0;
      let elementPosition = target.offsetTop;
      let offsetPosition = elementPosition - headerOffset;

      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth"
      });

      history.pushState(null, null, hash);
    }
  };
});
