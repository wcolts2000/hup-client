const products = {
  banners: {
    price: 4,
    ['sides-x']: {
      single: 0,
      double: 'double'
    }
  }
};

// VARIABLES
let orderTotal = 0;
const minimumOrderTotal = 20;
const turnaround = document.getElementById('turnaround');
const length = document.getElementById('length');
const width = document.getElementById('width');
const quantity = document.getElementById('quantity');

const totalInput = document.getElementById('total');
const totalStr = document.getElementById('totalStr');
const inputs = document.querySelectorAll('input');

console.log(
  turnaround.value,
  "\n" + length.value,
  "\n" + width.value,
  "\n" + quantity.value,
  "\n" + totalInput.value,
  "\n" + totalStr.textContent,
)


// LISTENERS
inputs.forEach(input => {
  input.addEventListener('change', () => {
    calculate('banners', 1);
  });
  if (input.name.indexOf('-') !== -1) {
  }
});
const selects = document.querySelectorAll('select');
selects.forEach(select => {
  let selected = select.options[select.selectedIndex].value;
  select.onchange = function() {
    if (select.name.indexOf('-') !== -1) {
      selected = select.options[select.selectedIndex].value;
      console.log('selected value change: ', selected);
      if(selected === 'double') {
        calculate('banners', 2);
        
      }
    } else {
      calculate('banners', 1);

      }
    };
  });
  
  // FUNCTIONS
  function calculate(product, double) {
    let area = Number(length.value) * Number(width.value);
    let ftArea = area / 144;
    let basePrice = ftArea  * products[product]['price'];
    orderTotal = basePrice * Number(quantity.value);
      orderTotal *= double; 
    console.log("New Total: $", orderTotal);
    console.log(typeof orderTotal);
    totalStr.textContent = `Total: $ ${Math.max(minimumOrderTotal, orderTotal).toFixed(2)}`
    totalInput.value = orderTotal;
  }