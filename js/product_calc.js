const state = {
  error: "",
  sides: 1,
  sameDay: 0,
  lam: 0
}

const products = {
    ['sides-x']: {
      single: 1,
      double: 2
    },
    ['turnaround-x']: {
      standard: 0,
      same: 1
    },
    ['lamination-x']: {
      no: 0,
      yes: 1
    },
};

// VARIABLES
let orderTotal = 0;
const minimumOrderTotal = 20;
const turnaround = document.getElementById('turnaround-x');
const length = document.getElementById('length');
const width = document.getElementById('width');
const quantity = document.getElementById('quantity');
const price = document.getElementById('cost');
const productName = document.querySelector('h1').textContent.split(" ")[1];

const errorDiv = document.getElementById('error');
const totalInput = document.getElementById('total');
const totalStr = document.getElementById('totalStr');
const inputs = document.querySelectorAll('input');

console.log(
  turnaround.value,
  "\n" + price.value,
  "\n" + length.value,
  "\n" + width.value,
  "\n" + quantity.value,
  "\n" + totalInput.value,
  "\n" + totalStr.textContent,
  "\n" + productName
)


// LISTENERS
inputs.forEach(input => {
  input.addEventListener('change', () => {
    calculate();
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
        state.sides = products[select.name][selected]
        console.log(`\n*** ${state.sides} ***\n`)
        calculate();        
      } 
      else if(select.name === 'turnaround-x') {
        state.sameDay = products[select.name][selected]
        console.log(`\n*** ${state.sameDay} ***\n`)
        calculate();        
      }
      else if(select.name === 'lamination-x') {
        state.lam = products[select.name][selected]
        console.log(`\n*** ${state.lam} ***\n`)
        calculate();        
      }
    } else {
      calculate();

      }
    };
  });
  
  // FUNCTIONS

  // CALCULATE
  function calculate() {
    orderTotal = 0;
    let area = Number(length.value) * Number(width.value);
    let ftArea = area / 144;
    let basePrice = ftArea  * Number(price.value);
    orderTotal = basePrice * Number(quantity.value);
    if (state.sides === 2) {
      orderTotal = orderTotal * 2 
    }
    if (state.sameDay === 1) {
      orderTotal = orderTotal * 2
    }
    if (state.lam === 1) {
      orderTotal = orderTotal * 2
    }
    console.log("New Total: $", orderTotal);
    console.log(typeof orderTotal);
    if (isNaN(orderTotal)) {
      console.log("here")
      totalStr.innerHTML = `<span class="red-text">You can only input numbers for calculating sizes</span>`;
    } else {
      totalStr.textContent = `Total: $ ${Math.max(minimumOrderTotal, orderTotal).toFixed(2)}`;
      totalInput.setAttribute('value', Math.max(minimumOrderTotal, orderTotal).toFixed(2));
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