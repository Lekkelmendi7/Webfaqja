const form = document.querySelector('.signup-form'),
  userNameField = document.querySelector('.name'),
  lnameField = document.querySelector('.lname'),
  emailField = document.querySelector('.email'),
  passwordField = document.querySelector('.password'),
  confirmPasswordField = document.querySelector('.passwordC'),
  submitBtn = document.querySelector('.disabled'),
  errorMsg = document.querySelector('.error-msg'),
  msg = document.querySelector('.signup-msg');


  const usernameRegEx = /^[A-Za-z .]{3,15}$/,
  lnameRegEx = /^[A-Za-z .]{4,15}$/,
  emailRegEx = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/,
  passwordRegEx = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
        

  let userIsValid = false,
  lnameIsValid = false,
  emailIsValid = false,
  passIsValid = false,
  cPassIsValid = false;
        
  
  
  function Fields(){
    userNameField.addEventListener('input', function(e){
      if(this.value === '' || usernameRegEx.test(e.target.value)){
        errorMsg.style.display = 'none'
        userIsValid = true
      }
      else{
        errorMsg.textContent = "Emri duhet te permbaj vetem shkronja dhe duhet te jete me i gjate se 2 shkronja"
        errorMsg.style.top = '108px'
        errorMsg.style.display = 'block'
        userIsValid = false
      }
      if(userIsValid && lnameIsValid && emailIsValid && passIsValid && cPassIsValid){
        submitBtn.classList.remove('disabled')
        submitBtn.disabled = false
      }
      else{
        submitBtn.classList.add('disabled')
        submitBtn.disabled = true
      }
    })
    lnameField.addEventListener('input', function(e){
        if(this.value === '' || lnameRegEx.test(e.target.value)){
          errorMsg.style.display = 'none'
          lnameIsValid = true
        }
        else{
          errorMsg.textContent = "Mbiemri duhet te permbaj vetem shkronja dhe duhet te jete me i gjate se 3 shkronja"
          errorMsg.style.top = '187px'
          errorMsg.style.display = 'block'
          lnameIsValid = false
        }
        if(userIsValid && lnameIsValid && emailIsValid && passIsValid && cPassIsValid){
          submitBtn.classList.remove('disabled')
          submitBtn.disabled = false
        }
        else{
          submitBtn.classList.add('disabled')
          submitBtn.disabled = true
        }
      })
      
    emailField.addEventListener('input', function(e){
      if(this.value === '' || emailRegEx.test(String(e.target.value).toLowerCase())){
        errorMsg.style.display = 'none'
        emailIsValid = true
      }
      else{
        errorMsg.textContent = "Emaili duhet te jete ne rregull, duhet te shkruani te gjitha elementet e nje emaili"
        errorMsg.style.top = '264px'
        errorMsg.style.display = 'block'
        emailIsValid = false
      }
      if(userIsValid && lnameIsValid && emailIsValid && passIsValid && cPassIsValid){
        submitBtn.classList.remove('disabled')
        submitBtn.disabled = false
      }
      else{
        submitBtn.classList.add('disabled')
        submitBtn.disabled = true
      }
    })

    passwordField.addEventListener('input', function(e){
      if(this.value === '' || passwordRegEx.test(e.target.value)){
        errorMsg.style.display = 'none'
        passIsValid = true
      }
      else{
        errorMsg.textContent = "Kerkohen te pakten 8 karaktere. Duhen Shkronja, Numra, Karaktere te veqanta"
        errorMsg.style.top = '340px'
        errorMsg.style.display = 'block'
        passIsValid = false
      }
      if(userIsValid && lnameIsValid && emailIsValid && passIsValid  && cPassIsValid){
        submitBtn.classList.remove('disabled')
        submitBtn.disabled = false
      }
      else{
        submitBtn.classList.add('disabled')
        submitBtn.disabled = true
      }
    })
    confirmPasswordField.addEventListener('input', function(e){
      if(passwordField.value === confirmPasswordField.value){
        errorMsg.style.display = 'none'
        cPassIsValid = true
      }
      else{
        errorMsg.textContent = "Konfirmimi i password-it duhet te jete i njejt me password-in"
        errorMsg.style.top = '420px'
        errorMsg.style.display = 'block'
        cPassIsValid = false
      }
      if(userIsValid && lnameIsValid && emailIsValid && passIsValid  && cPassIsValid){
        submitBtn.classList.remove('disabled')
        submitBtn.disabled = false
      }
      else{
        submitBtn.classList.add('disabled')
        submitBtn.disabled = true
      }
    })
  }

  
  Fields()


  submitBtn.addEventListener('click', function(e){
    e.preventDefault()
    if(userNameField.value !== '' && lnameField.value !== '' && emailField.value !== '' && passwordField.value !== '' && confirmPasswordField.value !== ''){
      errorMsg.style.display = 'none'
      if(userIsValid && lnameIsValid && emailIsValid && passIsValid && cPassIsValid){
        errorMsg.style.display = 'none'

        userNameField.value = ''
        lnameField.value = ''
        emailField.value = ''
        passwordField.value = ''
        confirmPasswordField.value = ''
      }
      else{
        errorMsg.textContent = "Ndodhi nje gabim. Kontrolloni te dhenat tuaja dhe provoni perseri"
        errorMsg.style.top = '20px'
        errorMsg.style.display = 'block'
      }
    }
      else{
        errorMsg.textContent = "Duhet ti plotesoni te gjitha fushat!"
        errorMsg.style.top = '20px'
        errorMsg.style.display = 'block'
      }
  })