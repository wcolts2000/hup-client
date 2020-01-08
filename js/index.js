$(document).ready(function() {
  
  // NAVBAR
  // Init nav dropdowns
  $('.dropdown-button').dropdown({
    belowOrigin: true,
    alignment: 'left'
  });

  $('.button-collapse').sideNav({
    hover: true
  });

  // TABS
  $('.tabs').tabs();

  // PARALLAX
  $('.parallax').parallax();

  // FORM SELECTS
  $('select').material_select();
  $('.select-wrapper').click(function(e){
    e.stopPropagation();
  });

  // DATE PICKER
  $('.datepicker').pickadate({
    selectMonths: true,
    selectYears: 15,
    closeOnSelect: true
  })
  $('.datepicker').onClose = function(){ return $('#questions').focus() }
  // below code stops picker from immediately closing when clicked into nad also opening on its own when leaving window focus and refocusing the window/browser in Chrome (may be needed in SELECT elements also)
  $('.datepicker').on('mousedown',function(event){ event.preventDefault(); })
  // COLLAPSIBLE
  $('.collapsible').collapsible()

  // CAROUSEL
  // $('.carousel').carousel();
  // $('.carousel-slider').carousel({ fullWidth: true});

  // to be able to keyboard select the checkbox in register form
  const registerCheckbox = document.getElementById("privacy");
  registerCheckbox && registerCheckbox.addEventListener('keypress', (e) => { if (e.code === "Enter"){ registerCheckbox.checked = true } } )

  // admin tab logic
  class TabLink {
    constructor(element) {
      this.element = element;
      this.data = this.element.dataset.tab;
      this.itemElement = document.querySelector(`.tabs-item[data-tab='${this.data}']`);
      this.tabItem = new TabItem(this.itemElement);
      this.element.addEventListener('click', () => {this.select()})
    }
  
    select() {
      const links = document.querySelectorAll('.tabs-link');
      Array.from(links).forEach(link => {
        link.classList.remove('tabs-link-selected');
      });
      this.element.classList.add('tabs-link-selected');
      this.tabItem.select();
    }
  }  
  class TabItem {
    constructor(element) {
      this.element = element;
    }
    select() {
      let tabItemElements = document.querySelectorAll('.tabs-item');
      Array.from(tabItemElements).forEach(itemElement => { itemElement.classList.remove('tabs-item-selected');
    });
    this.element.classList.add('tabs-item-selected');
    }
  }
  let links = document.querySelectorAll('.tabs-link');
  links = Array.from(links).map( link => new TabLink(link));
  links.length > 0 && links[0].select();
});