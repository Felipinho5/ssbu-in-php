const identifier = '.character-box';
const characterBoxes = document.querySelectorAll(identifier);
const fadeTimer = parseInt(getComputedStyle(document.querySelector(identifier)).getPropertyValue('--fade-timer'), 10);
let delay = 0;

characterBoxes.forEach(character =>
{
    character.style.animationDelay = delay + 'ms';
    console.log(character.style.animationDelay)
    delay += fadeTimer / 2;
});