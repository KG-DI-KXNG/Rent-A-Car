window.addEventListener('msg', event => {
    const Toast = Swal.mixin({
  toast: true,
  position: event.detail.position,
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
  })
  
  Toast.fire({
  icon: event.detail.type,
  title: event.detail.message
  })
  
  });
  console.log('Sweetalert Init');
  