const options = document.querySelectorAll('[name=jurusan] option')
const jurusanUser = document.querySelector('[name=jurusanGender').getAttribute('value')

options.forEach(opt => {
    if (opt.getAttribute('value') === jurusanUser) opt.setAttribute('selected', true)
})