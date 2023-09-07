
document.querySelectorAll('input').forEach(input => {
    input.addEventListener('keypress', e => {
        console.log(`User pressed: ${e.key}`);
        console.log('hi');
        if (!/^[a-zA-Z0-9 .,:]+$/.test(e.key)) {
            e.preventDefault();
        }
    
      });

      input.addEventListener('paste', e => {
          e.preventDefault();
        });
    });


