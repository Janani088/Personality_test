const form = document.querySelector('form');
const nameInput = document.querySelector('#name');
const submitButton = document.querySelector('#submit-link');

form.addEventListener('submit', (e) => {
    e.preventDefault(); 
    const name = nameInput.value;
    console.log(`Hello, ${name}!`);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "storename.php");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(`name=${name}`);

 
    window.location.href = "HTMLpg.html";
});

submitButton.addEventListener('click', (e) => {
    e.preventDefault(); 
    form.submit(); 
});


