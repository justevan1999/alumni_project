document.addEventListener("DOMContentLoaded", () => {
    const menu_toggle = document.getElementById("menu_toggle");
    menu_toggle.addEventListener("click", () => {
      const mobile_nav = document.getElementById("sm_ul");
      mobile_nav.classList.toggle("show_menu");
    });
  
    // Highlight the current page in the navigation menu
    const currentPage = window.location.pathname;
    console.log("Current Page:", currentPage);
  
    const navLinks = document.querySelectorAll("nav ul li a");
  
    // Default: Highlight the "Home" link
    const homeLink = document.querySelector("nav ul li a[href='/']");
    homeLink.classList.add("hideee");
  
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


  
        function showDetais() {
            const getDetails = document.querySelector(".Details")

            const myArray = [
              {
                id: 0,
                person_name:"Arole Yusuf Adeshola",
                heading: "President, Lascohet Alumni",
                person_img: "/assets/president-2.jpeg",
                description: ["Former National Treasurer, National Environmental Health Students of Nigeria (NAEHSN) 2003", "Former Vice Chairman, Student Representative Council, Lascohet Yaba 2002/2003","Former Branch Secretary, NULGE Eti-Osa LG 2011/2014", "Former State Publicity Secretary EHOAN Lagos Chapter 2016/2023", "State Secretary EHOAN Lagos Chapter 2023 till date", "Secretary, Epe Grammar School Old Student Association (EGOSA) 1990/1995 set."],
              }
            ]
    

            let data = [];

            myArray.map((item) => {
                data += `
                <div class="Details">
                <h3>${item.person_name}</h3>
                <span class="president">${item.heading}</span>
                    <p class="mt-5">
                      ${myArray.map(description => description.description[0])},
                      ${myArray.map(description => description.description[1])}

                         Former National Treasurer, National Environmental Health Students of Nigeria (NAEHSN) 2003
                         Former Vice Chairman, Student Representative Council, Lascohet Yaba 2002/2003
                    </p>

                    <p>
                      Former Branch Secretary, NULGE Eti-Osa LG 2011/2014
                      Former State Publicity Secretary EHOAN Lagos Chapter 2016/2023
                    </p>

                    <p>
                      State Secretary EHOAN Lagos Chapter 2023 till date
                      Secretary, Epe Grammar School Old Student Association (EGOSA) 1990/1995 set.
                    </p>
                    <div><img src="/assets/president-2.jpeg" alt=""></div>
                    </div>
                `
            })
            getDetails.innerHTML = data;

        }
        






