const transportationRadios = document.querySelectorAll('.transportation input[type="radio"]');

transportationRadios.forEach(radio => {
  radio.addEventListener('change', () => {
    if (radio.value === 'bus') {
      // Do something if bus is selected
    } else if (radio.value === 'flight') {
      // Do something if flight is selected
    }
  });
});
