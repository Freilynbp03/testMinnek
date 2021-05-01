// https://dog.ceo/api/breeds/list/all
const BREEDS_URL = 'https://dog.ceo/api/breeds/list/all';

const select = document.querySelector('.breeds');

fetch(BREEDS_URL)
    .then(res => {
        return res.json();
    })
    .then(data => {
        const breedsObject = data.message;
        const breedsArray = Object.keys(breedsObject);
        for (let i = 0; i < breedsArray.length; i++) {
            const option = document.createElement('option');
            option.value = breedsArray[i];
            option.innerText = breedsArray[i];
            select.appendChild(option);
        }
        console.log(breedsArray);
    });

select.addEventListener('change', e => {
    let url = `https://dog.ceo/api/breed/${e.target.value}/images/random`;
    let url1 = `https://dog.ceo/api/breed/${e.target.value}/list`;
    getDoggo(url);
    getSub(url1);
});

const img = document.querySelector('.dog-img');
const sub = document.querySelector('.dog-sub');

const getDoggo = url => {
    img.classList.remove('show');
    fetch(url)
        .then(res => {
            return res.json();
        })
        .then(data => {
            img.src = data.message;
        });
};
console.log('inpor');
const getSub = url1 => {
    console.log('inpor1');
    sub.classList.remove('show');
    fetch(url1)
        .then(res => {
            return res.json();
        })
        .then(data => {
            sub.value = data.message;
            console.log(data.message);
            console.log('inpor2');
        });
};
img.addEventListener('load', () => {
    img.classList.add('show');
});

console.log(sub.value);
console.log(img);
console.log('hola');