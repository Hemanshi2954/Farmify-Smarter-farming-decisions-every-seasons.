const scriptURL = 'https://script.google.com/macros/s/AKfycbxkd4blbKZmcJZWy2qcPknQPe5wSKtOjEouo0sIgJrvEKoJ3mcJ12r8qXaOJ2LnJb4xPg/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})