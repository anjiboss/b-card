const userCard = (user) => {
  const card = $("<div class='card'></div>");
  const infContainer = $(`<div class="info-container"></div>`);
  const cardImg = $(
    `<img class="user-img"src=${user.image_dir} alt="User Image">`
  );
  const info = `<div class="info"><h2>${user.info}</h2></div>`;
  infContainer.append(info).append(cardImg);
  card.append(`<h1>${user.name}</h1>`).append(infContainer);
  $(".container").append(card);
};
