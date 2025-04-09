class Timbre {
  nametimbre;
  Imageurl;
  descriptiontimbre;
  startdateperiod;
  enddateperiod;
  priceenchere;
  idtimbre;
  countryidcountry;
  conditionsidconditions;
  coloridcolor;

  constructor(
    nametimbre,
    Imageurl,
    descriptiontimbre,
    startdateperiod,
    enddateperiod,
    priceenchere,
    idtimbre,
    countryidcountry,
    conditionsidconditions,
    coloridcolor,
  ) {
    this.nametimbre = nametimbre;
    this.Imageurl = Imageurl;
    this.descriptiontimbre = descriptiontimbre;
    this.startdateperiod = startdateperiod;
    this.enddateperiod = enddateperiod;
    this.priceenchere = priceenchere;
    this.idtimbre = idtimbre;
    this.countryidcountry = countryidcountry;
    this.conditionsidconditions = conditionsidconditions;
    this.coloridcolor = coloridcolor;
  }

  representationHTML() {
    const imgHTML = document.createElement("img");
    imgHTML.src =
      `http://localhost/projetwebcopy/public/uploads/${this.Imageurl}`;
    imgHTML.classList.add("Carte-image");

    const pictureHTML = document.createElement("picture");
    pictureHTML.append(imgHTML);

    const titreHTML = document.createElement("h3");
    titreHTML.textContent = this.nametimbre;

    const divHTML = document.createElement("div");
    divHTML.append(titreHTML);
    divHTML.classList.add("Carte-titre", "titres", "rosarivo-regular-italic");

    const descriptionHTML = document.createElement("small");
    descriptionHTML.textContent = this.descriptiontimbre;

    const datedebutHTML = document.createElement("small");
    datedebutHTML.textContent = "Date de debut:" + this.startdateperiod;

    const datefinHTML = document.createElement("small");
    datefinHTML.textContent = "Date de fin:" + this.enddateperiod;

    const priceenchereHTML = document.createElement("small");
    priceenchereHTML.textContent = "Prix de base: $" + this.priceenchere;

    const divFlex = document.createElement("div");
    divFlex.classList.add("flex-row");

    const boutonHTML = document.createElement("a");
    boutonHTML.classList.add("bouton");
    boutonHTML.href =
      `/projetwebcopy/user/catalogue/show?idtimbre=${this.idtimbre}`;
    boutonHTML.textContent = "Voir";
    divFlex.append(boutonHTML);

    const article = document.createElement("article");
    article.classList.add("Carte");
    article.append(divHTML);
    article.append(pictureHTML);
    article.append(descriptionHTML);
    article.append(datedebutHTML);
    article.append(datefinHTML);
    article.append(priceenchereHTML);
    article.append(divFlex);

    return article;
  }
}
let timbres = [];

window.addEventListener("DOMContentLoaded", async () => {
  const res = await fetch("http://localhost/projetwebcopy/api/enchere", {
    method: "GET",
    headers: {
      "Accept": "application/json",
    },
  });

  const objetRes = await res.json();
  // console.log(objetRes);
  console.log(objetRes);

  for (let i = 0; i < objetRes.length; i++) {
    const timbreData = objetRes[i];

    const timbre = new Timbre(
      timbreData.nametimbre,
      timbreData.Imageurl,
      timbreData.descriptiontimbre,
      timbreData.startdateperiod,
      timbreData.enddateperiod,
      timbreData.priceenchere,
      timbreData.idtimbre,
      timbreData.countryidcountry,
      timbreData.conditionsidconditions,
      timbreData.coloridcolor,
    );

    timbres.push(timbre);
  }

  createMain(timbres);
});

const colorMap = {
  bleu: 1,
  rouge: 2,
  jaune: 3,
  orange: 4,
  vert: 5,
  gris: 6,
};

document.getElementById("applyColorBtn").addEventListener("click", (event) => {
  event.preventDefault();

  const checkedBoxes = Array.from(
    document.querySelectorAll("input[type=checkbox]:checked"),
  );

  console.log("CheckedBoxes:", checkedBoxes);

  const selectedColors = [];

  checkedBoxes.forEach((box) => {
    const label = box.getAttribute("aria-labelledby");
    const colorId = colorMap[label];

    if (colorId !== undefined) {
      selectedColors.push(colorId);
    }
  });

  console.log("selected Colors:", selectedColors);

  const filteredTimbres = timbres.filter((t) =>
    selectedColors.includes(t.coloridcolor)
  );

  console.log(filteredTimbres);

  createMain(filteredTimbres);
});

const conditionMap = {
  Parfaite: 1,
  Excellente: 2,
  Bonne: 3,
  Moyenne: 4,
  Endommage: 5,
};

document.getElementById("applyConditionBtn").addEventListener(
  "click",
  (event) => {
    event.preventDefault();

    const checkedBoxes = Array.from(
      document.querySelectorAll("input[type=checkbox]:checked"),
    );

    const selectedConditions = [];

    checkedBoxes.forEach((box) => {
      const label = box.getAttribute("aria-labelledby");
      const conditionId = conditionMap[label];

      if (conditionId !== undefined) {
        selectedConditions.push(conditionId);
      }
    });

    const filteredTimbres2 = timbres.filter((t) =>
      selectedConditions.includes(t.conditionsidconditions)
    );

    createMain(filteredTimbres2);
  },
);

const cityMap = {
  Angleterre: 1,
  France: 2,
  Etatsunis: 3,
  Canada: 4,
  Allemagne: 5,
  Pologne: 6,
};

document.getElementById("applyCityBtn").addEventListener(
  "click",
  (event) => {
    event.preventDefault();

    const checkedBoxes = Array.from(
      document.querySelectorAll("input[type=checkbox]:checked"),
    );

    const selectedCities = [];

    checkedBoxes.forEach((box) => {
      const label = box.getAttribute("aria-labelledby");
      const cityId = cityMap[label];

      if (cityId !== undefined) {
        selectedCities.push(cityId);
      }
    });

    const filteredTimbres3 = timbres.filter((t) =>
      selectedCities.includes(t.countryidcountry)
    );

    createMain(filteredTimbres3);
  },
);

function createMain(timbres) {
  const main = document.querySelector("#main");
  main.innerHTML = "";
  const div = document.createElement("div");
  div.classList.add("main-Grille", "main-omg");

  timbres.forEach((timbre) => {
    div.append(timbre.representationHTML());
  });

  main.append(div);
}
