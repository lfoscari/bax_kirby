var colorsources = document.querySelectorAll(".swatches span"),
    container = document.querySelector(".container"),
    isTablet = window.innerWidth < 980,
    isMobile = window.innerWidth < 600;

/*
  Cliccando gli swatches cambia il backgroundColor del container
  il colore viene salvato nel local storage
*/

document.body.style.backgroundColor = localStorage.getItem("backgroundColor");
if(document.body.style.backgroundColor == 'rgb(251, 77, 82)') {
  document.body.classList.add("white");
} else {
  document.body.classList.remove("white");
}
setTimeout(() => document.body.style.transition = "background-color linear .25s", 500);

colorsources.forEach((s, index) => {
  s.addEventListener("click", () => {
    var c = document.body.style.backgroundColor = colorsources[index].style.backgroundColor;
    localStorage.setItem("backgroundColor", c);
    if(c == 'rgb(251, 77, 82)') {
      document.body.classList.add("white");
    } else {
      document.body.classList.remove("white");
    }
  });
});

/*
  Se in mobile il colore della pagina è random rispetto agli swatches
*/

if(isMobile) {
  var random_color_index = Math.floor(Math.random() * colorsources.length);
  var c = document.body.style.backgroundColor = colorsources[random_color_index].style.backgroundColor;
  if(c == 'rgb(251, 77, 82)') {
    document.body.classList.add("white");
  } else {
    document.body.classList.remove("white");
  }
}

/*******************
        HOME
*******************/

function isHome () {

  /* Animazione del testo */

  var so = 0;

  function Marquee () {
    tp.setAttributeNS(null, "startOffset", so + "%");
    if(so <= 0) so = 50;
    so -= .025;
    requestAnimationFrame(Marquee);
  }

  requestAnimationFrame(Marquee);

  /* La posizione del mouse incide sull'immagine e il link al centro della pagina */

  var project_link = document.querySelector(".project-link"),
      left_label = document.querySelector(".label");

  var projects_images = document.querySelectorAll(".project-link img");

  changeProjectOnDisplay(projects_images, 0);

  /*
    I base alla posizione sull'asse y del mouse cambiano l'immagine
    il link e il testo in pagina.
    Divido la pagina in 4 sezioni e ogni volta che il mouse si sposta
    controllo se si trovi in una sezione diversa da quella precedente
  */

  var i = 0;

  if (!isTablet) {

    var portion = window.innerHeight / projects_images.length;

    onmousemove = function(e) {
      var y = e.clientY;
          t = i;

      i = Math.floor(y / portion);

      if(i != t)
        changeProjectOnDisplay(projects_images, i);
    };

  } else {

    setInterval(function () {
      changeProjectOnDisplay(projects_images, i);
      i = (i + 1) % projects_images.length;
    }, 750);

  }

  function changeProjectOnDisplay(projects_images, i) {
    projects_images.forEach(p => p.classList.add("hide"));
    projects_images[i].classList.remove("hide");
    left_label.innerHTML = projects_images[i].getAttribute("data-text");
    project_link.href = projects_images[i].getAttribute("data-url");
  }
}

/*******************
       ABOUT
*******************/

function isAbout () {

  /* In hover sui topic l'immagine sotto cambia */

  var topics = document.querySelectorAll(".introduction span"),
  image_target = document.querySelector(".gun"),
  image, temp;

  topics.forEach((t) => {
    t.addEventListener('mouseover', (event) => {
      image = event.target.getAttribute('data-image');
      if(image != temp) {
        image_target.setAttribute('src', image);
        image = temp;
      }
    })
  });

}

/*******************
       WORKS
*******************/

function isWorks () {

  var gif_works = container.querySelectorAll(".gif img");

  /*  Tra i works ce ne solo alcuni che in hover hanno una gif  */

  gif_works.forEach((g) => {
    var static_path = g.getAttribute("data-src"),
        gif_path = g.getAttribute("data-hover");
    g.addEventListener("mouseover", (e) => {
      g.setAttribute("src", gif_path);
      g.setAttribute("data-hover", static_path);
    })
    g.addEventListener("mouseleave", (e) => {
      g.setAttribute("src", static_path);
      g.setAttribute("data-hover", gif_path);
    })
  })

}

/*******************
       ARTICLE
*******************/

function isArticle () {
  // const intro = document.querySelector(".intro"),
  //       intro_img = intro.querySelector("img");
  // var t = 0;
  //
  // intro.onmousemove = function(e) {
  //   if(( x = e.clientY ) != t) {
  //     x = 100 - Math.floor( x * 100 / intro.clientHeight );
  //     intro_img.style.filter = `invert(${x}%)`;
  //     t = x;
  //   }
  // }

  // /* Quando l'utente preme un'immagine questa viene ingrandita */
  // document.querySelectorAll(".gallery-grid img").forEach(i => {
  //   i.addEventListener("click", () => {
  //     i.classList.add("highlight")
  //   })
  // })
}

/*******************
       SOCIAL
*******************/

function isSocial () {

  return;

  /* Prendo i post di instagram */

  var posts = document.querySelector(".social"),
      name = 'andrea_bax',
      howManyPosts = 100;


  instagramPhotos("#artdirection");

  async function instagramPhotos(tag) {
    posts.innerHTML = ''
    const res = []

    try {
      const userInfoSource = await axios.get(`https://www.instagram.com/${name}/`)

      // userInfoSource.data contains the HTML from axios
      const jsonObject = userInfoSource.data.match(/<script type="text\/javascript">window\._sharedData = (.*)<\/script>/)[1].slice(0, -1),
            userInfo = JSON.parse(jsonObject),
            mediaArray = userInfo.entry_data.ProfilePage[0].graphql.user.edge_owner_to_timeline_media.edges;

      console.log(mediaArray);

      for (let media of mediaArray) {
        const node = media.node

        if ((node.__typename && node.__typename !== 'GraphImage')) {
          continue
        }

        var isWorkMedia = node.edge_media_to_caption.edges[0].node.text.includes(tag);

        if (isWorkMedia) {

          const p = []
          if (node.display_url) {
            p.push(node.display_url)

            try {
              p.push(node.edge_media_to_caption.edges[0].node.text) // caption
            } catch (e) {}

            try {
              p.push(`https://www.instagram.com/p/${node.shortcode}`)
            } catch (e) {}
          }

          res.push(p)

        }
      }
    } catch (e) {
      console.error(`Unable to retrieve photos. Reason: ${e.toString()}`)
    }

    for (i = 0; i < res.length; i++) {
      posts.innerHTML += `
        <div class="cell">
          <img src="${res[i][0]}"/>
        </div>
      `;
    }
  }

}
