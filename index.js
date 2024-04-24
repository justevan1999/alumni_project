

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



  // document.addEventListener(onclick, (e) =>{
  //   window.location.href = "index.html"
  // })

  // document.getElementById("bam").onclick = function() {
  //   window.location.href = "index.js"
  // }

 
// function showDetais() {
//     const getDetails = document.querySelector(".memberrr")

//     const myArray = [
//       {
//         id: 0,
//         person_name:"Arole Yusuf Adeshola",
//         heading: "President, Lascohet Alumni",
//         person_img: "assets/president-2.jpeg",
//         description: [
//           {para: 'A graduate of Environmental Health Technology from Lagos State College of Health Technology Yaba in 2004. Joined the Lagos State Civil Service in 2007 as an Environmental Health Officer.'},
//           {para: 'Former National Treasurer'},
//           {para: 'National Environmental Health Students of Nigeria (NAEHSN) 2003'},
//           {para: 'Former Vice Chairman, Student Representative Council, Student Representative Council, Lascohet Yaba 2002/2003'},
//           {para: 'Former Branch Secretary, NULGE Eti-Osa LG 2011/2014'},
//           {para: 'State Secretary EHOAN Lagos Chapter 2023 till date'},
//           {para: 'Secretary, Epe Grammar School Old Student Association (EGOSA) 1990/1995 set.'},
//           {para: 'Worked at Eti-Osa Local Government and Lagos State Primary Health Care Board, Yaba.'}
//         ],
//         // description: ["Former National Treasurer, National Environmental Health Students of Nigeria (NAEHSN) 2003", "Former Vice Chairman, Student Representative Council, Lascohet Yaba 2002/2003","Former Branch Secretary, NULGE Eti-Osa LG 2011/2014", "Former State Publicity Secretary EHOAN Lagos Chapter 2016/2023", "State Secretary EHOAN Lagos Chapter 2023 till date", "Secretary, Epe Grammar School Old Student Association (EGOSA) 1990/1995 set."],
//       },

//       {
//         id: 1,
//         person_name:"Taiwo, Olanrewaju Hafis",
//         heading: "Vise President, Lascohet Alumni",
//         person_img: "assets/exe-2.png",
//         description: [
//           {para: 'A dedicated healthcare professional shaping a brighter future for Community Health. With his first qualifications from the Lagos State College of Health Technology, he not only excelled academically but also held leadership roles, serving as the President of the National Association of Community Health Students of Nigeria (Lagos).'},
//           {para: 'Currently, as the Assistant Director of Community Health Services at the Lagos State Primary Healthcare Board District IV, Taiwo plays a pivotal role in advancing public health in Lagos State with a focus on Primary Health Care.'},
//           {para: 'Former Vice Chairman, Student Representative Council, Student Representative Council, Lascohet Yaba 2002/2003'},
//           {para: 'Beyond his professional achievements, he actively contributes to the LASCOHET Alumni, previously holding the position of Treasurer and now serving as the Vice President of the Alumni. He also serves as the Assistant Secretary of the National Association of Community Health Practitioners of Nigeria (Lagos). Taiwos commitment extends to his personal life, where he finds joy in exploring, connecting with people, innovating, reading, and showcasing his culinary skills.'},
//           {para: 'Known for his excellent communication, patient management, and relentless thirst for knowledge, Taiwo brings a can-do attitude to everything he undertakes. In addition to his professional success, he takes pride in his role as a loving husband and devoted father to two wonderful children.'},
//         ],

//       },

//       {
//         id: 2,
//         person_name:"Dawodu Oluwagbemiga Joseph",
//         heading: "General Secretary",
//         person_img: "assets/exe-5.png",
//         description: [
//           {para: 'A medical Laboratory Scientist'},
//           {para: 'He was a medical Laboratory Technician within 2012 to 2019 . He also was the Public Relations Officer for the Association of Medical Laboratory Technicians and Assistant of Nigeria Lagos chapter. Presently the Treasurer to the Association of medical Laboratory Scientist of Nigeria Lagos State Civil Service Chapter.'},
//           {para: 'He works at the Lagos State Primary health care Health District III as the Assistant Director Medical Laboratory Services '},
//           {para: 'He has also helped younger  ones to discover there talents as he contributes more on youth development programs.'},
//           {para: 'MLS Dawodu Oluwagbemiga Joseph was the former assistant General Secretary to  The LASCOHET ALUMNI .'},
//         ],

//       },

//       {
//         id: 3,
//         person_name:"Salawu Quadry Olatunji",
//         heading: "Assistant General Secretary (TLA)",
//         person_img: "assets/esses.jpeg",
//         description: [
//           {para: 'Salawu Quadry Olatunji is a graduate of Lagos state college of Health Technology (LASCOHET) of 2016 set from the department of Environmental Health Technology.'},
//           {para: 'He is the Assistant General Secretary (AGS) elect of The LASCOHET Alumni 2022.'},
//           {para: 'He was the former Vice President of National Association of Environmental Health Students of Nigeria (NAEHSN) LASCOHET chapter in the year 2014 - 2015.'},
//           {para: 'Olatunji has also served as President of Accounting Department, Grace Polytechnic, Joseph Shyngle Surulere, Lagos Under the umbrella of National Association of Polytechnic Accountancy Student (NAPAS) Lagos State Chapter.'},
//           {para: 'Olatunji, currently work with Lagos State Government, the department of Environmental Health Services, under the Lagos  State Primary Health Care Board (LS PHCB).'},
//         ],

//       },

//       {
//         id: 4,
//         person_name:"Omonusi Kayode Solomon",
//         heading: "Provost marshal",
//         person_img: "assets/exe-3.png",
//         description: [
//           {para: 'Has a diverse set of skills and interests. Being a graduate of Health Information Technology in the year 2012 and having experience in the Lagos State Civil Service since 2006. He has a strong foundation in the healthcare sector.'},
//           {para: 'His leadership roles in college, such as being the departmental President of the National Association of Health Information Students (N.A.H.I.M.S.)and Deputy Chief Judge of the Student Union Government (S.U.G.), demonstrate his ability to take on responsibilities and work effectively in a team.'},
//           {para: 'Additionally, his involvement in community development as the vice chairman of the Campos Brazilian Quarters Community Development Association and being a member of the Lagos State Community Policing Unit (Lions Building) shows his commitment to making a positive impact in his community. He serves as the current Disciplinary Officer of The LASCOHET Alumni.'},
//           {para: 'Being married with kids signifies his commitment to family and the importance he places on building strong relationships.'},
//           {para: 'Overall, Omonusi Kayode Solomons background and interests reflect a well-rounded individual with a passion for healthcare, community development, and entertainment.'},
//         ],

//       },

//       {
//         id: 5,
//         person_name:"Asekun Ekundayo mathew",
//         heading: "Public relation officer",
//         person_img: "assets/exe-8.png",
//         description: [
//           {para: 'Comrade Asekun Ekundayo is a health practitioner,founder and the present ceo of max health consortium.'},
//           {para: 'After working in several hospitals and medical settings. He then proceeded to work at el alan construction company for a period of 5 years as the first emergency response officer for the tallest and most luxurious high rise tower in ikoyi where he diversified to improvise and sharpened his skills and experience in the real estate sector among other top luxurious project in the state. '},
//           {para: 'Comrade Asekun Ekundayo is a cultural ambassador and also the ceo of educate yourself; a platform where health awareness is created and people are enlightened on how to take their health seriously. '},
//         ],

//       },

//       {
//         id: 6,
//         person_name:"Akinyanmi Abraham Akintomide",
//         heading: "Director of special duties",
//         person_img: "assets/exe-9.png",
//         description: [
//           {para: 'A Community Health Practitioner and a health educator. Im also an ambassador of workplace safety LASG. A diploma certificate in Community Health at Lagos state college of health technology and a degree certificate Health Education at University of Lagos, amongst other certificate programmes. '},
//           {para: 'I work with the LASG ministry of health, primary health care as a community health practitioner.'},
//           {para: 'Im currently serving as TLA Dir. Of Special Duties, and also as the Secretary of MEHWU yaba lcda branch.'},
//         ],

//       },
//     ]


//     let data = [];
    
//     myArray.forEach((object) => {
//       // console.log("Object:", object);
//       data += `
//         <div class="details">
//            <div class="bod">
//               <h3>${object.person_name}</h3>
//               <span class="president">${object.heading}</span>
//            </div>
//            <img src="${object.person_img}" alt=""> 
//         </div>
//       `
      
//       // Using forEach to iterate through the subArray of each object
//       object.description.forEach((subObject) => {
//         // console.log("Sub Object:", subObject);
        

//         data += `
//         <p class="para">${subObject.para}</p>
//         `
//       });

      
//     })

//     getDetails.innerHTML = data;

// }

// showDetais()
        

// function getStates() {
//   const display = document.getElementById("state-select");
//   const myheader = new Headers();
//   myheader.append('Content-Type', 'application/json')

//   const states = JSON.stringify({
//     "country": "Nigeria"
//   })

//   const getMethod = {
//     method: 'POST',
//     headers: myheader,
//     body: states
//   }

//   let mone = {
//     name: "select state"
//   }

//   let mdata = [];
//   mdata.push(mone);

//   let data = [];

//   const url = `https://countriesnow.space/api/v0.1/countries/states`;

//   fetch(url, getMethod)
//   .then(response => response.json())
//   .then(result => {
//     console.log(result)

//     for (i = 0; i < mdata.length; i++) {
//       result.data.states.unshift(mdata[i]);
//     }
//     console.log(result)

//     result.data.states.map((item) => {

//       if (item.name === "select state") {
//         return data += `
//          <option>${item.name}</option>
        
//         `
//       }
//       else {
//         return data += `
//         <option value="${item.name}">${item.name}</option>
//      `
//       }
//     })

//     display.innerHTML = data;
//   })
//   .catch(error => console.log('error', error));
// }


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








