// function stickNavbar() {
//     document.addEventListener("DOMContentLoaded", function(){
//         window.addEventListener('scroll', function() {
//             if (window.scrollY > 50) {
//               document.getElementById('navbar_top').classList.add('fixed-top');
//               document.getElementById('navbar_top').classList.add('alobam');

//               // add padding top to show content behind navbar
//             //   navbar_height = document.querySelector('.navbar').offsetHeight;
//             //   document.body.style.paddingTop = navbar_height + 'px';
//             } else {
//               document.getElementById('navbar_top').classList.remove('fixed-top');
//               document.getElementById('navbar_top').classList.remove('alobam');

//                // remove padding top from body
//               document.body.style.paddingTop = '0';
//             } 
//         });
//     }); 
// }

// stickNavbar();


// function myFunction(){
//   document.getElementById('tap').style.display = 'block';
// } 


// document.getElementById('tap').onclick = function(){
//    myFunction() 
// };

const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').forEach(link =>{
  if(link.href.includes(`${activePage}`)){
    link.classList.add('active');
  }
})







let smallNav = document.getElementById('navSmall');

let myAim = document.getElementById('myaim');

smallNav.addEventListener('click', function(){
  // myAim.style.display = 'none'

  if(myAim.style.display === 'none' ){

    myAim.style.display = 'block'
  }else{
    myAim.style.display = 'none'
  }
})










  

