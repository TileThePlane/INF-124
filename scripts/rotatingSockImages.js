var dir = 'images/rotate/'
var imageArray = new Array(7);
for (i=0; i<imageArray.length; i++)
  imageArray[i] = dir + (i+1) + '.jpg';

var imageCounter = 0;
function rotateImage(){
  var image = document.getElementById('placeHolder');
  image.src = imageArray[imageCounter];
  ++imageCounter;
  if (imageCounter == 7) imageCounter = 0;
}

function getRotatingSockImages(){
  document.getElementById('placeHolder').src=imageArray[5];
  setInterval('rotateImage()', 2000);
}
