const btnTrigger = document.querySelectorAll('[data-role=trigger-modal]')
const modal = document.querySelector('[data-role=link-modal]')
const modalBody = document.querySelector('.modal-body')

btnTrigger.forEach(element => {
    
    element.addEventListener('click', () => {
        const key = element.dataset.key
        modalBody.innerHTML = `Anda akan menghapus ${element.dataset.name} dengan NIM ${element.dataset.nim}`
        modal.setAttribute('href', `./helper/delete.php?id=${key}`)
    })
});