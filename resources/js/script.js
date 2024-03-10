const barItems = document.querySelectorAll('.bar-item');

barItems.forEach(item => {
  item.addEventListener('click', function() {
    barItems.forEach(item => item.classList.remove('active'));
    this.classList.add('active');
  });
});
