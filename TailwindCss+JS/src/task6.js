let form_div = document.getElementById('form');
let detail = document.getElementById('detail');

let submit = document.querySelector('button[type="submit"]');

submit.addEventListener('click',(e)=>{
    e.preventDefault();
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    form_div.classList.add('hidden');
    detail.classList.remove('hidden');

    document.getElementById('name1').innerText = `Name: ${name}`;
    document.getElementById('email1').innerText = `Email: ${email}`;
    document.getElementById('password1').innerText = `Password: ${password}`;

})