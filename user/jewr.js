const bag = document.getElementById('blu');
const bag2 = document.getElementById('blac');
const hj = document.getElementById('jk');
const up =document.getElementById('up');
const regi = document.getElementById('regi');
const inu = document.getElementById('inu');
const logi = document.getElementById('logi');
const colom = document.getElementById('colom');

bag.addEventListener('click', () => {
    hj.classList.remove("new");
    bag.style.color = 'blue';
    bag2.style.color = 'black';
});

bag2.addEventListener('click', () => {
    hj.classList.add("new");
    bag.style.color = 'black';
    bag2.style.color = 'blue';
});

up.addEventListener('click', () => {
    regi.classList.add("tamu");
    logi.style.display = 'none';
    colom.classList.add("bro");
});

inu.addEventListener('click', () => {
    regi.classList.remove("tamu");
    logi.style.display = 'flex';
    colom.classList.remove("bro");
});