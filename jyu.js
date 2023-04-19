const bar = document.getElementById('bar');
const bor = document.getElementById('bar3');
const rob = document.getElementById('rab');

bar.addEventListener('click', () => {
    bor.style.display = 'block';
    rob.style.display = 'block';
    bar.style.display = 'none';
    // bor.classList.add("vuri");
    // console.log("jcnsdjcn");
});

rob.addEventListener('click', () => {
    bor.style.display = 'none';
    rob.style.display = 'none';
    bar.style.display = 'block';
})