const burgerMenu = document.querySelector('.burger_menu')
const offScreenMenu = document.querySelector('.off-screen-menu')
const searchGlass = document.querySelector('.search-glass')
const searchBar = document.querySelector('.search-bar')

burgerMenu.addEventListener('click', () => {
    burgerMenu.classList.toggle('active')
    offScreenMenu.classList.toggle('active')
})
searchGlass.addEventListener('click', () => {
    searchBar.classList.toggle('active')
})