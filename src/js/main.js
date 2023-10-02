console.log('iftekher mahmud pervez')



// confrimed email popup show

let select_email = document.querySelector('#email'),
    re_email = document.querySelector('.email');

    console.log(re_email)

    select_email.oninput = () => {
        if (select_email.value.includes('@gmail.') || select_email.value.includes('@yahoo.') || select_email.value.includes('@outlook.') || select_email.value.includes('@aol.') || select_email.value.includes('@protonmail.') || select_email.value.includes('@icloud.') || select_email.value.includes('@yandex.') || select_email.value.includes('@zoho.') || select_email.value.includes('@gmx.')) {
            
            setTimeout(() => {
              re_email.classList.remove('hidden');
            }, 500);
    
        } else {
            re_email.classList.add('hidden');
    
        }
    }

// confrimed email popup show









