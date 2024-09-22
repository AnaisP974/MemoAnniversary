// Animation formulaire ADD PHONE
const phoneBtn = document.getElementById('add-phone');
const phoneComponent = document.getElementById('phone-component');
const cancelPhone = document.getElementById('cancel-phone');
const yesSms = document.getElementById('yesSms');
const noSms = document.getElementById('noSms');
const textSms = document.getElementById('textSms');
const countryCode = document.getElementById('country_code');
const phoneInput = document.getElementById('phone');
const smsTextarea = document.getElementById('sms');

phoneBtn.onclick = function () {
    phoneComponent.classList.remove('hidden');
    phoneBtn.classList.add('hidden');
}

cancelPhone.onclick = function () {
    countryCode.value = "";
    phoneInput.value = "";
    smsTextarea.value = "";
    noSms.checked = true;
    phoneComponent.classList.add('hidden');
    phoneBtn.classList.remove('hidden');
}

yesSms.onclick = function () {
    textSms.classList.remove('hidden');
}

noSms.onclick = function () {
    textSms.classList.add('hidden');
}

// Animation formulaire ADD EMAIL
const emailBtn = document.getElementById('add-email');
const emailComponent = document.getElementById('email-component');
const cancelEmail = document.getElementById('cancel-email');
const yesEmail = document.getElementById('yesEmail');
const noEmail = document.getElementById('noEmail');
const textEmail = document.getElementById('text-email');
const emailInput = document.getElementById('email');
const emailTextarea = document.getElementById('message');

emailBtn.onclick = function () {
    emailComponent.classList.remove('hidden');
    emailBtn.classList.add('hidden');
}

cancelEmail.onclick = function () {
    emailTextarea.value = "";
    emailInput.value = "";
    noEmail.checked = true;
    emailComponent.classList.add('hidden');
    emailBtn.classList.remove('hidden');
}

yesEmail.onclick = function () {
    textEmail.classList.remove('hidden');
}

noEmail.onclick = function () {
    textEmail.classList.add('hidden');
}

// Animation formulaire ADD MORE
const moreBtn = document.getElementById('add-more');
const moreComponent = document.getElementById('more-component');
const cancelMore = document.getElementById('cancel-more');
const categorySelect = document.getElementById('category');
const descContent = document.getElementById('description');
const likesContent = document.getElementById('likes');

moreBtn.onclick = function () {
    moreComponent.classList.remove('hidden');
    moreBtn.classList.add('hidden');
}

cancelMore.onclick = function () {
    categorySelect.value = "";
    descContent.value = "";
    likesContent.value = "";
    moreComponent.classList.add('hidden');
    moreBtn.classList.remove('hidden');
}

