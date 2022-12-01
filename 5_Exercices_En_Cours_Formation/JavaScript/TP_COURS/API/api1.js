let mainSelector = document.querySelector("main");
let bodySelector = document.querySelector("body");
let sectionCreation;
let asideCreation;
let pCreation; 
let btnCreation;
let imgCreation;

fetch('https://picsum.photos/v2/list?page=1&limit=4')
  .then((response) => {
    return response.json()
  })
  .then((photos) => {
    let compteur = 0
    photos.forEach(photo => {
      compteur++
      createElements();
      let newPhotoUrl = `https://picsum.photos/id/${compteur}/600/600`;
      
      fillElements(newPhotoUrl, photo.author, photo.url);
      btnCreation.addEventListener("click", function(){
        location.href = photo.url
      })
      appendElements();
    });
  })


function createElements() {
   sectionCreation = document.createElement("section");
   asideCreation = document.createElement("aside");
   imgCreation = document.createElement("img");
   pCreation = document.createElement("p")
   btnCreation = document.createElement("button")
}

function fillElements(photoUrl, photoAuthor) {
  console.log("hello");
  imgCreation.src = photoUrl;
  pCreation.textContent = photoAuthor
  btnCreation.textContent = "Visit"
}

function appendElements() {
  mainSelector.append(sectionCreation);
  sectionCreation.append(asideCreation);
  sectionCreation.append(imgCreation);
  asideCreation.append(pCreation);
  asideCreation.append(btnCreation)
};

