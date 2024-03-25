// import { TabsManager } from './tabs';
import { ExpandableText } from './expan-text';
import { OrderForm } from './forms/order-form';
import { MinOrder } from './forms/min-form';
// import $ from 'jquery';

window.onload = () =>  {

    // Scroll

    document.addEventListener('scroll', event => { 
        console.log(event.target.scrollTop) 
    });
     
    const smoothScrollLinks = document.querySelectorAll('.navigation__link'); 
     
    for (let link of smoothScrollLinks) { 
      link.addEventListener('click', event => { 
         event.preventDefault(); 
         
        const target = event.target; 
        const elementToScroll = document.querySelector(target.getAttribute('href')); 
        elementToScroll.scrollIntoView({ behavior: 'smooth', block: 'end'}); 
      }); 
    }

    // Tabs

    const tabsElem = document.getElementById('myTabs'); 
    new TabsManager(tabsElem);

    // Expan-text
    
    const textElems = document.querySelectorAll('.expandable-text'); 
   
    for (const el of textElems) { 
    new ExpandableText(el, 362); 
    
  }  
}

//Mobile-menu

$(".mobile-menu").click(function () {
  $(this).toggleClass("mobile-menu-active");
});

// Slick

  $(document).ready(function() {
    $('.slider').slick({
        slidesToShow: 4,
        prevArrow: '.switch__prev',
        nextArrow: '.switch__next'        
    });

    //Inputmask

    Inputmask().mask(document.querySelectorAll("input"));    
});

// Order-form

function init() {
  new OrderForm();
  new MinOrder();
}

$(document).ready(init);

//Mobile-bar

window.addEventListener('scroll',(event) => {
  const elem = document.getElementById('bar');
  const y = scrollY;
  if (y<100) { elem.style.display = "none"}
  else { elem.style.display = "block"};
});

