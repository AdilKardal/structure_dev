/**
 * Avec le tableau ci-dessous:
 * Stocker les données dans le locale storage.
 * Rafraichissez la page et afficher celle ci au format JSON dans votre console
 */
//JSON récuperer avec insomnia, requete sur api picsum.photo
let tableau  = [
    {
        "id": "1000",
        "author": "Lukas Budimaier",
        "width": 5626,
        "height": 3635,
        "url": "https://unsplash.com/photos/6cY-FvMlmkQ",
        "download_url": "https://picsum.photos/id/1000/5626/3635"
    },
    {
        "id": "1001",
        "author": "Danielle MacInnes",
        "width": 5616,
        "height": 3744,
        "url": "https://unsplash.com/photos/1DkWWN1dr-s",
        "download_url": "https://picsum.photos/id/1001/5616/3744"
    },
    {
        "id": "1002",
        "author": "NASA",
        "width": 4312,
        "height": 2868,
        "url": "https://unsplash.com/photos/6-jTZysYY_U",
        "download_url": "https://picsum.photos/id/1002/4312/2868"
    },
    {
        "id": "1003",
        "author": "E+N Photographies",
        "width": 1181,
        "height": 1772,
        "url": "https://unsplash.com/photos/GYumuBnTqKc",
        "download_url": "https://picsum.photos/id/1003/1181/1772"
    }
  ];

  localStorage.setItem("données",JSON.stringify(tableau));
  let arr = localStorage.getItem("données")
  console.log(JSON.parse(arr))
