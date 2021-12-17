const form = document.querySelector('.signup-form'),
  userNameField = document.querySelector('.name'),
  lnameField = document.querySelector('.lname'),
  submitBtn = document.querySelector('.disabled'),
  errorMsg = document.querySelector('.error-msg'),
  msg = document.querySelector('.contact-msg');

  const usernameRegEx = /^[A-Za-z .]{3,15}$/,
  lnameRegEx = /^[A-Za-z .]{4,15}$/;

  let userIsValid = false,
  lnameIsValid = false;


  function contactFields(){
    userNameField.addEventListener('input', function(e){
      if(this.value === '' || usernameRegEx.test(e.target.value)){
        errorMsg.style.display = 'none'
        userIsValid = true
      }
      else{
        errorMsg.textContent = "Emri duhet te permbaj vetem shkronja dhe duhet te jete me i gjate se 2 shkronja"
        errorMsg.style.display = 'block'
        userIsValid = false
      }
      if(userIsValid && lnameIsValid){
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
          errorMsg.style.display = 'block'
          lnameIsValid = false
        }
        if(userIsValid && lnameIsValid){
          submitBtn.classList.remove('disabled')
          submitBtn.disabled = false
        }
        else{
          submitBtn.classList.add('disabled')
          submitBtn.disabled = true
        }
      })
  }

  
  contactFields()

submitBtn.addEventListener('click', function(e){
    e.preventDefault()
    if(userNameField.value !== '' && lnameField.value !== ''){
      errorMsg.style.display = 'none'
      if(userIsValid && lnameIsValid){
        errorMsg.style.display = 'none'

        userNameField.value = ''
        lnameField.value = ''
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