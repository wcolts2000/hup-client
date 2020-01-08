const state = {
  error: "",
  sides: 1,
  sameDay: 0
}

const products = {
  banners: {
    price: 4,
    ['sides-x']: {
      single: 1,
      double: 2
    },
    ['turnaround-x']: {
      standard: 0,
      same: 1
    }
  }
};

// VARIABLES
let orderTotal = 0;
const minimumOrderTotal = 20;
const turnaround = document.getElementById('turnaround-x');
const length = document.getElementById('length');
const width = document.getElementById('width');
const quantity = document.getElementById('quantity');

const errorDiv = document.getElementById('error');
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
  let selected = select.options[select.selectedIndex];
  select.onchange = function() {
    if (select.name.indexOf('-') !== -1) {
      selected = select.options[select.selectedIndex].value;
      console.log('selected value change: ', selected);
      if(select.name === 'sides-x') {
        state.sides = products['banners'][select.name][selected]
        console.log(`\n*** ${state.sides} ***\n`)
        calculate('banners');        
      } 
      else if(select.name === 'turnaround-x') {
        state.sameDay = products['banners'][select.name][selected]
        console.log(`\n*** ${state.sameDay} ***\n`)
        calculate('banners');        
      }
    } else {
      calculate('banners');

      }
    };
  });
  
  // FUNCTIONS

  // CALCULATE
  function calculate(product) {
    orderTotal = 0;
    let area = Number(length.value) * Number(width.value);
    let ftArea = area / 144;
    let basePrice = ftArea  * products[product]['price'];
    orderTotal = basePrice * Number(quantity.value);
    if (state.sides === 2) {
      orderTotal = orderTotal * 2 
    }
    if (state.sameDay === 1) {
      orderTotal = orderTotal * 2
    }
    console.log("New Total: $", orderTotal);
    console.log(typeof orderTotal);
    if (isNaN(orderTotal)) {
      console.log("here")
      totalStr.innerHTML = `<span class="red-text">You can only input numbers for calculating sizes</span>`;
    } else {
      totalStr.textContent = `Total: $ ${Math.max(minimumOrderTotal, orderTotal).toFixed(2)}`;
      totalInput.value = orderTotal;
    }
  }

  // CREATE ERROR
  function createError(message) {
    const para = document.createElement('p');
    para.innerText = message;
    errorDiv.innerHTML = para;
  }
  
  // CLEAR ERRORS
  function clearErrorDiv(element) {
    setTimeout(() => {
      element.innerHTML = "";
    }, 4000);
  }