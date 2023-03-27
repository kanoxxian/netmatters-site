const cookieStorage = {
    getItem: (key) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value}), {})
        return cookies[key];
    },
    setItem: (key, value) => {
        document.cookie = `${key}=${value}`
    },
}

const storageType = localStorage;
const consentPropertyName = 'nm-consent';

const shouldShowPopup = () => {
  const consent = storageType.getItem(consentPropertyName);
  return consent !== 'true';
};

const saveToStorage = () => {
  storageType.setItem(consentPropertyName, 'true');
};

window.onload = () => {
  const acceptFn = (event) => {
    saveToStorage(storageType);
    consentPopup.classList.add('hidden');
  };

  const consentPopup = document.getElementById('cookie-modal');
  const acceptBtn = document.getElementById('accept');
  acceptBtn.addEventListener('click', acceptFn);

  if (shouldShowPopup(storageType)) {
    consentPopup.classList.remove('hidden');
  }
};


function toggleNav() {
    document.body.classList.toggle("nav-open");
    document.body.classList.toggle("bodyfixed")
    $('#darken').toggleClass('darken');
}

document.querySelector(".hamburger").addEventListener("click", () => {
    toggleNav();
});


function removeDark() {
    var element = document.getElementById("darken");
    element.classList.remove("darken")
}

document.querySelector("#darken").addEventListener("click", () => {
    toggleNav();
});

function toggleSearchOn() {
    if ((window.outerWidth >= 992) && (window.outerWidth < 1260)) {
        document.querySelector(".search-show").setAttribute(
            "style", "display: inline; margin: 0;");
        document.querySelector(".search-bar").setAttribute(
            "style", "margin-left: auto; margin-right: 20px;");
        document.querySelector(".search-glass2").style.margin = "0";
        document.querySelector(".logo__container--support").style.display = "none";
        document.querySelector(".logo__container--contact").style.display = "none";
        isOpen = false;
    }
}

function toggleSearchOff() {
    if ((window.outerWidth >= 992) && (window.outerWidth < 1260)) {
        document.querySelector(".search-show").removeAttribute(
            "style", "display: inline; margin: 0;");
        document.querySelector(".search-bar").removeAttribute(
            "style", "margin-left: auto; margin-right: 20px;");
        document.querySelector(".search-glass2").style.margin = null;
        document.querySelector(".logo__container--support").style.display = null;
        document.querySelector(".logo__container--contact").style.display = null;
        isOpen = true;
    }
}

var isOpen = true;

function toggleSearch() {
   isOpen ? toggleSearchOn() : toggleSearchOff();
};


function validateForm() {
    const name = document.getElementById('name');
    const company = document.getElementById('company');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const subject = document.getElementById('subject');
    const message = document.getElementById('message');
    const phoneRegex = /^[0-9]+$/;
  
    let isValid = true;
  
    if (name.value.trim() === '') {
      name.style.border = '1px solid red';
      isValid = false;
    } else {
      name.style.border = '';
    }
  
    if (company.value.trim() === '') {
      company.style.border = '1px solid red';
      isValid = false;
    } else {
      company.style.border = '';
    }
  
    if (email.value.trim() === '') {
      email.style.border = '1px solid red';
      isValid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
      email.style.border = '1px solid red';
      isValid = false;
    } else {
      email.style.border = '';
    }
  
    if (phone.value.trim() === '') {
      phone.style.border = '1px solid red';
      isValid = false;
    } else if (!phoneRegex.test(phone.value)) {
      phone.style.border = '1px solid red';
      isValid = false;
    } else {
      phone.style.border = '';
    }
  
    if (subject.value.trim() === '') {
      subject.style.border = '1px solid red';
      isValid = false;
    } else {
      subject.style.border = '';
    }
  
    if (message.value.trim() === '') {
      message.style.border = '1px solid red';
      isValid = false;
    } else {
      message.style.border = '';
    }
  
    return isValid;
  }
  
  const sendEnquiryButton = document.querySelector('.send-enq');
  
  sendEnquiryButton.addEventListener('click', function(event) {
    event.preventDefault();
    if (validateForm()) {
      event.currentTarget.removeEventListener(event.type, arguments.callee);
      event.currentTarget.click();
    }
  });
  