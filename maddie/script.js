const button = document.getElementById('button-puppy-switch');
const image = document.getElementById('image-puppy-switch');
const puppyImages = [
  'https://i.pinimg.com/originals/34/77/de/3477de62c82d37cbc431a1f886e42609.jpg',
  'https://i.pinimg.com/originals/1a/92/89/1a9289a4d096d6f7745430da2d184e8a.jpg',
  'https://i.pinimg.com/236x/26/3d/c3/263dc3f4f017794fc3ee7d20aa9ffe69--poodles-toy-red-poodles.jpg',
  'http://mapinstitute.org/data/wallpapers/62/im58236065.jpg',
];
let counter = 0;

button.addEventListener('click', () => {
  image.src = puppyImages[counter];
  counter = counter === puppyImages.length - 1 ? 0 : counter + 1;
});
