const countSpan = document.querySelector(".count-span");
let count = Number(countSpan.textContent);

const plus = () => {
    count += 1;
    countSpan.innerHTML = count;
}

const minus = () => {
    if(count === 1) return;

    count -= 1;
    countSpan.innerHTML = count;
}
