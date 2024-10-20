document.addEventListener("DOMContentLoaded", () => {
  const menu_toggle = document.getElementById("menu_toggle");

  // Check if menu_toggle exists before adding the event listener
  if (menu_toggle) {
    menu_toggle.addEventListener("click", () => {
      const mobile_nav = document.getElementById("sm_ul");
      if (mobile_nav) {
        mobile_nav.classList.toggle("show_menu");
      } else {
        console.error("Element with ID 'sm_ul' not found");
      }
    });
  } else {
    console.error("Element with ID 'menu_toggle' not found");
  }

  // Highlight the current page in the navigation menu
  const currentPage = window.location.pathname; // e.g., "/index.php"
  console.log("Current Page:", currentPage);

  const navLinks = document.querySelectorAll("nav ul li a");

  // Update homeLink to use the actual homepage path (e.g., index.php)
  const homeLink = document.querySelector("nav ul li a[href='index.php']");

  if (homeLink) {
    homeLink.classList.add("hideee");
  } else {
    console.error("Home link not found");
  }

  // Loop through all navigation links and highlight the current page
  navLinks.forEach((link) => {
    const linkPath = link.getAttribute("href"); // e.g., "index.php"

    // Compare the current path with the link's href attribute
    if (currentPage.includes(linkPath)) {
      link.classList.add("hideee"); // Add class if it's the current page
    } else {
      link.classList.remove("hideee"); // Remove class for other pages
    }
  });
});





  


// document.addEventListener('DOMContentLoaded', () => {
//   document.getElementById('read_button')?.addEventListener('click', () => {
//     window.location.href = 'added.php'
//   })
//   .onclick = () => {
//       window.location.href = 'added.php';
//   };
// });


  // document.addEventListener('DOMContentLoaded', function(){
  //   const arrowLeftbotton = document.getElementById('arrow-left');

  //   arrowLeftbotton.addEventListener('click', function() {

  //     window.location.href = 'index.php';
  //   });
  // });

  // document.getElementById('arrow_left').onclick = () => {
  //   window.location.href = 'index.php';
  // };

  // document.addEventListener('DOMContentLoaded', () => {
  //   document.getElementById('arrow_left').onclick = () => {
  //       window.location.href = 'index.php';
  //   };
  // });


function getCountries() {
  const display = document.getElementById("country-select");
  const myheader = new Headers();
  myheader.append('Content-Type', 'application/json')

  
  const getMethod = {
    method: 'GET',
    headers: myheader,
    // body: countries
  }
  let mone = {
    name: "select country"
  }

  let mdata = [];
  mdata.push(mone);


  let data = [];

  const url = `https://countriesnow.space/api/v0.1/countries/states`;

  fetch(url, getMethod)
  .then(response => response.json())
  .then(result => {
    console.log(result)
    localStorage.setItem("state", JSON.stringify(result.data))

    for (i = 0; i < mdata.length; i++) {
      result.data.unshift(mdata[i]);
    }
    console.log(result)

    result.data.map((item) => {
      if (item.name ==="select country") {
        return data += `
        <option>${item.name}</option>
        `
      }
      else {
        return data +=`
        <option value="${item.name}">${item.name}</option>
        `
      }
    })

    display.innerHTML = data;
  })
  .catch(error => console.log('error', error));
}




function getCountryState(event) {
  const getGm = document.querySelector(".gm");
  const selState = document.getElementById("state-select")
  const getcountry = event.target.value;

  const getState = localStorage.getItem("state");
  const theState = JSON.parse(getState)

  let data = [];

  theState.map((item) => {

    if (getcountry === item.name) {
      if(item.states.length === 0) {
          data +=`
            <option>No state found</option>
          `
      }
      else {
          item.states.map((state) => {
              data += `
                <option>${state.name}</option>
              `
          })
      }
      selState.innerHTML = data;
      getGm.style.display = "block";
  }
  })
}














