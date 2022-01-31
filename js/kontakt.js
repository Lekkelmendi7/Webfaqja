const form = document.querySelector('.signup-form'),
  userNameField = document.querySelector('.name'),
  lnameField = document.querySelector('.lname'),
  subjectField = document.querySelector('.subject'),
  submitBtn = document.querySelector('.disabled'),
  errorMsg = document.querySelector('.error-msg');

  const usernameRegEx = /^[A-Za-z .]{3,15}$/,
  lnameRegEx = /^[A-Za-z .]{4,15}$/,
  subjectRegEx = /^[A-Za-z .]{15,200}$/;

  let userIsValid = false,
  lnameIsValid = false,
  subjectIsValid = false;


  function contactFields(){
    userNameField.addEventListener('input', function(e){
      if(this.value === '' || usernameRegEx.test(e.target.value)){
        errorMsg.style.display = 'none'
        userIsValid = true
      }
      else{
        errorMsg.textContent = "Emri duhet te permbaj vetem shkronja dhe duhet te jete me i gjate se 2 shkronja dhe te mos jete me i gjate se 15 shkronja"
        errorMsg.style.display = 'block'
        userIsValid = false
      }
      if(userIsValid && lnameIsValid && subjectIsValid){
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
          errorMsg.textContent = "Mbiemri duhet te permbaj vetem shkronja dhe duhet te jete me i gjate se 3 shkronja dhe te mos jete me i gjate se 15 shkronja"
          errorMsg.style.display = 'block'
          lnameIsValid = false
        }
        if(userIsValid && lnameIsValid && subjectIsValid){
          submitBtn.classList.remove('disabled')
          submitBtn.disabled = false
        }
        else{
          submitBtn.classList.add('disabled')
          submitBtn.disabled = true
        }
      })
      subjectField.addEventListener('input', function(e){
        if(this.value === '' || subjectRegEx.test(e.target.value)){
          errorMsg.style.display = 'none'
          subjectIsValid = true
        }
        else{
          errorMsg.textContent = "Mesazhi duhet te permbaj vetem shkronja dhe duhet te jete me i gjate se 15 shkronja dhe te mos jete me i gjate se  shkronja"
          errorMsg.style.display = 'block'
          subjectIsValid = false
        }
        if(userIsValid && lnameIsValid && subjectIsValid){
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
