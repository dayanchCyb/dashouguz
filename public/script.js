var swiper = new Swiper('.mySwiper', {
  centeredSlides: true,
  speed: 2000,
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  }
})

const header = document.querySelector('.header')
const burger = document.querySelector('.header-bottom-burger')

burger.addEventListener('click', () => {
  header.classList.toggle('active')
  document.body.classList.toggle('_lock')
})

const languages = document.querySelector('.header-bottom-languages')

languages.addEventListener('click', () => {
  languages.classList.toggle('open')
})
// ==================

const routes = document.querySelectorAll('.orders__button')
const body = document.querySelectorAll('.orders__body')

// Add click event listeners to the routes
routes.forEach((button, index) => {
  button.addEventListener('click', function () {
    // Remove active class from all routes and tables
    routes.forEach((btn) => btn.classList.remove('_active'))
    body.forEach((body) => body.classList.remove('_active'))

    // Add active class to the clicked button and table
    this.classList.add('_active')
    body[index].classList.add('_active')
  })
})

// Get references to the buttons and tables
const buttons = document.querySelectorAll('.transports__btn')
const tables = document.querySelectorAll('.transports__table')

// Add click event listeners to the buttons
buttons.forEach((button, index) => {
  button.addEventListener('click', function () {
    // Remove active class from all buttons and tables
    buttons.forEach((btn) => btn.classList.remove('active'))
    tables.forEach((table) => table.classList.remove('active'))

    // Add active class to the clicked button and table
    this.classList.add('active')
    tables[index].classList.add('active')
  })
})
