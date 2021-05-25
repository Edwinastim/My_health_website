function isEmpty() {
  let name = document.getElementById('cardholder').value
  let date = document.getElementById('date').value
  let cardNumber = document.getElementById('cardnumber').value
  let cvc = document.getElementById('verification').value
  if(name === "" || date === "" || cardNumber === "" || cvc === "") {
    alert('Please fill out all fields')
    return false
  } else {
      return true
  }
}
