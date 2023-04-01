const form = document.querySelector('form');
const nameInput = document.querySelector('#name');
const submitLink = document.querySelector('#submit-link');

submitLink.addEventListener('click', (e) => {
    e.preventDefault();
    const name = nameInput.value;
    console.log(`Hello, ${name}!`);
    // Navigate to the next page with the user's input
    window.location.href = "HTMLpg.html";
});
