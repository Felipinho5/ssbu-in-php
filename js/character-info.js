const identifier = '.character-info div:not(.image)';
const characterInfo = document.querySelectorAll(identifier);
const fadeTimer = parseInt(getComputedStyle(document.querySelector(identifier)).getPropertyValue('--fade-timer'), 10);
let delay = 0;

characterInfo.forEach(info =>
{
    for (let i = 0; i < info.children.length; i++)
        info.children[i].style.animationDelay = delay + 'ms';

    delay += fadeTimer / 2;
});