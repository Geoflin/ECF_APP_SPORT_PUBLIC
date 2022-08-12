//affichage Front-End

const permission_moins_js = document.getElementById('permission_moins_js')
const permissions_des_salles = document.getElementById('permissions_des_salles')

const openDisplayFrontEndLanguage = () => {
    permission_moins_js.style.display= "none"
    permissions_des_salles.style.display = "none"
  }

  permission_moins_js.addEventListener('click', openDisplayFrontEndLanguage)
