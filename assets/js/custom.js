
// navigation search-bar

let topSearch = document.getElementById("search-bar-bt");
topSearch.onclick = () => {
    let SearchBar = document.getElementById("search-bar")
    SearchBar.style.height = "100vh";
    SearchBar.style.display = "flex";   
    document.body.style.overflow = "hidden"; 
    }
 let btn = document.getElementById("remove-btn");
    btn.onclick = ()=>{
      remov = document.getElementById("search-bar")
      remov.style.display = "none" 
      document.body.style.overflow = "unset"; 
    }

// right-sidebar
// function open_right_side() {
//     "use strict";
//     const sidepanel = document.getElementById("right_side");
//     if (sidepanel) {
//         sidepanel.style.right = "0";
//     } else {
//         console.error("Error: Side panel element not found!");
//     }
// }

function close_right_sade() {
    "use strict";
    const sidepanel = document.getElementById("right_side");
    if (sidepanel) {
        sidepanel.style.right = "-355px";
    } else {
        console.error("Error: Side panel element not found!");
    }
}

// shaihan JS
function open_right_side() {
    var rightSide = document.getElementById("right_side");
    var computedStyle = window.getComputedStyle(rightSide);
    var rightValue = computedStyle.getPropertyValue("right");

    if (rightValue === "0px" || rightValue === "0") {
        rightSide.style.right = "";
    } else {
        rightSide.style.right = "0";
    }
}




// navbar side-slide

// navbar side-slide

function openNav() {
    document.getElementById("mySidenav").style.width = '280px';
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
let slid = document.getElementById("slid-btn");
slid.onclick = ()=>{
    let drop= document.getElementById("slid-drop");
   drop.classList.toggle("myst");
}

// slider code goes here

// button back to top 
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("backToTopBtn").style.display = "block";
    } else {
        document.getElementById("backToTopBtn").style.display = "none";
    }
}

function scrollToTop() {
    const scrollToTopBtn = document.documentElement || document.body;
    scrollToTopBtn.scrollIntoView({
        behavior: "smooth"
    });
}

// accordian of faq page

const accordionItems = document.querySelectorAll('.accordion-item1');

accordionItems.forEach((item, index) => {
  const header = item.querySelector('.accordion-header1');
  const toggleIcon = item.querySelector('.accordion-toggle1');

  if (index === 0) {
    item.classList.add('active');
    toggleIcon.classList.add('active');
    item.querySelector('.accordion-content').style.maxHeight = '1000px'; // Adjust this value
  }

  header.addEventListener('click', () => {
    accordionItems.forEach(otherItem => {
      if (otherItem !== item) {
        otherItem.classList.remove('active');
        otherItem.querySelector('.accordion-content').style.maxHeight = '0';
        otherItem.querySelector('.accordion-toggle1').classList.remove('active');
      }
    });

    item.classList.toggle('active');

    if (item.classList.contains('active')) {
      toggleIcon.classList.add('active');
    } else {
      toggleIcon.classList.remove('active');
    }

    const content = item.querySelector('.accordion-content');
    if (item.classList.contains('active')) {
      content.style.maxHeight = content.scrollHeight + 'px';
    } else {
      content.style.maxHeight = '0';
    }
  });
});

  // form Subscribe massage
  const aboutFor = document.getElementById('footer-sub2');
  const aboutMessag = document.getElementById('Succes-box2');
  aboutFor.addEventListener('submit', (event) => {
      event.preventDefault();
      aboutMessag.innerHTML = 'You Subscribe successfully!';
      aboutMessag.style.display = 'block';
      aboutFor.reset();
      setTimeout(() => {
        aboutMessag.style.display = 'none';
      }, 3000);
  });
