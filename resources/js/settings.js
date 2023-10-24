const value = document.querySelector("#value");
const input = document.querySelector("#quality");
value.textContent = input.value;

input.addEventListener("input", (event) => {
    value.textContent = event.target.value;
});

const settingsBtn = document.getElementById('settingsBtn');
const displayRange = document.getElementById('displayRange');

settingsBtn.addEventListener('click', function() {
    if (displayRange.style.display === 'none' || displayRange.style.display === '') {
        displayRange.style.display = 'block';
    } else {
        displayRange.style.display = 'none';
    }
    event.stopPropagation();
});

document.addEventListener('click', function(event) {
    if (event.target !== displayRange && !displayRange.contains(event.target)) {
        displayRange.style.display = 'none';
    }
});