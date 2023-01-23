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

const storageType = cookieStorage;
const consentPropertyName = 'nm-consent';

const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.classList.add('hidden');
    }
    const consentPopup = document.getElementById('cookie-modal');
    const acceptBtn = document.getElementById('accept');
    acceptBtn.addEventListener('click', acceptFn);

    if (shouldShowPopup(storageType)) {
            consentPopup.classList.remove('hidden');
        };
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






