<?php
require_once 'header.php';

$pds=Dbops::getProduct($con);
$pds['n']>0?$products=$pds['f']:$products=[];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load More Example</title>
    <style type="text/css">body {
  font-family: 'Roboto', sans-serif;
}

#card-container {
  display: flex;
  flex-wrap: wrap;
}

.card {
  height: 55vh;
  width: calc((100% / 3) - 16px);
  margin: 8px;
  border-radius: 3px;
  transition: all 200ms ease-in-out;
  display: flex;
  align-items: center;
  justify-content: center;
}

.card:hover {
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.card-actions {
  margin: 8px;
  padding: 16px 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

#load-more {
  width: calc((100% / 3) - 8px);
  padding: 16px;
  background-color: white;
  border: none;
  cursor: pointer;
  transition: all 200ms ease-in-out;
  border-radius: 3px;
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 0.15rem;
}

#load-more:not([disabled]):hover {
  box-shadow: 0 1px 9px rgba(0, 0, 0, 0.2);
}

#load-more[disabled] {
  background-color: #eaeaea !important;
}</style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
     <?php $i=0;foreach($products as $k=>$v){
      ++$i; 
      $categoryname = $v['categoryname'];
      $productname = $v['name'];
      $image1 = adminproduct.$v['image_1'];
      $image2 = adminproduct.$v['image_2'];
      $image3 = adminproduct.$v['image_3'];
      $image4 = adminproduct.$v['image_4'];
      $image5 = adminproduct.$v['image_5'];
      $image6 = adminproduct.$v['image_6'];
      $edit=$v['id'];
      $delete=$v['id'];
      ?>
<?php echo  $productname;?>
    <?php } ?>
<div id="card-container">
</div>
<div class="card-actions">
  <button id="load-more">Load more</button>
  <span>Showing 
    <span id="card-count"></span> of 
    <span id="card-total"></span> cards      
  </span>

  <script type="text/javascript">
      const cardContainer = document.getElementById("card-container");
const loadMoreButton = document.getElementById("load-more");
const cardCountElem = document.getElementById("card-count");
const cardTotalElem = document.getElementById("card-total");

const cardLimit = 99;
const cardIncrease = 9;
const pageCount = Math.ceil(cardLimit / cardIncrease);
let currentPage = 1;

cardTotalElem.innerHTML = cardLimit;

const getRandomColor = () => {
  const h = Math.floor(Math.random() * 360);

  return `hsl(${h}deg, 90%, 85%)`;
};

const handleButtonStatus = () => {
  if (pageCount === currentPage) {
    loadMoreButton.classList.add("disabled");
    loadMoreButton.setAttribute("disabled", true);
  }
};

const createCard = (index) => {
  const card = document.createElement("div");
  card.className = "card";
  card.innerHTML = index;
  card.style.backgroundColor = getRandomColor();
  cardContainer.appendChild(card);
};

const addCards = (pageIndex) => {
  currentPage = pageIndex;

  handleButtonStatus();

  const startRange = (pageIndex - 1) * cardIncrease;
  const endRange =
    pageIndex * cardIncrease > cardLimit ? cardLimit : pageIndex * cardIncrease;
  
  cardCountElem.innerHTML = endRange;

  for (let i = startRange + 1; i <= endRange; i++) {
    createCard(i);
  }
};

window.onload = function () {
  addCards(currentPage);
  loadMoreButton.style.backgroundColor = getRandomColor();
  loadMoreButton.addEventListener("click", () => {
    addCards(currentPage + 1);
  });
};
  </script>
</body>
</html>
