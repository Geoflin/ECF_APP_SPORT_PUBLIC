//affichage Front-End

const permission_moins_js = document.getElementById('permission_moins_js')
const main = document.getElementsByClassName('main')

const openDisplayFrontEndLanguage = () => {
    permission_moins_js.style.display= "none"
    main.style.display = "none"
  }

  permission_moins_js.addEventListener('click', openDisplayFrontEndLanguage)
