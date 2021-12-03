const radios = document.querySelectorAll('[name=gender')
const genderUser = document.querySelector('[name=genderUser').getAttribute('value');

radios.forEach(radio => {
    if (radio.getAttribute('value') === genderUser) radio.setAttribute('checked', true)
})