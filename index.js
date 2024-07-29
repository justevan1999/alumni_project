document.addEventListener("DOMContentLoaded", () => {
    const menu_toggle = document.getElementById("menu_toggle");
    menu_toggle?.addEventListener("click", () => {
      const mobile_nav = document.getElementById("sm_ul");
      mobile_nav.classList.toggle("show_menu");
    });
  
    // Highlight the current page in the navigation menu
    const currentPage = window.location.pathname;
    console.log("Current Page:", currentPage);
  
    const navLinks = document.querySelectorAll("nav ul li a");
  
    // Default: Highlight the "Home" link
    // const homeLink = document.querySelector("nav ul li a[href='/']");
    const homeLink = document.querySelector('nav ul li a')
    
    if (homeLink.href.split('/')[4] === 'index.php') {
      homeLink.classList.add("hideee");
    }
  
    navLinks.forEach((link) => {
      const linkPath = link.getAttribute("href");
      // Check if the current page exactly matches the link path
      if (currentPage === linkPath) {
        link.classList.add("hideee");
      } else {
        link.classList.remove("hideee");
      }
    });
  });

  
document.addEventListener('DOMContentLoaded', function() {
  const readmoreButton = document.getElementById('read_button');

  readmoreButton?.addEventListener('onClick', function() {
    window.location.href = 'added.php';
  });
});

document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('read_button')?.addEventListener('click', () => {
    window.location.href = 'added.php'
  })
  // .onclick = () => {
      // window.location.href = 'added.php';
  // };
});


  // document.addEventListener('DOMContentLoaded', function(){
  //   const arrowLeftbotton = document.getElementById('arrow-left');

  //   arrowLeftbotton.addEventListener('click', function() {

  //     window.location.href = 'index.php';
  //   });
  // });

  // document.getElementById('arrow_left').onclick = () => {
  //   window.location.href = 'index.php';
  // };

  document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('arrow_left').onclick = () => {
        window.location.href = 'index.php';
    };
  });


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










